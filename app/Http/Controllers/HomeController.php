<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Feature;
use App\Models\Comment;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;


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
    //  //Show Comment Product
    // public function show_comment_product($product_id){
    //     $comment = DB::table('comments')->get();
    //     $product = Product::where('product_id',$product_id)->first();
    //     $comment_all = Comment::where('comment_id',$product->product_id)->get();
    //     return view('/shop-details', compact('comment', 'product','comment_all'));
    // }
    //Detail Product and Related Product
    public function show_details($id)
    {   
        $detail = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')->where('products.product_id',$id)->get();
        foreach($detail as $related) {
            $type_id = $related->type_id;
        }
        $related_product = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')->where('protypes.type_id',$type_id)->paginate(8);
        foreach($detail as $comment) {
            $comment_id = $comment->product_id;
        }
        $id_user = Session::get('id');
        $comment_all = DB::table('comments')->join('products','products.product_id','=','comments.product_id')
        ->where('comments.product_id',$comment_id)
        ->join('users','users.id','=','comments.id')->get();
        return view('shop-details',compact('detail','related_product','comment_all'));
    }
    //Comment Product 
    public function comment_product(Request $request) {
        $comment = array();
        $comment['id'] = $request->id;
        $comment['product_id'] = $request->product_id;
        $comment['comment_content'] = $request->comment_content;
        DB::table('comments')->insert($comment);
        return Redirect::to('shop-details/'.$comment['product_id']);
    }
}
