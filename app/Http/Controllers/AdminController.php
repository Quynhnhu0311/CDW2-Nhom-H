<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Manufacture;
use DB;
use Session;
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

    /*----- Logout Admin -----*/
    function logout_admin(Request $request) {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        $request->session()->forget(['admin_id']);
        $request->session()->forget(['admin_name']);
        return Redirect::to('/login');
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


    /*----- Show Products -----*/
    function show_all_products() {
        $this->AuthLogin();
        $show_Allproducts = Product::all();
        return view('admin.products')->with('show_Allproducts',$show_Allproducts);
    }

    //Edit Product
    function edit_product($product_id) {
        $this->AuthLogin();
        $show_Allproducts = Product::all();
        $type_product = Protype::orderby('type_id','desc')->get();
        $manu_product = Manufacture::orderby('manu_id','desc')->get();
        $edit_product = Product::where('product_id',$product_id)->get();
        return view('admin.editproduct')->with('type_product',$type_product)
                                                    ->with('manu_product',$manu_product)
                                                    ->with('edit_product',$edit_product)
                                                    ->with('show_Allproducts',$show_Allproducts);
    }

    //Update Product
    function update_product(Request $request, $product_id) {
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['manu_id'] = $request->manufacture;
        $data['type_id'] = $request->protype;
        $data['product_price'] = $request->product_price;
        $data['product_qty'] = $request->product_qty;
        $data['product_description'] = $request->product_description;
        $get_image = $request->file('product_img');
        if($get_image){
            /*-----Fix Undefined variable-----*/
            $edit_product = Product::where('product_id',$product_id)->get();
            $type_product = Protype::orderby('type_id','desc')->get();
            $manu_product = Manufacture::orderby('manu_id','desc')->get();
            /*-----End Fix-----*/
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('./img/product/',$new_image);
            $data['product_img'] = $new_image;
            DB::table('products')->where('product_id',$product_id)->update($data);
            Session::put('message_image','Cập Nhật Hình Ảnh Thành Công!');
            return view('admin.editproduct')->with('edit_product',$edit_product)
                                            ->with('type_product',$type_product)
                                            ->with('manu_product',$manu_product);
        }
        DB::table('products')->where('product_id',$product_id)->update($data);
        /*-----Fix Undefined variable-----*/
        $edit_product = Product::where('product_id',$product_id)->get();
        $type_product = Protype::orderby('type_id','desc')->get();
        $manu_product = Manufacture::orderby('manu_id','desc')->get();
        /*-----End Fix-----*/
        Session::put('message_update','Cập Nhật Thành Công!');
        return view('admin.editproduct')->with('edit_product',$edit_product)
                                        ->with('type_product',$type_product)
                                        ->with('manu_product',$manu_product);
    }

    //Delete Product
    function delete_product($product_id) {
        $this->AuthLogin();
        $show_Allproducts = Product::all();
        DB::table('products')->where('product_id',$product_id)->delete();
        Session::put('message_deleteProduct','Xóa Sản Phẩm Thành Công!');
        return view('admin.products')->with('show_Allproducts',$show_Allproducts);
    }

    //Add Product
    function add_product() {
        $this->AuthLogin();
        $getProtypes = DB::table('protypes')->get();
        $getManufactures = DB::table('manufactures')->get();
        $getFeatures = DB::table('features')->get();
        return view('admin.addproduct')->with('getProtypes',$getProtypes)
                                        ->with('getManufactures',$getManufactures)
                                        ->with('getFeatures',$getFeatures);
    }

    //Save Product
    function save_product(Request $request) {
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_qty'] = $request->product_qty;
        $data['manu_id'] = $request->manufacture;
        $data['type_id'] = $request->protype;
        $data['feature_id'] = $request->feature;
        $data['product_description'] = $request->product_description;
        $data['product_img'] = $request->product_img;
        $get_image = $request->file('product_img');

        /*-----Fix Undefined variable-----*/
        $getProtypes = DB::table('protypes')->get();
        $getManufactures = DB::table('manufactures')->get();
        $getFeatures = DB::table('features')->get();
        /*-----End Fix-----*/

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('./img/product/',$new_image);
            $data['product_img'] = $new_image;
            DB::table('products')->insert($data);
            Session::put('message_add','THÊM THÀNH CÔNG!');
            return view('admin.addproduct')->with('getProtypes', $getProtypes)
                                            ->with('getManufactures', $getManufactures)
                                            ->with('getFeatures', $getFeatures);
        }
        $data['product_img'] = '';
        DB::table('products')->insert($data);
        Session::put('message_add','THÊM THÀNH CÔNG!');
        return view('admin.addproduct')->with('getProtypes', $getProtypes)
                                        ->with('getManufactures', $getManufactures)
                                        ->with('getFeatures', $getFeatures);
    }
}
