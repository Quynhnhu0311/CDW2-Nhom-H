<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\ProtypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;

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
Route::get('/dashboard',[AdminController::class, 'show_dashboard']);

//Login And Logout Admin
// Route::get('/login-admin', [AdminController::class, 'login_admin']);
Route::get('/logout-admin', [AdminController::class, 'logout_admin']);

//Show manufactures
Route::get('/admin.addmanufacture',[AdminController::class, 'show_admin_addmanufacture']);
Route::get('/admin.manufacture',[AdminController::class, 'show_admin_manufacture']);
//Delete Manufactures
Route::DELETE('deletemanufacture/{id}',[AdminController::class, 'destroy_manu']);
//Add Manufactures
Route::post('/savemanufacture',[AdminController::class, 'save_manufacture']);
//Show Edit Page Manufacture
Route::get('editmanufacture/{manu_id}',[AdminController::class, 'edit_manufacture']);
//Update Manufactures
Route::put('update_datamanu/{manu_id}',[AdminController::class, 'update_manufacture']);

/*----- Products -----*/
Route::get('/products', [AdminController::class,'show_all_products'])->name('viewProductList');
Route::get('/edit-product/{product_id}', [AdminController::class,'edit_product']);
Route::post('/update-product/{product_id}', [AdminController::class,'update_product']);
Route::get('/delete-product/{product_id}', [AdminController::class,'delete_product']);
Route::get('/add-product', [AdminController::class,'add_product']);
Route::post('/save-product', [AdminController::class,'save_product']);

/*----- Orders -----*/
Route::get('/orders', [AdminController::class,'show_all_orders'])->name('viewOrderList');
Route::get('/detail-order/{order_code}', [AdminController::class,'detail_order']);
Route::post('/update-order-qty', [OrderController::class,'update_order_qty']);
Route::post('/update-order-qty-product', [OrderController::class,'update_order_qty_product']);

/*----- Coupons -----*/
Route::get('/coupons', [AdminController::class,'show_all_coupons'])->name('viewCouponList');
Route::get('/add-coupon', [AdminController::class,'add_coupon']);
Route::get('/edit-coupon/{coupon_id}', [AdminController::class,'edit_coupon']);
Route::post('/update-coupon/{coupon_id}', [AdminController::class,'update_coupon']);
Route::get('/delete-coupon/{coupon_id}', [AdminController::class,'delete_coupon']);
Route::post('/save-coupon', [AdminController::class,'save_coupon']);

/* =====Front-End===== */
//Home
Route::get('/', [HomeController::class, 'home']);
Route::get('/shop-details/{id}', [HomeController::class, 'show_details']);
Route::get('/feature/{feature_id}', [HomeController::class, 'show_product_home'])->name('showproducthome');

//Products
Route::get('/tat-ca-san-pham', [ProductController::class, 'all_products']);

//Comment Product
// Route::post('/shop-details/{id}', [HomeController::class, 'comment_product'])->name('comment-product');;
//Comment-Ajax//
Route::post('/send-comment', [HomeController::class, 'comment_product_ajax'])->name('ajax.comment');
Route::get('/show_comment/{id}', [HomeController::class, 'show_comment'])->name('ajax.show-comment');

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

//Search
Route::get('/ajax-search-product/{key}', [ProductController::class, 'ajaxSearch'])->name('ajax-search-product');
Route::get('/ajax-search-product-shop/{key}', [ProductController::class, 'ajaxSearch_shop'])->name('ajax-search-product-shop');
Route::get('/ajax-search-product-shop/{key}/{type_key}/{manu_key}', [ProductController::class, 'ajaxSearch_shop'])->name('ajax-search-product-shop');
