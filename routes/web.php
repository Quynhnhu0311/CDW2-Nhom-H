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
