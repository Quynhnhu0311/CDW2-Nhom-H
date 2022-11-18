<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order;
use App\Models\Detail_order;
use App\Models\Product;
use App\Models\Coupon;
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
        return view('shopping-cart')->with('url_canonical',$url_canonical)
                                    ->with('manufactures',$manufactures);
    }

    public function add_cart_ajax(Request $request) {
        $this->AuthLogin();
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if($cart == true){
            $is_avaiable = 0;
            foreach($cart as $key => $value) {
                if($value['product_id'] == $data['cart_product_id']){
                    $is_avaiable++;
                }
            }
            if($is_avaiable == 0) {
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_id' => $data['cart_product_id'],
                    'product_name' => $data['cart_product_name'],
                    'product_price' => $data['cart_product_price'],
                    'product_image' => $data['cart_product_image'],
                    'product_qty' => $data['cart_product_qty'],
                );
                Session::put('cart',$cart);
            }
        }else{
            $cart[] = array(
                'session_id' => $session_id,
                'product_id' => $data['cart_product_id'],
                'product_name' => $data['cart_product_name'],
                'product_price' => $data['cart_product_price'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
            );
            Session::put('cart',$cart);
        }
        Session::save();
    }

    function delete_product_cart($session_id) {
        $this->AuthLogin();
        $cart = Session::get('cart');
        if($cart == true) {
            foreach($cart as $key => $val) {
                if($val['session_id'] == $session_id) {
                    unset($cart[$key]);
                }
            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message_delete','Xóa sản phẩm thành công!');
        }
        else{
            return redirect()->back()->with('message_delete','Xóa sản phẩm thất bại!');
        }
    }

    public function update_cart(Request $request) {
        $this->AuthLogin();
        $data = $request->all();
        $cart = Session::get('cart');
        if($cart == true){
            foreach($data['cart_qty'] as $key => $qty){
                foreach($cart as $session => $val){
                    if($val['session_id'] == $key){
                        $cart[$session]['product_qty'] = $qty;
                    }
                }
            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message_delete','Update số lượng thành công!');
        }
        else{
            return redirect()->back()->with('message_delete','Update số lượng thất bại!');
        }
    }

    function view_order() {
        $this->AuthLogin();
        $manufactures = DB::table('manufactures')->get();
        $show_Orders = Order::all();
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
