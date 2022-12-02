<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order;
use App\Models\Shipping;
use App\Models\Detail_order;
use App\Models\Coupon;
use App\Models\Product;
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

    function checkout_page() {
        $cart = DB::table('carts')->get();
        $manufactures = DB::table('manufactures')->get();
        return view('checkout')->with('cart',$cart)
                                ->with('manufactures',$manufactures);
    }

    function confirm_order(Request $request) {
        $this->AuthLogin();
        $carts = DB::table('carts')->get();
        $manufactures = DB::table('manufactures')->get();
        $data = $request->all();

        //Thông tin shipping
        $shipping = new Shipping;
        $shipping->customer_fistname = $data['shipping_fistname'];
        $shipping->customer_lastname = $data['shipping_lastname'];
        $shipping->customer_email = $data['shipping_email'];
        $shipping->customer_province = $data['shipping_province'];
        $shipping->customer_district = $data['shipping_district'];
        $shipping->customer_town = $data['shipping_town'];
        $shipping->customer_address = $data['shipping_address'];
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

        //Khi sử dụng coupon thì số lượng giảm
        if(Session::get('coupon') == true){
            $coupon = Coupon::where('coupon_code','=',$data['order_coupon'])->first();
            $coupon->coupon_qty = $coupon->coupon_qty - 1;
            $coupon->save();
        }

        //Thông tin Detail Order
            if(Session::get('coupon')==true){
                foreach($carts as $key => $cart){
                    $order_detail = new Detail_order;
                    $order_detail->order_code = $checkout_code;
                    $order_detail->product_id = $cart->product_id;
                    $order_detail->product_name	 = $cart->product_name;
                    $order_detail->product_price = $cart->product_price;
                    $order_detail->product_qty = $cart->product_qty;
                    $order_detail->coupon_code = $data['order_coupon'];
                    $order_detail->save();
                }
            }else{
                foreach($carts as $key => $cart){
                    $order_detail = new Detail_order;
                    $order_detail->order_code = $checkout_code;
                    $order_detail->product_id = $cart->product_id;
                    $order_detail->product_name	 = $cart->product_name;
                    $order_detail->product_price = $cart->product_price;
                    $order_detail->product_qty = $cart->product_qty;
                    $order_detail->save();
                }
            }

        //Send Mail
        $title_mail = "Đơn hàng xác nhận";
        $customer = DB::table('customers')->find(Session::get('id'));
        $data['email'][] = $customer->email;

            foreach($carts as $key => $cart_mail){
                $cart_array[] = array(
                    'product_name' => $cart_mail->product_name,
                    'product_price' => $cart_mail->product_price,
                    'product_qty' => $cart_mail->product_qty

                );
        }

        if(Session::get('coupon')==true){
            foreach(Session::get('coupon') as $row => $coupon_mail){
                $coupon_array = array(
                    'coupon_code' => $data['order_coupon']
                );
            }
        }
        else{
            $coupon_array = array(
                'coupon_code' => 0
            );
        }

        $shipping_array = array(
            'customer_name' => $customer->name,
            'shipping_fistname' =>  $data['shipping_fistname'],
            'shipping_lastname' =>  $data['shipping_lastname'],
            'shipping_email' => $data['shipping_email'],
            'shipping_province' => $data['shipping_province'],
            'shipping_district' => $data['shipping_district'],
            'shipping_town' => $data['shipping_town'],
            'shipping_address' => $data['shipping_address'],
            'shipping_phone' => $data['shipping_phone'],
            'shipping_note' => $data['shipping_note']
        );

        $ordercode_mail = array(
            'order_code' => $checkout_code
        );

        Mail::send('mail_order', ['cart_array'=>$cart_array, 'coupon_array'=>$coupon_array, 'shipping_array' => $shipping_array, 'code' => $ordercode_mail]
        , function($message) use ($title_mail,$data){
            $message->to($data['email'])->subject($title_mail);
            $message->from($data['email'],$title_mail);
        });
        foreach($carts as $key => $carts){
            $id = $carts->product_id;
        }
        DB::table('carts')->delete();
        $request->session()->forget(['coupon']);
        return view('/success')->with('manufactures',$manufactures);
    }
}
