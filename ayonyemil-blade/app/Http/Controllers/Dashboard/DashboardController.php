<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $testimonials = Testimonial::all();

        return view('Admin.Dashboard.dashboard')->with([
            'products' => $products,
            'testimonials' => $testimonials
        ]);
    }
}
