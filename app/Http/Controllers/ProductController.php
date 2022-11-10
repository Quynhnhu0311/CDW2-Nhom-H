<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    function all_products()
    {
        $products = DB::table('products')->orderby('product_id', 'desc')->paginate(6);
        $protypes = DB::table('protypes')->get();
        $manufactures = DB::table('manufactures')->get();
        return view('shop')->with('products', $products)
            ->with('protypes', $protypes)
            ->with('manufactures', $manufactures);
    }
    public function ajaxSearch()
    {
        $data = Product::search()->paginate(6);
        return view('ajaxSearch', compact('data'));
    }
    public function ajaxSearch_shop()
    {
        $data = Product::search()->paginate(6);
        return view('ajaxSearch-shop', compact('data'));
    }
}
