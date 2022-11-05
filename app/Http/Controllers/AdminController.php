<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use DB;
use Session;
session_start();

class AdminController extends Controller
{
    public function AuthLogin(){
        $id_admin = Session::get('admin_id');
        if($id_admin){
            return Redirect::to('admin.dashboard');
        }else{
            return Redirect::to('login')->send();
        }
    }
    // Hiện Thị Trang chủ Admin
    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');
    }
    // Chặn Admin


    // function login_admin(Request $request) {
    //     $admin_email = $request->email;
    //     $admin_pass = md5($request->pass);
    //     $result = DB::table('users')->where('email', $user_email)
    //                                 ->where('password', $user_pass)->first();
    //     if ($result) {
    //         Session::put('admin_name', $result->name);
    //         Session::put('id', $result->id);
    //         return Redirect::to('/');
    //     } else {
    //         Session::put('message', 'Mật khẩu hoặc tài khoản bị sai. Vui lòng nhập lại!');
    //         return Redirect::to('/login');
    //     }
    // }

    function logout_admin(Request $request) {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        $request->session()->forget(['admin_id']);
        $request->session()->forget(['admin_name']);
        return Redirect::to('/login');
    }
}
