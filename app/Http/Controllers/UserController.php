<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Product;
use App\Models\Admin;
>>>>>>> main
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use DB;
use Illuminate\Support\Facades\Mail;
use Session;
use Illuminate\Support\Facades\Validator;

session_start();

class UserController extends Controller
{
    function login_user(Request $request, $name = 'index')
    {
        $user_email = $request->email;
        $user_pass = md5($request->pass);
<<<<<<< HEAD
        $result = DB::table('users')->where('email', $user_email)
            ->where('password', $user_pass)->first();
=======

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
        $request->validate([
                'g-recaptcha-response' => 'required|captcha'
            ],
            [
                'g-recaptcha-response.required' => 'Please check You are not a robot'
            ]
        );

>>>>>>> main
        if ($result) {
            Session::put('name', $result->name);
            Session::put('id', $result->id);
            return Redirect::to('/');
<<<<<<< HEAD
        } else {
=======
        }
        elseif($admin_result) {
            Session::put('admin_name', $admin_result->admin_name);
            Session::put('admin_id', $admin_result->admin_id);
            return Redirect::to('/admin.dashboard');
        }
        elseif($staff_result) {
            Session::put('staff_name', $staff_result->staff_name);
            Session::put('staff_id', $staff_result->staff_id);
            return Redirect::to('/admin.dashboard');
        }
        else {
>>>>>>> main
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
    function send_mail()
    {
        $name = 'ly tat loi';
        Mail::send('emails-register-user', compact('name'), function ($email) use ($name) {
            $email->subject('Demo test mail');
            $email->to('lytatloizz.no1@gmail.com', $name);
        });
    }
}
