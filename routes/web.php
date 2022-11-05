<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FavoriteController;

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
/*====== Authen ===== */
//Authenticate
Route::get('/admin.dashboard',[AdminController::class, 'show_dashboard']);

//Login And Logout Admin
// Route::get('/login-admin', [AdminController::class, 'login_admin']);
Route::get('/logout-admin', [AdminController::class, 'logout_admin']);



/* =====Front-End===== */
//Home
Route::get('/', [HomeController::class, 'home']);
Route::get('/shop-details/{id}', [HomeController::class, 'show_details']);
Route::get('/feature/{feature_id}', [HomeController::class, 'show_product_home'])->name('showproducthome');

//Products
Route::get('/tat-ca-san-pham', [ProductController::class, 'all_products']);

//Comment Product
Route::post('/shop-details/{id}', [HomeController::class, 'comment_product'])->name('comment-product');;

//Favorite Product
Route::post('/favorite', [FavoriteController::class,'add_favorite'])->name('add-favorite');
Route::get('/favorite/{favorite_id}', [FavoriteController::class, 'show_favorite_user'])->name('showfavorite');
Route::DELETE('favorite/{favorite_id}', [FavoriteController::class, 'delete_favorite_user']);

//Login
Route::post('/login-user', [UserController::class, 'login_user']);
Route::get('/logout-user', [UserController::class, 'logout_user']);

//Cart
Route::post('/add-cart-ajax', [CartController::class,'add_cart_ajax']);
Route::get('/gio-hang', [CartController::class,'gio_hang']);
Route::get('/delete-product-cart/{session_id}', [CartController::class,'delete_product_cart']);
Route::post('/update-cart', [CartController::class,'update_cart']);

//Coupon
Route::post('/check-coupon', [CouponController::class,'check_coupon']);
Route::get('/delete-coupon', [CouponController::class,'delete_coupon']);

//Blog
Route::get('/blog', [BlogController::class,'blog']);
Route::get('/blog-detail/{id}', [BlogController::class,'blog_detail']);

//Checkout
Route::post('/confirm-order', [CheckoutController::class,'confirm_order']);
//Register
Route::post('/register-user', [UserController::class, 'register_user']);

//Show all Page
Route::get('/{name?}', [MyController::class, 'index']);
