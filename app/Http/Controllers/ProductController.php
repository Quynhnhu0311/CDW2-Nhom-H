<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    function all_products() {
        $protypes = DB::table('protypes')->get();
        $manufactures = DB::table('manufactures')->get();
        if(isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];
            if($sort_by == 'giam_dan') {
                $products = DB::table('products')->orderBy('product_price', 'DESC')->paginate(6)->appends(request()->query());
            }
            elseif ($sort_by == 'tang_dan') {
                $products = DB::table('products')->orderBy('product_price', 'ASC')->paginate(6)->appends(request()->query());
            }
        }
        elseif (isset($_GET['start_price']) && $_GET['end_price']) {
            $min_price = $_GET['start_price'];
            $max_price = $_GET['end_price'];
            $products = DB::table('products')->whereBetween('product_price', [$min_price,$max_price])
                                                          ->orderBy('product_price', 'ASC')->paginate(6)->appends(request()->query());
        }
        else {
            $products = DB::table('products')->orderby('product_id','desc')->paginate(6);
        }

        return view('shop')->with('products',$products)
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
