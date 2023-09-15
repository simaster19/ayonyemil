<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Authentication;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\ProdukController;
use App\Http\Controllers\Dashboard\TestimonialController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/testimonial', [HomeController::class, 'testimonial']);
Route::get('/search', [HomeController::class, 'searchProduk'])->name('search');

//Route Login
Route::get('/login', [Authentication::class, 'index'])->name('form_login');
Route::post('/login', [Authentication::class, 'login'])->name('prosses_login');

//Route Registratio
Route::get('/register', [RegisterController::class, 'index'])->name('form_register');
Route::post('/register', [RegisterController::class,
  'register'])->name('prosses_register');

Route::get('email/verify/{id}', [Authentication::class, 'verify'])->name('verification.verify');
Route::get('email/verify', [Authentication::class, 'notice'])->name('verification.notice');
// Route::get('email/resend', [Authentication::class, 'resend'])->name('verification.resend');