<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use DB;
use Session;
use Illuminate\Support\Facades\Validator;

session_start();

class UserController extends Controller
{
    // function AuthLogin(){
    //     $id_admin = Session::get('admin_id');
    //     if($id_admin){
    //         return Redirect::to('admin.dashboard');
    //     }else{
    //         return Redirect::to('admin.login_admin')->send();
    //     }
    // }

    function login_user(Request $request, $name = 'index')
    {
        $user_email = $request->email;
        $user_pass = md5($request->pass);

        //Account Customer
        $result = DB::table('customers')->where('email', $user_email)
            ->where('password', $user_pass)->first();

        //Account Admin
        $admin_result = DB::table('admins')->where('admin_email', $user_email)
            ->where('admin_password', $user_pass)->first();

        //Account Staff
        $staff_result = DB::table('staffs')->where('staff_email', $user_email)
            ->where('staff_password', $user_pass)->first();
        //Required Captcha
        $request->validate(
            [
                'g-recaptcha-response' => 'required|captcha'
            ],
            [
                'g-recaptcha-response.required' => 'Please check You are not a robot'
            ]
        );

        if ($result) {
            Session::put('name', $result->name);
            Session::put('id', $result->id);
            return Redirect::to('/');
        } elseif ($admin_result) {
            Session::put('admin_name', $admin_result->admin_name);
            Session::put('admin_id', $admin_result->admin_id);
            return Redirect::to('/admin.dashboard');
        } elseif ($staff_result) {
            Session::put('staff_name', $staff_result->staff_name);
            Session::put('staff_id', $staff_result->staff_id);
            return Redirect::to('/admin.dashboard');
        } else {
            Session::put('message', 'M???t kh???u ho???c t??i kho???n b??? sai. Vui l??ng nh???p l???i!');
            return Redirect::to('/login');
        }
    }

    function logout_user(Request $request)
    {
        Session::put('name', null);
        Session::put('id', null);
        $request->session()->forget(['cart']);
        $request->session()->forget(['coupon']);
        $request->session()->forget(['id']);
        return Redirect::to('/login');
    }

    function register_user(Request $request)
    {
        $user_email = $request->email;
        $array_email['email'] = $request->email;
        $rules = array('email' => 'unique:users,email');
        $validator = Validator::make($array_email, $rules);
        if ($validator->fails()) {
            Session::put('message', 'T??i kho???n n??y ???? t???n t???i. Vui l??ng nh???p l???i!');
            return Redirect::to('/register');
        } else {
            // Register the new user or whatever.
            $user_pass = md5($request->pass);
            $user_name = $request->name;
            DB::table('customers')->insert([
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
        $result = DB::table('customers')->where('email', $user_email)
            ->where('password', $user_pass)->first();
        return $result;
    }
}
