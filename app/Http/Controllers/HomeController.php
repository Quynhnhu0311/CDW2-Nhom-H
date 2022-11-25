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
        $features = DB::table('features')->get();
        $products_feature =Product::where('feature_id','=',1)->Paginate(4);
        return view('/index')->with('newArrivals',$newArrivals)
                            ->with('bestSellers',$bestSellers)
                            ->with('features', $features)
                            ->with('products_feature',$products_feature);
    }
    // Show Product Home Page
    public function show_product_home($feature_id) {
        $bestSellers = Product::where('feature_id','=',2)->get();
        $features = DB::table('features')->get();
        $feature_id = Feature::where('feature_id',$feature_id)->first();
        $products_feature = Product::where('feature_id',$feature_id->feature_id)->Paginate(4);
        return view('/index',compact('bestSellers','features','products_feature'));
    }
    //Detail Product and Related Product and Comment
    public function show_details($id)
    {
<<<<<<< HEAD
        $detail = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')->where('products.product_id',$id)->get();
=======
        $manufactures = DB::table('manufactures')->get();
        $detail = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')
        ->join('manufactures','manufactures.manu_id','=','products.manu_id')->where('products.product_id',$id)->get();
>>>>>>> main
        foreach($detail as $related) {
            $type_id = $related->type_id;
        }
        $related_product = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')->where('protypes.type_id',$type_id)->paginate(8);
        return view('shop-details',compact('detail','related_product'));
    }
}
