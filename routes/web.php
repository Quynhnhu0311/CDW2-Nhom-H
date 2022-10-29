<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

//Products
Route::get('/tat-ca-san-pham', [ProductController::class,'all_products']);
Route::get('/', [HomeController::class,'home']);

//Login
Route::post('/login-user', [UserController::class,'login_user']);
Route::get('/logout-user', [UserController::class,'logout_user']);


//Show all Page
Route::get('/{name?}',[MyController::class, 'index']);
