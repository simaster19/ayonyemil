<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    public function index()
    {


        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();


        return view('Admin.Dashboard.Testimonial.index')->with([
            'datas' => $testimonials
        ]);
    }
    public function store(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'nama_customer' => 'required',
            'foto_customer' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'no_hp' => 'numeric',
            'catatan' => 'required'
        ]);


        if ($validators->fails()) {
            return back()->with(['error_message' => $validators->messages()]);
        }

        if (!$request->has('foto_customer')) {
            $testimonial = Testimonial::create($request->all());
            return redirect()->route('all_testimonial')->with([
                'message' => 'Data Berhasil Ditambahkan!'
            ]);
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


            return redirect()->route('all_testimonial')->with([
                'message' => 'Data Berhasil Ditambahkan!'
            ]);
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
            return back()->with(['error_message' => $validators->messages()]);
        }


        $testimonial = Testimonial::findOrFail($id);

        if (!$request->has('foto_customer')) {
            $testimonial->update($request->all());
            return redirect()->route('all_testimonial')->with([
                'message' => 'Data Berhasil Diubah!'
            ]);
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

            return redirect()->route('all_testimonial')->with([
                'message' => 'Data Berhasil Diubah!'
            ]);
        }
    }

    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return [
            'datas' => $testimonial
        ];
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        Storage::delete('public/images/customer/' . basename($testimonial->foto_customer));

        $testimonial->delete();

        return redirect()->route('all_testimonial')->with([
            'message' => 'Data Berhasil Dihapus!'
        ]);
    }
}
