<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();;

        return view('Admin.Dashboard.dashboard')->with([
            'products' => $products
        ]);
    }
}
