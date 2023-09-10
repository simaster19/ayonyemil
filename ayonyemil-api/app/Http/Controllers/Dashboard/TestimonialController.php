<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'nama_customer' => 'required',
            'foto_customer' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'no_hp' => 'numeric',
            'catatan' => 'required'
        ]);


        if ($validators->fails()) {
            return response()->json([
                'status' => 422,
                'message' => 'Pesan Error',
                'data' => $validators->errors()
            ], 422);
        }

        if (!$request->has('foto_customer')) {
            $testimonial = Testimonial::create($request->all());
            return response()->json([
                'status' => 200,
                'message' => 'Succesfully',
                'data' => $testimonial
            ], 200);
        } else {

            $foto_customer = $request->file('foto_customer');
            $foto_customer->storeAs('public/images/customer/', $foto_customer->hashName());

            $testimonial = Testimonial::create([
                'nama_customer' => $request->nama_customer,
                'foto_customer' => $foto_customer->hashName(),
                'no_hp' => $request->no_hp,
                'instagram' => $request->instagram,
                'catatan' => $request->catatan
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Succesfully',
                'data' => $testimonial
            ], 200);
        }
    }

    public function update(Request $request, $id)
    {


        $validators = Validator::make($request->all(), [
            'nama_customer' => 'required',
            'foto_customer' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'no_hp' => 'numeric',
            'catatan' => 'required'
        ]);


        if ($validators->fails()) {
            return response()->json([
                'status' => 422,
                'message' => 'Pesan Error',
                'data' => $validators->errors()
            ], 422);
        }


        $testimonial = Testimonial::findOrFail($id);

        if (!$request->has('foto_customer')) {
            $testimonial->update($request->all());
            return response()->json([
                'status' => 200,
                'message' => 'Succesfully',
                'data' => $testimonial
            ], 200);
        } else {

            $foto_customer = $request->file('foto_customer');
            $foto_customer->storeAs('public/images/customer/', $foto_customer->hashName());

            Storage::delete('public/images/customer/' . basename($testimonial->foto_customer));

            $testimonial->update([
                'nama_customer' => $request->nama_customer,
                'foto_customer' => $foto_customer->hashName(),
                'no_hp' => $request->no_hp,
                'instagram' => $request->instagram,
                'catatan' => $request->catatan
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Succesfully',
                'data' => $testimonial
            ], 200);
        }
    }

    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return response()->json([
            'status' => 200,
            'message' => 'Succesfully',
            'data' => $testimonial
        ], 200);
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        Storage::delete('public/images/customer/' . basename($testimonial->foto_customer));

        $testimonial->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Data Berhasil Dhapus',
            'data' => NULL
        ], 200);
    }
}
