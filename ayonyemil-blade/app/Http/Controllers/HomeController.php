<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
  public function index(Request $request) {

    $products = Product::all();
    $testimonials = Testimonial::all();

    return view('index', [
      'products' => $products,
      'testimonials' => $testimonials
    ]);

  }


  public function searchProduk(Request $request) {
    $nama_produk = $request->input('nama_produk');

    $key = 'search_' . md5($nama_produk);

    if (Cache::has($key)) {
      $products = Cache::get($key);
      // dd($products);
    } else {

      $products = Cache::remember($key, now()->addMinutes(30), function () use ($nama_produk) {
        return Product::where('nama_produk', 'LIKE', "%$nama_produk%")->orderBy('created_at', 'asc')->get();
      });
    }

    return response()->json([
      'status' => 200,
      'message' => 'successfully',
      'data' => $products
    ], 200);
  }
}