<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [Controllers\Products\ProductController::class, 'index']);

Route::prefix('/products')->name('products.')->group(function () {
    Route::get('/orders', [Controllers\Products\ProductController::class, 'orders'])->name('orders');
    Route::get('/contact', [Controllers\Products\ProductController::class, 'contact'])->name('contact');
});
