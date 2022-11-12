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
        if($id) {
            if (!$duplicate){
                DB::table('favorites')->insert($favorite);
                return Redirect::to('favorite/'.$id);
            }
            else {
<<<<<<< HEAD
                return Redirect('/')->with('success', 'Sản Phẩm này đã nằm trong danh sách yêu thích !');;
=======
                return Redirect('/')->with('success', 'Sản Phẩm này đã nằm trong danh sách yêu thích của bạn !');
>>>>>>> origin/favorite_product
            }
        }else {
            return Redirect::to('/');
        }
    }
    public function show_favorite_user($id){
        $id_user = Session::get('id');
        $duplicate = DB::table('favorites')->get();
        $favorite = DB::table('favorites')->join('products','products.product_id','=','favorites.product_id')
        ->join('users','users.id','=','favorites.id')->where('favorites.id',$id_user)->get();
        return View('favorite',compact('favorite','duplicate'));
    }
    public function delete_favorite_user($favorite_id) {
        $id = Session::get('id');
        DB::table('favorites')->where('favorite_id',$favorite_id)->delete();
        return Redirect::to('favorite/'.$id);
    }
}
