<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{

    public function index()
    {



        $products = Product::orderBy('created_at', 'desc')->get();


        return view('Admin.Dashboard.Product.index')->with([
            'datas' => $products
        ]);
    }


    public function store(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'jumlah_produk' => 'required|numeric',
            'harga_produk' => 'required|numeric',
            'rasa' => 'required',
            'harga_jual' => 'required|numeric',
            'berat_produk' => 'required',
            'foto_produk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        if ($validators->fails()) {
            return back()->with(['error_message' => $validators->messages()]);
        }

        if (!$request->has('foto_produk')) {
            $product = Product::create($request->all());
            return redirect()->route('all_product')->with([
                'message' => 'Data Berhasil Ditambahkan!'
            ]);
        } else {

            $foto_produk = $request->file('foto_produk');
            $foto_produk->storeAs('public/images/product/', $foto_produk->hashName());

            $product = Product::create([
                'nama_produk' => $request->nama_produk,
                'jenis_produk' => $request->jenis_produk,
                'foto_produk' => $foto_produk->hashName(),
                'rasa' => $request->rasa,
                'jumlah_produk' => $request->jumlah_produk,
                'harga_produk' => $request->harga_produk,
                'harga_jual' => $request->harga_jual,
                'berat_produk' => $request->berat_produk

            ]);
            return redirect()->route('all_product')->with([
                'message' => 'Data Berhasil Ditambahkan!'
            ]);
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
            return back()->with(['error_message' => $validators->messages()]);
        }


        $product = Product::findOrFail($id);

        if (!$request->has('foto_produk')) {
            $product->update($request->all());
            return redirect()->route('all_product')->with([
                'message' => 'Data Berhasil DiUpdate'
            ]);
        } else {

            $foto_produk = $request->file('foto_produk');
            $foto_produk->storeAs('public/images/product/', $foto_produk->hashName());

            Storage::delete('public/images/product/' . basename($product->foto_produk));

            $product->update([
                'nama_produk' => $request->nama_produk,
                'jenis_produk' => $request->jenis_produk,
                'foto_produk' => $foto_produk->hashName(),
                'jumlah_produk' => $request->jumlah_produk,
                'rasa' => $request->rasa,
                'harga_produk' => $request->harga_produk,
                'harga_jual' => $request->harga_jual,
                'berat_produk' => $request->berat_produk

            ]);
            return redirect()->route('all_product')->with([
                'message' => 'Data Berhasil DiUpdate!'
            ]);
        }
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return [
            'datas' => $product
        ];
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        Storage::delete('public/images/product/' . basename($product->foto_produk));

        $product->delete();

        return redirect()->route('all_product')->with([
            'message' => 'Data Berhasil Dihapus!'
        ]);
    }
}
