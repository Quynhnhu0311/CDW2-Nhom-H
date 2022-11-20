<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Feature;
use App\Models\Comment;
use App\Models\Repcomment;
use App\Models\Favorite;
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
        $duplicate = DB::table('favorites')->join('products','products.product_id','=','favorites.product_id')->get();
        $min_price = DB::table('products')->min('product_price');
        $max_price = DB::table('products')->max('product_price');


        return view('/index')->with('newArrivals',$newArrivals)
                            ->with('bestSellers',$bestSellers)
                            ->with('features', $features)
                            ->with('products_feature',$products_feature)
                            ->with('duplicate', $duplicate);
    }
    // Show Product Home Page
    public function show_product_home($feature_id) {
        $bestSellers = Product::where('feature_id','=',2)->get();
        $features = DB::table('features')->get();
        $feature_id = Feature::where('feature_id',$feature_id)->first();
        $products_feature = Product::where('feature_id',$feature_id->feature_id)->Paginate(4);
        $duplicate = DB::table('favorites')->join('products','products.product_id','=','favorites.product_id')->get();
        return view('/index',compact('bestSellers','features','products_feature','duplicate'));
    }
    //Detail Product and Related Product
    public function show_details($id)
    {
        $detail = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')
        ->join('manufactures','manufactures.manu_id','=','products.manu_id')->where('products.product_id',$id)->get();
        foreach($detail as $related) {
            $type_id = $related->type_id;
        }
        /* Realated Product */
        $related_product = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')->where('protypes.type_id',$type_id)->paginate(8);
        foreach($detail as $comment) {
            $comment_id = $comment->product_id;
        }
        /* Show Comment and Rating Product */
        $comment_all = DB::table('comments')->join('products','products.product_id','=','comments.product_id')
        ->where('comments.product_id',$comment_id)
        ->join('customers','customers.id','=','comments.id')->get();
        $comment_rep = DB::table('repcomments')->join('customers','customers.id','=','repcomments.id')->get();
        return view('shop-details',compact('detail','related_product','comment_all','comment_rep'));
    }
    //Add Comment Product
    public function comment_product_ajax(Request $request){
        $comment_product_id = $request->product_id;
        $id = $request->id_user_comment;
        $comment_content = $request->comment_content;
        $rating = $request->rating;
        $comment = new Comment();
        $comment->product_id = $comment_product_id;
        $comment->id = $id;
        $comment->comment_content = $comment_content;
        $comment->rating_value = $rating;
        $comment->save();
    }
    //Add Rep Comment Product
    public function rep_comment_product_ajax(Request $request){
        $id = $request->id_user_comment_rep;
        $comment_id = $request->comment_id;
        $comment_content = $request->comment_content_rep;
        $comment_rep = new Repcomment();
        $comment_rep->id = $id;
        $comment_rep->comment_id = $comment_id;
        $comment_rep->comment_content = $comment_content;
        $comment_rep->save();
    }
    public function show_comment_rep($id)
    {
        $detail = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')
        ->join('manufactures','manufactures.manu_id','=','products.manu_id')->where('products.product_id',$id)->get();
        foreach($detail as $related) {
            $type_id = $related->type_id;
        }
        /* Realated Product */
        $related_product = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')->where('protypes.type_id',$type_id)->paginate(8);
        foreach($detail as $comment) {
            $comment_id = $comment->product_id;
        }
        /* Show Comment and Rating Product */
        $comment_all = DB::table('comments')->join('products','products.product_id','=','comments.product_id')
        ->where('comments.product_id',$comment_id)
        ->join('customers','customers.id','=','comments.id')->get();
        foreach($comment_all as $all_comment){
            $id_comment = $all_comment->comment_id;
        }
        $comment_rep = DB::table('repcomments')->join('comments','comments.comment_id','=','repcomments.comment_id')
        ->where('repcomments.comment_id',$id_comment)->get();
        return view('show-comment',compact('detail','related_product','comment_all','comment_rep'));
    }
    public function show_comment($id)
    {
        $detail = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')
        ->join('manufactures','manufactures.manu_id','=','products.manu_id')->where('products.product_id',$id)->get();
        foreach($detail as $related) {
            $type_id = $related->type_id;
        }
        /* Realated Product */
        $related_product = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')->where('protypes.type_id',$type_id)->paginate(8);
        foreach($detail as $comment) {
            $comment_id = $comment->product_id;
        }
        /* Show Comment and Rating Product */
        $comment_all = DB::table('comments')->join('products','products.product_id','=','comments.product_id')
        ->where('comments.product_id',$comment_id)
        ->join('customers','customers.id','=','comments.id')->get();
        return view('show-comment',compact('detail','related_product','comment_all'));
    }
}
