<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use DB;
use Session;
use Illuminate\Support\Facades\Validator;

session_start();

class UserController extends Controller
{
    function login_user(Request $request, $name = 'index')
    {
        $user_email = $request->email;
        $user_pass = md5($request->pass);
        $result = DB::table('users')->where('email', $user_email)
            ->where('password', $user_pass)->first();
        if ($result) {
            Session::put('name', $result->name);
            Session::put('id', $result->id);
            return Redirect::to('/');
        } else {
            Session::put('message', 'Mật khẩu hoặc tài khoản bị sai. Vui lòng nhập lại!');
            return Redirect::to('/login');
        }
    }
    function logout_user()
    {
        Session::put('name', null);
        Session::put('id', null);
        return Redirect::to('/');
    }
    function register_user(Request $request)
    {
        $user_email = $request->email;
        $array_email['email'] = $request->email;
        $rules = array('email' => 'unique:users,email');
        $validator = Validator::make($array_email, $rules);
        if ($validator->fails()) {
            Session::put('message', 'Tài khoản này đã tồn tại. Vui lòng nhập lại!');
            return Redirect::to('/register');
        } else {
            // Register the new user or whatever.
            $user_pass = md5($request->pass);
            $user_name = $request->name;
            DB::table('users')->insert([
                'email' => $user_email,
                'name' => $user_name,
                'password' => $user_pass,
                'status' => 'true',
            ]);
            return Redirect::to('/login');
        }
    }
    //detail user
    function delail_user(Request $request)
    {
        $user_email = $request->email;
        $user_pass = md5($request->pass);
        $result = DB::table('users')->where('email', $user_email)
            ->where('password', $user_pass)->first();
        return $result;
    }
}
