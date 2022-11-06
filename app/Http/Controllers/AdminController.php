<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use DB;
use Session;
use App\Models\Product;
session_start();

class AdminController extends Controller
{
    // Chặn Admin
    public function AuthLogin(){
        $id_admin = Session::get('admin_id');
        if($id_admin){
            return Redirect::to('admin.dashboard');
        }else{
            return Redirect::to('login')->send();
        }
    }
    //Show Manufacture Admin
    public function show_dashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');
    }
    //Add Manufactures Admin
    public function save_manufacture(Request $request){
        
        $data = array();
        $data['manu_name'] = $request->manu_name;
        $data['manu_qty'] = $request->manu_qty;
        DB::table('manufactures')->insert($data);
        return Redirect::to('admin.manufacture');
    }
     //Edit manufacture
     public function edit_manufacture($manu_id)
     {   
         $this->AuthLogin();
         $protypes = DB::table('protypes')->get();
         $manufactures =  DB::table('manufactures')->where('manu_id',$manu_id)->get();
         return view('admin.editmanufacture',compact('manufactures','protypes'));
     }
     //Update Manufacture admin
     public function update_manufacture(Request $request, $manu_id)
     {
         $this->AuthLogin();
         $data = array();
         // $iddata =  Product::find($id);
         $data['manu_name'] = $request->manu_name;
         $data['manu_qty'] = $request->manu_qty;
         DB::table('manufactures')->where('manu_id',$manu_id)->update($data);
 
         return Redirect::to('admin.manufacture')->with("status","Data Update Successfully");
    }
     //Show Add manufactures admin
    public function show_admin_manufacture(){
        $this->AuthLogin();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();

        return view('admin.manufacture',compact('protypes','protypes','manufactures'))
       ;
    }
    public function show_admin_addmanufacture(){
        $this->AuthLogin();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();

        return view('admin.addmanufacture',compact('protypes','protypes','manufactures','Allproducts'));
    }
    //Delete manufactures admin
    public function destroy_manu($manu_id)
    {
        $this->AuthLogin();
        DB::table('manufactures')->where('manu_id',$manu_id)->delete();
        return Redirect::to('admin.manufacture');
    }
    function logout_admin(Request $request) {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        $request->session()->forget(['admin_id']);
        $request->session()->forget(['admin_name']);
        return Redirect::to('/login');
    }
}
