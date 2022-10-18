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

Route::get('/count', [Controllers\Products\ProductController::class, 'count']);

Route::get('/categories', [Controllers\Products\ProductController::class, 'categories']);

Route::get('/byname', [Controllers\Products\ProductController::class, 'byName']);

Route::get('/transactions', [Controllers\Products\ProductController::class, 'transactions']);
