<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Customer
Route::get('/', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.home');
// /Customer

// Seller
Route::get('/seller/home', [App\Http\Controllers\SellerController::class, 'index'])->name('seller.home');
// /Seller
