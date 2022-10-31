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
    //Detail Product and Related Product
    public function show_details($id)
    {
        /* Detail Product */   
        $detail = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')->where('products.product_id',$id)->get();
        foreach($detail as $related) {
            $type_id = $related->type_id;
        }
        /* Realated Product */
        $related_product = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')->where('protypes.type_id',$type_id)->paginate(8);
<<<<<<< HEAD
        foreach($detail as $comment) {
            $comment_id = $comment->product_id;
        }
        /* Show Comment Product */
        $comment_all = DB::table('comments')->join('products','products.product_id','=','comments.product_id')
        ->where('comments.product_id',$comment_id)
        ->join('users','users.id','=','comments.id')->get();
        return view('shop-details',compact('detail','related_product','comment_all'));
    }
    //Add Comment Product 
    public function comment_product(Request $request) {
        $comment = array();
        $comment['id'] = $request->id;
        $comment['product_id'] = $request->product_id;
        $comment['comment_content'] = $request->comment_content;
        $id = Session::get('id');
        // Nếu User đã đăng nhập mới được bình luận 
        if($id) {
            DB::table('comments')->insert($comment);
            return Redirect::to('shop-details/'.$comment['product_id']);
        // Không cho phép bình luận khi chưa đăng nhập
        }else {
             Session::put('message_cmt','Vui lòng đăng nhập để được bình luận!');
             return Redirect::to('shop-details/'.$comment['product_id']);
        }
=======
        return view('shop-details',compact('detail','related_product'));
>>>>>>> origin/function_addcart_updatecart_deletecart
    }
}
