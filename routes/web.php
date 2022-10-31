<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

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
//Home
Route::get('/', [HomeController::class,'home']);
Route::get('/shop-details/{id}', [HomeController::class, 'show_details']);
Route::get('/feature/{feature_id}', [HomeController::class, 'show_product_home'])->name('showproducthome');

//Products
Route::get('/tat-ca-san-pham', [ProductController::class,'all_products']);

//Comment Product
Route::post('/shop-details/{id}', [HomeController::class, 'comment_product'])->name('comment-product');;


//Login
Route::post('/login-user', [UserController::class,'login_user']);
Route::get('/logout-user', [UserController::class,'logout_user']);

//Cart
Route::post('/add-cart-ajax', [CartController::class,'add_cart_ajax']);
Route::get('/gio-hang', [CartController::class,'gio_hang']);
Route::get('/delete-product-cart/{session_id}', [CartController::class,'delete_product_cart']);
Route::post('/update-cart', [CartController::class,'update_cart']);

//Show all Page
Route::get('/{name?}',[MyController::class, 'index']);
