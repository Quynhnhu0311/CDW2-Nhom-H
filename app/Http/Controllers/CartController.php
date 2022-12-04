<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order;
use App\Models\Detail_order;
use App\Models\Product;
use App\Models\Coupon;
use App\Models\Customer;
use App\Models\Carts;
use Cart;
use DB;
use Session;
session_start();

class CartController extends Controller
{
    function AuthLogin() {
        $customer_id = Session::get('id');
        if($customer_id){
            return Redirect::to('/');
        }
        else{
            return Redirect::to('/login')->send();
        }
    }

    function gio_hang(Request $request) {
        $this->AuthLogin();
        $manufactures = DB::table('manufactures')->get();
        $meta_desc = "Giỏ hàng của bạn";
        $meta_keywords = "Giỏ hàng Ajax";
        $meta_title = "Giỏ hàng Ajax";
        $url_canonical = $request->url();
        $cart = DB::table('carts')->get();
        return view('shopping-cart')->with('url_canonical',$url_canonical)
                                    ->with('manufactures',$manufactures)
                                    ->with('cart',$cart);
    }

    public function add_cart_ajax(Request $request) {
        $this->AuthLogin();
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $product_id = $data['cart_product_id'];
        $customer_id = Session::get('id');
        $cart_prod = Carts::get();

       
        $cart[] = array(
            'customer_id' => $customer_id,
            'product_id' => $data['cart_product_id'],
            'product_qty' => $data['cart_product_qty'],
            'product_image' => $data['cart_product_image'],
            'product_name' => $data['cart_product_name'],
            'product_price' => $data['cart_product_price'],
            'session_id' => $session_id
            );
            DB::table('carts')->insert($cart);
    }

    function delete_product_cart($session_id) {
        $this->AuthLogin();
        $cart = Session::get('cart');
        $carts = DB::table('carts')->where('session_id',$session_id)->delete();
        if($cart == true) {
            foreach($cart as $key => $val) {
                if($val['session_id'] == $session_id) {
                    unset($cart[$key]);
                }
            }
            return redirect()->back()->with('message_delete','Xóa sản phẩm thành công!');
        }
        else{
            return redirect()->back()->with('message_delete','Xóa sản phẩm thất bại!');
        }
    }

    public function update_cart(Request $request) {
        $this->AuthLogin();
        $data = $request->all();
        $cart_prod = DB::table('carts')->get();
        $id_session = $data['session_id'];
        $product_id = $data['product_id'];
        if($id_session == true){
            foreach($data['cart_qty'] as $key => $qty){
                foreach($cart_prod as $session => $val){
                    if($val->session_id == $key){
                        $cart[$session]['product_qty'] = $qty;
                    }
                }
            }
            DB::update('update carts set product_qty = ? where product_id = ?',[$qty,$product_id]);
            return redirect()->back()->with('message_delete','Update số lượng thành công!');
        }
        else{
            return redirect()->back()->with('message_delete','Update số lượng thất bại!');
        }
    }

    function view_order($id) {
        $this->AuthLogin();
        $manufactures = DB::table('manufactures')->get();
        $show_Orders = Order::where('customer_id',$id)->get();

        return view('view-cart')->with('show_Orders',$show_Orders)
                                ->with('manufactures',$manufactures);
    }

    function view_detail_order($order_code) {
        $this->AuthLogin();
        $manufactures = DB::table('manufactures')->get();
        $show_detail_order = Detail_order::where('order_code',$order_code)->get();

        foreach($show_detail_order as $key => $order_coupon){
            $coupon_code = $order_coupon->coupon_code;
        }

        $coupon = Coupon::where('coupon_code',$coupon_code)->first();

        return view('view-detail-cart')->with('manufactures',$manufactures)
                                        ->with('coupon',$coupon)
                                        ->with('show_detail_order',$show_detail_order);
    }
}
