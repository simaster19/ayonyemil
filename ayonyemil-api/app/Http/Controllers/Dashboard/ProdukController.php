<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(['auth:sanctum']);
    // }
    public function store(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'jumlah_produk' => 'required|numeric',
            'harga_produk' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'berat_produk' => 'required',
            'foto_produk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        if ($validators->fails()) {
            return response()->json([
                'status' => 402,
                'message' => 'Pesan Error',
                'data' => $validators
            ], 402);
        }

        if (!$request->has('foto_produk')) {
            $product = Product::create($request->all());
            return response()->json([
                'status' => 200,
                'message' => 'Succesfully',
                'data' => $product
            ], 200);
        } else {

            $foto_produk = $request->file('foto_produk');
            $foto_produk->storeAs('public/images/product/', $foto_produk->hashName());

            $product = Product::create([
                'nama_produk' => $request->nama_produk,
                'jenis_produk' => $request->jenis_produk,
                'foto_produk' => $foto_produk->hashName(),
                'jumlah_produk' => $request->jumlah_produk,
                'harga_produk' => $request->harga_produk,
                'harga_jual' => $request->harga_jual,
                'berat_produk' => $request->berat_produk

            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Succesfully',
                'data' => $product
            ], 200);
        }
    }

    public function update(Request $request, $id)
    {


        $validators = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'jumlah_produk' => 'required|numeric',
            'harga_produk' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'berat_produk' => 'required',
            'foto_produk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        if ($validators->fails()) {
            return response()->json([
                'status' => 422,
                'message' => 'Pesan Error',
                'data' => $validators->errors()
            ], 422);
        }


        $product = Product::findOrFail($id);

        if (!$request->has('foto_produk')) {
            $product->update($request->all());
            return response()->json([
                'status' => 200,
                'message' => 'Succesfully',
                'data' => $product
            ], 200);
        } else {

            $foto_produk = $request->file('foto_produk');
            $foto_produk->storeAs('public/images/product/', $foto_produk->hashName());

            Storage::delete('public/images/product/' . basename($product->foto_produk));

            $product->update([
                'nama_produk' => $request->nama_produk,
                'jenis_produk' => $request->jenis_produk,
                'foto_produk' => $foto_produk->hashName(),
                'jumlah_produk' => $request->jumlah_produk,
                'harga_produk' => $request->harga_produk,
                'harga_jual' => $request->harga_jual,
                'berat_produk' => $request->berat_produk

            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Succesfully',
                'data' => $product
            ], 200);
        }
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return response()->json([
            'status' => 200,
            'message' => 'Succesfully',
            'data' => $product
        ], 200);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        Storage::delete('public/images/product/' . basename($product->foto_produk));

        $product->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Data Berhasil Dhapus',
            'data' => NULL
        ], 200);
    }
}
