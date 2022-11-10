<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Coupon;
use App\Models\Detail_order;

use DB;

class OrderController extends Controller
{
    function update_order_qty(Request $request) {
        //Update Status Order
        $data = $request->all();
        $order = Order::find($data['order_id']);
        $order->order_status = $data['order_status'];
        $order->save();
        if($order->order_status == 2) {
            foreach($data['order_product_id'] as $key => $product_id) {
                $prod_id = $data['order_product_id'];
                $products = Product::where('product_id','=',$product_id)->first();
                $product_quantity = $products->product_qty;
                $product_sold = $products->product_sold;
                foreach($data['order_product_qty'] as $key2 => $qty) {
                    if($key==$key2){
                        $product_remain = $product_quantity - $qty;
                        $products_sold = $product_sold + $qty;
                        DB::update('update products set product_qty = ?, product_sold = ? where product_id = ?',[$product_remain,$products_sold,$product_id]);
                    }
                }
            }
        }
        elseif($order->order_status == 3) {
            foreach($data['order_product_id'] as $key => $product_id) {
                $prod_id = $data['order_product_id'];
                $products = Product::where('product_id','=',$product_id)->first();
                $product_quantity = $products->product_qty;
                $product_sold = $products->product_sold;
                foreach($data['order_product_qty'] as $key2 => $qty) {
                    if($key==$key2){
                        $product_remain = $product_quantity + $qty;
                        $products_sold = $product_sold - $qty;
                        DB::update('update products set product_qty = ?, product_sold = ? where product_id = ?',[$product_remain,$products_sold,$product_id]);
                    }
                }
            }
        }
    }

    function update_order_qty_product(Request $request) {
        $data = $request->all();
        $order_detail = Detail_order::where('product_id',$data['order_prd_id'])->where('order_code', $data['order_code'])->first();
        $order_detail->product_qty = $data['order_qty'];
        $order_detail->save();
    }
}
