<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\Detail_order;
use Cart;
use DB;
use Session;
use Mail;
session_start();

class CheckoutController extends Controller
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

    function confirm_order(Request $request) {
        $this->AuthLogin();
        $data = $request->all();

        //Thông tin shipping
        $shipping = new Shipping;
        $shipping->customer_fistname = $data['shipping_fistname'];
        $shipping->customer_lastname = $data['shipping_lastname'];
        $shipping->customer_email = $data['shipping_email'];
        $shipping->customer_province = $data['shipping_province'];
        $shipping->customer_district = $data['shipping_district'];
        $shipping->customer_town = $data['shipping_town'];
        $shipping->customer_phone = $data['shipping_phone'];
        $shipping->customer_note = $data['shipping_note'];
        $shipping->save();
        $id_shipping = $shipping->shipping_id;
        $checkout_code = substr(md5(microtime()),rand(0,26),5);

        //Thông tin Order
        $order = new Order;
        $order->customer_id = Session::get('id');
        $order->shipping_id = $id_shipping;
        $order->order_code = $checkout_code;
        $order->order_status = 1;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order['created_at'] = now();
        $order->save();

        // if(Session::get('coupon')==true){
        //     $coupon = DB::table('coupons')->where('coupon_code',$order->order_code)->first();
        //     $coupon->coupon_time = $coupon->coupon_time - 1;
        //     $coupon->save();
        // }

        //Thôn tin Detail Order
        if(Session::get('cart')){
            foreach(Session::get('cart') as $key => $cart){
                $order_detail = new Detail_order;
                $order_detail->order_code = $checkout_code;
                $order_detail->product_id = $cart['product_id'];
                $order_detail->product_name	 = $cart['product_name'];
                $order_detail->product_price = $cart['product_price'];
                $order_detail->product_qty = $cart['product_qty'];
                $order_detail->coupon_code = $data['order_coupon'];
                $order_detail->save();
            }
        }


    // $title_mail = "Đơn hàng xác nhận";
    // $customer = DB::table('users')->find(Session::get('id'));
    // $data['email'][] = $customer->email;

    // if(Session::get('cart')==true){
    //     foreach(Session::get('cart') as $key => $cart_mail){
    //         $cart_array[] = array(
    //             'product_name' => $cart_mail['product_name'],
    //             'product_price' => $cart_mail['product_price'],
    //             'product_qty' => $cart_mail['product_qty']

    //         );
    //     }
    // }

    // $shipping_array = array(
    //     'customer_name' => $customer->name,
    //     'shipping_name' => $data['shipping_name'],
    //     'shipping_email' => $data['shipping_email'],
    //     'shipping_phone' => $data['shipping_phone'],
    //     'shipping_address' => $data['shipping_address'],
    //     'shipping_note' => $data['shipping_note']
    // );

    // $ordercode_mail = array(
    //     //'coupon_code' => $coupon_mail,
    //     'order_code' => $checkout_code
    // );

    // Mail::send('mail_order', ['cart_array'=>$cart_array, 'shipping_array' => $shipping_array, 'code' => $ordercode_mail]
    // , function($message) use ($title_mail,$data){
    //     $message->to($data['email'])->subject($title_mail);
    //     $message->from($data['email'],$title_mail);
    // });


    $request->session()->forget(['cart']);
    $request->session()->forget(['coupon']);
    return view('/success');
    }
}
