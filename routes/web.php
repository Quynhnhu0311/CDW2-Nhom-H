<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

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


/* =====Front-End===== */

//Products
Route::get('/tat-ca-san-pham', [ProductController::class,'all_products']);

Route::get('/shop-details/{id}', [HomeController::class, 'show_details']);

Route::get('/', [HomeController::class,'home']);
Route::get('feature/{feature_id}', [HomeController::class, 'show_product_home'])->name('showproducthome');

//Show all Page
Route::get('/{name?}',[MyController::class, 'index']);