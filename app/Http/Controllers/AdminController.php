<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function login_admin(Request $request, $name = 'index'){
        $admin_email = $request->email;
        $admin_pass = md5($request->pass);
        $result = DB::table('admins')->where('email',$admin_email)
                                    ->where('password',$admin_pass)->first();
        if($result) {
            Session::put('name_admin',$result->name);
            Session::put('id_admin',$result->id);
            return Redirect::to('/');
        }
        else{
            Session::put('message','Mật khẩu hoặc tài khoản bị sai. Vui lòng nhập lại!');
            return Redirect::to('/login');
        }
    }
    function logout_admin(Request $request) {
        Session::put('name_admin',null);
        Session::put('id_admin',null);
        $request->session()->forget(['cart']);
        $request->session()->forget(['coupon']);
        return Redirect::to('/');
    }
}
