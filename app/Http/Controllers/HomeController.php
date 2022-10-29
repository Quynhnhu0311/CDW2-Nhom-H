<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Feature;
use DB;


class HomeController extends Controller
{
    function home() {
        $newArrivals = Product::where('feature_id','=',1)->get();
        $bestSellers = Product::where('feature_id','=',2)->get();
        $hotSales = Product::where('feature_id','=',3)->get();
        $feature_product = Product::all();
        return view('index')->with('newArrivals',$newArrivals)
                            ->with('bestSellers',$bestSellers)
                            ->with('hotSales',$hotSales)
                            ->with('feature_product',$feature_product);
    }
}
