<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Feature;
use App\Models\Comment;
use App\Models\Favorite;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
class FavoriteController extends Controller
{
    //Sản phẩm yêu thích
    public function add_favorite(Request $request){
        $favorite = array();
        $favorite['product_id'] = $request->favorite_product_id;
        $favorite['id'] = $request->favorite_user_id;
        $id = Session::get('id');
        $duplicate = DB::table('favorites')->where('product_id',$request->favorite_product_id)->first();
        //Kiểm tra đăng nhập mới được thêm sản phẩm yêu thích
        if($id) {
            //Kiểm tra sản phẩm chưa tồn tại 
            if (!$duplicate){
                DB::table('favorites')->insert($favorite);
                return Redirect::to('favorite/'.$id);
            }
            //kiểm tra sản phẩm đã tồn tại
            else {
                return Redirect('/')->with('success', 'Sản Phẩm này đã nằm trong danh sách yêu thích !');
            }
        }else {
            return Redirect::to('/')->with('success', 'Login to Favorite !');
        }
    }
    //Show Favorite
    public function show_favorite_user($id){
        $manufactures = DB::table('manufactures')->get();
        $id_user = Session::get('id');
        $duplicate = DB::table('favorites')->get();
        //Lấy danh sách sản phẩm yêu thích của khách hàng
        $favorite = DB::table('favorites')->join('products','products.product_id','=','favorites.product_id')
        ->join('customers','customers.id','=','favorites.id')->where('favorites.id',$id_user)->get();
        return View('favorite',compact('favorite','duplicate','manufactures'));
    }
    //Delete Favorite
    public function delete_favorite_user($favorite_id) {
        $id = Session::get('id');
        //Xoá sản phẩm yêu thích của khách hàng
        DB::table('favorites')->where('favorite_id',$favorite_id)->delete();
        return Redirect::to('favorite/'.$id);
    }
}
