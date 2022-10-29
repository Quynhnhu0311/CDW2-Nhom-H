<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
>>>>>>> detail_and_related_product

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

<<<<<<< HEAD
Route::get('/', function () {
    return view('index');
});
Route::get('/products', function () {
    return view('shop');
});
Route::get('/detailProduct', function () {
    return view('shop-details');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blogs', function () {
    return view('blog');
});
Route::get('/blogDetail', function () {
    return view('blog-details');
});
Route::get('/cart', function () {
    return view('shopping-cart');
});
<<<<<<< HEAD
Route::get('/checkout', function () {
    return view('checkout');
});
=======
>>>>>>> create_table_database
=======

/* =====Front-End===== */

//Products
Route::get('/tat-ca-san-pham', [ProductController::class,'all_products']);

Route::get('/shop-details/{id}', [HomeController::class, 'show_details']);

Route::get('/', [HomeController::class,'home']);
Route::get('feature/{feature_id}', [HomeController::class, 'show_product_home'])->name('showproducthome');

//Show all Page
Route::get('/{name?}',[MyController::class, 'index']);
>>>>>>> detail_and_related_product
