<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    function all_products() {
        $min_price = DB::table('products')->min('product_price');
        $max_price = DB::table('products')->max('product_price');

        if(isset($_GET['start_price']) && $_GET['end_price']) {
            $min_price = $_GET['start_price'];
            $max_price = $_GET['end_price'];
            $products = DB::table('products')->whereBetween('product_price', [$min_price,$max_price])
                                                          ->orderBy('product_price', 'ASC')->paginate(6)->appends(request()->query());
        }
        else {
            $products = DB::table('products')->orderby('product_id','desc')->paginate(6);
        }
        return view('shop')->with('products',$products)
                           ->with('min_price', $min_price)
                           ->with('max_price', $max_price);
    }
}
