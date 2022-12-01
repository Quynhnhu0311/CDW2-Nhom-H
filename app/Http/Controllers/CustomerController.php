<?php

namespace App\Http\Controllers;

use App\Mail\CustomerRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    //Register customer
    function register_customer(Request $request)
    {
        $user_email = $request->email;
        $array_email['customer_email'] = $request->email;
        $rules = array('customer_email' => 'unique:customers,customer_email');
        $validator = Validator::make($array_email, $rules);
        if ($validator->fails()) {
            Session::put('message', 'Tài khoản này đã tồn tại. Vui lòng nhập lại!');
            return Redirect::to('/register');
        } else {
            // Register the new user or whatever.
            $user_pass = md5($request->pass);
            $user_name = $request->name;
            DB::table('customers')->insert([
                'customer_email' => $user_email,
                'customer_name' => $user_name,
                'customer_password' => $user_pass,
                'status' => 0,
            ]);
        }
    }
    //Email register
    function email_register(Request $request)
    {
        $user_email = $request->email;
        $array_email['customer_email'] = $request->email;
        $rules = array('customer_email' => 'unique:customers,customer_email');
        $validator = Validator::make($array_email, $rules);
        if ($validator->fails()) {
            Session::put('message', 'Tài khoản này đã tồn tại. Vui lòng nhập lại!');
            return Redirect::to('/login');
        } else {
            $user_pass = md5($request->pass);
            $user_name = $request->name;
            DB::table('customers')->insert([
                'customer_email' => $user_email,
                'customer_name' => $user_name,
                'customer_password' => $user_pass,
                'status' => 0,
            ]);
            return Redirect::to('/login');
        }
    }

    function send_email(Request $request)
    {
        Mail::to($request->email)->send(new CustomerRegister($request));
    }

    //Processing type register
    function processing_register(Request $request)
    {

        if ($request->name == '' || $request->pass == '') {
            $user_email = $request->email;
            $array_email['customer_email'] = $request->email;
            $rules = array('customer_email' => 'unique:customers,customer_email');
            $validator = Validator::make($array_email, $rules);
            if ($validator->fails()) {
                Session::put('message', 'Tài khoản này đã tồn tại. Vui lòng nhập lại!');
                return Redirect::to('/register');
            } else {
                //Email register
                $this->send_email($request);
                return Redirect::to('/login');
            }
        } else {
            //Basics register
            $this->register_customer($request);
            return Redirect::to('/login');
        }
    }
}
