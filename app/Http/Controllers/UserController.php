<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use DB;
use Session;
session_start();

class UserController extends Controller
{
    function login_user(Request $request, $name = 'index'){
        $user_email = $request->email;
        $user_pass = md5($request->pass);
        $result = DB::table('users')->where('email',$user_email)
                                    ->where('password',$user_pass)->first();
        if($result) {
            Session::put('name',$result->name);
            Session::put('id',$result->id);
            return Redirect::to('/');
        }
        else{
            Session::put('message','Mật khẩu hoặc tài khoản bị sai. Vui lòng nhập lại!');
            return Redirect::to('/login');
        }
    }
    function logout_user() {
        Session::put('name',null);
        Session::put('id',null);
        return Redirect::to('/');
    }
}
