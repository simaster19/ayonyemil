<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Authentication;
use App\Http\Controllers\Dashboard\ProdukController;
use App\Http\Controllers\Dashboard\TestimonialController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'searchProduk'])->name('search');

//Route Login
Route::post('/login', [Authentication::class, 'login']);

//Route Registration
Route::post('/register', [Authentication::class, 'register']);

Route::get('email/verify/{id}', [Authentication::class, 'verify'])->name('verification.verify');
Route::get('email/verify', [Authentication::class, 'notice'])->name('verification.notice');
// Route::get('email/resend', [Authentication::class, 'resend'])->name('verification.resend');




Route::middleware(['auth:sanctum', 'isAdmin', 'verified'])->prefix('admin')->group(function () {
    //Product
    Route::get('/product', [ProdukController::class, 'index'])->name('all_product');
    Route::post('/product', [ProdukController::class, 'store'])->name('simpan_produk');
    Route::match(['POST', 'PUT'], '/product/{id}', [ProdukController::class, 'update'])->name('update_produk');
    Route::delete('/product/{id}', [ProdukController::class, 'destroy'])->name('delete_produk');
    Route::get('/product/{id}', [ProdukController::class, 'show'])->name('detail_produk');

    //Testimonial
    Route::post('/testimonial', [TestimonialController::class, 'store'])->name('simpan_testimonial');
    Route::match(['POST', 'PUT'], '/testimonial/{id}', [TestimonialController::class, 'update'])->name('update_testimonial');
    Route::delete('/testimonial/{id}', [TestimonialController::class, 'destroy'])->name('delete_testimonial');
    Route::get('/testimonial/{id}', [TestimonialController::class, 'show'])->name('detail_testimonial');
});
