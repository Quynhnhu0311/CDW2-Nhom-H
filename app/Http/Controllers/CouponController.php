<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Coupon;
use DB;
use Session;
session_start();

class CouponController extends Controller
{
    function delete_coupon() {
        $coupon = Session::get('coupon');
        if($coupon == true) {
            Session::forget('coupon');
            return redirect()->back()->with('message_delete','Xóa mã thành công!');
        }
    }

    function check_coupon(Request $request) {
        $data = $request->all();
        $coupon = Coupon::where('coupon_code',$data['coupon_name'])->first();
        if($coupon) {
            $coupon_count = $coupon->count();
            if($coupon_count > 0){
                $coupon_session = Session::get('coupon');
                if($coupon_session == true){
                    $is_avaiable = 0;
                    if($is_avaiable == 0) {
                        $coupon_array[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'coupon_number' => $coupon->coupon_number,
                        );
                        Session::put('coupon',$coupon_array);
                    }
                }else{
                    $coupon_array[] = array(
                        'coupon_code' => $coupon->coupon_code,
                        'coupon_condition' => $coupon->coupon_condition,
                        'coupon_number' => $coupon->coupon_number,
                    );
                    Session::put('coupon',$coupon_array);
                }
                Session::save();
                return redirect()->back()->with('message_delete','Thêm mã giảm giá thành công!');
            }
        }
        else{
            return redirect()->back()->with('error','Mã giảm giá không đúng!');
        }
    }


}
