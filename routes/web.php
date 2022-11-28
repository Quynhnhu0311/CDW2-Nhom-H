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
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InfomationController;

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
Route::get('/admin.dashboard', [AdminController::class, 'show_dashboard']);

//Login And Logout Admin
// Route::get('/login-admin', [AdminController::class, 'login_admin']);
Route::get('/logout-admin', [AdminController::class, 'logout_admin']);

//Show manufactures
Route::get('/admin.addmanufacture', [AdminController::class, 'show_admin_addmanufacture']);
Route::get('/admin.manufacture', [AdminController::class, 'show_admin_manufacture']);
//Delete Manufactures
Route::DELETE('deletemanufacture/{id}', [AdminController::class, 'destroy_manu']);
//Add Manufactures
Route::post('/savemanufacture', [AdminController::class, 'save_manufacture']);
//Show Edit Page Manufacture
Route::get('admin.editmanufacture/{manu_id}', [AdminController::class, 'edit_manufacture']);
//Update Manufactures
Route::put('update_datamanu/{manu_id}', [AdminController::class, 'update_manufacture']);

//Show Protypes page
Route::get('/admin.protype', [AdminController::class, 'show_admin_protype']);
//Show EditProtype page
Route::get('/admin.editprotype/{type_id}', [AdminController::class, 'show_edit_protype']);
//Update Protypes
Route::put('update_protype/{type_id}', [AdminController::class, 'update_admin_protype']);
//Add Protypes
Route::post('/addprotype', [AdminController::class, 'add_admin_protype']);
//Delete Protypes
Route::DELETE('deleteprotype/{type_id}', [AdminController::class, 'delete_admin_protype']);

/*----- Products -----*/
Route::get('/admin.products', [AdminController::class, 'show_all_products'])->name('viewProductList');
Route::get('/edit-product/{product_id}', [AdminController::class, 'edit_product']);
Route::post('/update-product/{product_id}', [AdminController::class, 'update_product']);
Route::get('/delete-product/{product_id}', [AdminController::class, 'delete_product']);
Route::get('/add-product', [AdminController::class, 'add_product']);
Route::post('/save-product', [AdminController::class, 'save_product']);

/*----- Orders -----*/
Route::get('/admin.orders', [AdminController::class, 'show_all_orders'])->name('viewOrderList');
Route::get('/detail-order/{order_code}', [AdminController::class, 'detail_order']);
Route::post('/update-order-qty', [OrderController::class, 'update_order_qty']);
Route::post('/update-order-qty-product', [OrderController::class, 'update_order_qty_product']);


/*----- Coupons -----*/
Route::get('/admin.coupons', [AdminController::class, 'show_all_coupons'])->name('viewCouponList');
Route::get('/add-coupon', [AdminController::class, 'add_coupon']);
Route::get('/edit-coupon/{coupon_id}', [AdminController::class, 'edit_coupon']);
Route::post('/update-coupon/{coupon_id}', [AdminController::class, 'update_coupon']);
Route::get('/delete-coupon/{coupon_id}', [AdminController::class, 'delete_coupon']);
Route::post('/save-coupon', [AdminController::class, 'save_coupon']);

/*----- Staff -----*/
Route::get('/admin.staffs', [AdminController::class, 'show_staffs']);
Route::post('/save-staff', [AdminController::class, 'save_staff']);
Route::get('/admin.editstaff/{key}', [AdminController::class, 'edit_staff']);
Route::post('/update-staff', [AdminController::class, 'update_staff']);
Route::get('/delete-staff/{key}', [AdminController::class, 'delete_staff']);

/*----- Customer -----*/
Route::get('/admin.customers', [AdminController::class, 'show_customers']);
Route::get('/admin.editcustomer/{key}', [AdminController::class, 'edit_customer']);
Route::post('/update-customer', [AdminController::class, 'update_customer']);
Route::get('/delete-customer/{key}', [AdminController::class, 'delete_customer']);

//Show Comment in Admin
Route::get('/admin.comment', [AdminController::class, 'show_admin_comment']);
//Delete Comment in Admin
Route::DELETE('deletecomment/{comment_id}', [AdminController::class, 'delete_admin_comment']);

//Show Blog in Admin
Route::get('/admin.blog', [AdminController::class, 'show_admin_blog']);
//Edit Blog in Admin
Route::get('/admin.editblog/{blog_id}', [AdminController::class, 'edit_admin_blog']);
//Update Blog in Admin
Route::post('admin.updateblog/{blog_id}', [AdminController::class, 'update_admin_blog']);
//Add Blog in Admin
Route::post('admin.addblog', [AdminController::class, 'add_admin_blog']);
//Delete Blog in Admin
Route::DELETE('deleteblog/{blog_id}', [AdminController::class, 'delete_admin_blog']);

//Show infomation
Route::get('/info', [InfomationController::class, 'show_info']);

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
Route::post('send-comment-rep', [HomeController::class, 'rep_comment_product_ajax'])->name('ajax.comment');
Route::post('send-comment', [HomeController::class, 'comment_product_ajax'])->name('ajax.comment');
Route::get('show_comment/{id}', [HomeController::class, 'show_comment'])->name('ajax.show-comment');
Route::get('shop-details/show_comment_rep/{id}', [HomeController::class, 'show_comment_rep'])->name('ajax.show-comment');

//Favorite Product
Route::post('/favorite', [FavoriteController::class, 'add_favorite'])->name('add-favorite');
Route::get('/favorite/{favorite_id}', [FavoriteController::class, 'show_favorite_user'])->name('showfavorite');
Route::DELETE('favorite/{favorite_id}', [FavoriteController::class, 'delete_favorite_user']);

//Login
Route::post('/login-user', [UserController::class, 'login_user']);
Route::get('/logout-user', [UserController::class, 'logout_user']);

//Cart
Route::post('/add-cart-ajax', [CartController::class, 'add_cart_ajax']);
Route::get('/gio-hang', [CartController::class, 'gio_hang']);
Route::get('/delete-product-cart/{session_id}', [CartController::class, 'delete_product_cart']);
Route::post('/update-cart', [CartController::class, 'update_cart']);

//Order
Route::get('/view-order/{id}', [CartController::class, 'view_order']);
Route::get('/view-detail-order/{order_code}', [CartController::class, 'view_detail_order']);


//Coupon
Route::post('/check-coupon', [CouponController::class, 'check_coupon']);
Route::get('/delete-coupon', [CouponController::class, 'delete_coupon']);

//Blog
Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/blog-detail/{id}', [BlogController::class, 'blog_detail']);

//Checkout
Route::post('/confirm-order', [CheckoutController::class, 'confirm_order']);
Route::get('/checkoutPage', [CheckoutController::class, 'checkout_page']);
//Register
Route::post('/register-user', [CustomerController::class, 'processing_register']);
Route::get('/email-register-user', [CustomerController::class, 'email_register']);

//Show all Page
Route::get('/{name?}', [MyController::class, 'index']);

//Search
Route::get('/ajax-search-product/{key}', [ProductController::class, 'ajaxSearch'])->name('ajax-search-product');
Route::get('/ajax-search-product-shop/{key}', [ProductController::class, 'ajaxSearch_shop'])->name('ajax-search-product-shop');
Route::get('/ajax-search-product-shop/{key}/{type_key}/{manu_key}', [ProductController::class, 'ajaxSearch_shop'])->name('ajax-search-product-shop');
