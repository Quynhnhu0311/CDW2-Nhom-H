<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Coupon;
use App\Models\Manufacture;
use App\Models\Order;
use App\Models\Blog;
use App\Models\Staff;
use App\Models\Admin;
use App\Models\Customer;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Validator;
use Session;

session_start();

class AdminController extends Controller
{
    // Chặn Admin
    public function StaffLogin()
    {
        $id_admin = Session::get('admin_id');
        $id_staff = Session::get('staff_id');
        if ($id_admin) {
            return Redirect::to('admin.dashboard');
        } elseif ($id_staff) {
            return Redirect::to('admin.dashboard');
        } else {
            return Redirect::to('login')->send();
        }
    }
    public function  AuthLogin()
    {
        $id_admin = Session::get('admin_id');
        if ($id_admin) {
            return Redirect::to('admin.dashboard');
        } else {
            return Redirect::to('login')->send();
        }
    }

    //Show Manufacture Admin
    public function show_dashboard()
    {
        $this->StaffLogin();
        $product = Product::all()->count();
        $protype = Protype::all()->count();
        $manu = Manufacture::all()->count();
        $order = Order::all()->count();
        return view('admin.dashboard', compact('product', 'protype', 'manu', 'order'));
    }

    /*----- Logout Admin -----*/
    function logout_admin(Request $request)
    {
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        $request->session()->forget(['admin_id']);
        $request->session()->forget(['admin_name']);
        return Redirect::to('/login');
    }

    //Add Manufactures Admin
    public function save_manufacture(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['manu_name'] = $request->manu_name;
        $data['manu_qty'] = $request->manu_qty;
        $kitu = strlen($request->manu_name);
        if ($kitu > 100) {
            return Redirect::to('admin.addmanufacture')->with('error', 'Trường Manu Name không nhập quá 100 kí tự !');;
        } else if ($kitu <= 100) {
            DB::table('manufactures')->insert($data);
            return Redirect::to('admin.manufacture');
        }
    }
    //Edit manufacture
    public function edit_manufacture($manu_id)
    {
        $this->AuthLogin();
        $protypes = DB::table('protypes')->get();
        $manufactures = DB::table('manufactures')->where('manu_id', $manu_id)->get();
        return view('admin.editmanufacture', compact('manufactures', 'protypes'));
    }

    //Update Manufacture admin
    public function update_manufacture(Request $request, $manu_id)
    {
        $this->AuthLogin();
        $data = array();
        // $iddata =  Product::find($id);
        $data['manu_name'] = $request->manu_name;
        $data['manu_qty'] = $request->manu_qty;
        $kitu = strlen($request->manu_name);
        if ($kitu > 100) {
            return Redirect::to('admin.editmanufacture/' . $manu_id)->with('error', 'Trường Manu Name không nhập quá 100 kí tự !');;
        } else if ($kitu <= 100) {
            DB::table('manufactures')->where('manu_id', $manu_id)->update($data);
            return Redirect::to('admin.manufacture')->with("status", "Data Update Successfully");
        }
    }

    //Show Add manufactures admin
    public function show_admin_manufacture()
    {
        $this->AuthLogin();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();

        return view('admin.manufacture', compact('protypes', 'protypes', 'manufactures'));
    }
    public function show_admin_addmanufacture()
    {
        $this->AuthLogin();
        $manufactures = DB::table('manufactures')->get();
        $protypes = DB::table('protypes')->get();
        $Allproducts = DB::table('products')->get();

        return view('admin.addmanufacture', compact('protypes', 'protypes', 'manufactures', 'Allproducts'));
    }

    //Delete manufactures admin
    public function destroy_manu($manu_id)
    {
        $this->AuthLogin();
        DB::table('manufactures')->where('manu_id', $manu_id)->delete();
        return Redirect::to('admin.manufacture');
    }
    ////////////////////////////////////////// PROTYPES /////////////////////////////////////////

    //Show Protypes in admin
    public function show_admin_protype()
    {
        $this->AuthLogin();
        $protypes = DB::table('protypes')->get();

        return view('admin.protype')->with('protypes', $protypes);
    }
    //Edit Protypes in admin
    public function show_edit_protype($type_id)
    {
        $this->AuthLogin();
        $protypes = DB::table('protypes')->where('type_id', $type_id)->get();
        return view('admin.editprotype')->with('protypes', $protypes);
    }
    //Update Protype in admin
    public function update_admin_protype(Request $request, $type_id)
    {
        $this->AuthLogin();
        $data = array();
        $data['type_name'] = $request->type_name;
        $data['type_qty'] = $request->type_qty;
        $char = strlen($request->type_name);
        if ($char > 101) {
            return Redirect::to('admin.addprotype')->with('error', 'Type name không được nhập quá 100 ký tự');
        } else {
            DB::table('protypes')->where('type_id', $type_id)->update($data);
            return Redirect::to('admin.protype')->with("status", "Update Protype Successfully");
        }
    }
    //Add Protype in admin
    public function add_admin_protype(Request $request)
    {
        $this->AuthLogin();
        $data['type_name'] = $request->type_name;
        $data['type_qty'] = $request->type_qty;
        $char = strlen($request->type_name);
        if ($char > 101) {
            return Redirect::to('admin.addprotype')->with('error', 'Type name không được nhập quá 100 ký tự');
        } else {
            $protypes = DB::table('protypes')->insert($data);
            return Redirect::to('admin.protype')->with("status", "Add Protype Successfully");
        }
    }
    //Delete Protype in admin
    public function delete_admin_protype($type_id)
    {
        $this->AuthLogin();
        DB::table('protypes')->where('type_id', $type_id)->delete();
        return Redirect::to('admin.protype');
    }

    ////////////////////////////////////////////////////////////////////////////////////////////
    //get staff token by id
    function get_token_sfaff_by_id()
    {
        $id_staff = Session::get('staff_id');
        if ($id_staff) {
            $staff = Staff::find($id_staff);
            $token = $staff->token;
            return $token . $id_staff;
        } else
            return null;
    }

    /*----- Show Products -----*/
    function show_all_products()
    {
        $this->StaffLogin();
        $show_Allproducts = Product::all();
        $staff_token = $this->get_token_sfaff_by_id();
        return view('admin.products')->with('show_Allproducts', $show_Allproducts)
            ->with('staff_token', $staff_token);
    }

    //Edit Product
    function edit_product($product_id)
    {
        $this->StaffLogin();
        $show_Allproducts = Product::all();
        $type_product = Protype::orderby('type_id', 'desc')->get();
        $manu_product = Manufacture::orderby('manu_id', 'desc')->get();
        $edit_product = Product::where('product_id', $product_id)->get();
        return view('admin.editproduct')->with('type_product', $type_product)
            ->with('manu_product', $manu_product)
            ->with('edit_product', $edit_product)
            ->with('show_Allproducts', $show_Allproducts);
    }

    //Update Product
    function update_product(Request $request, $product_id)
    {
        $this->StaffLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['manu_id'] = $request->manufacture;
        $data['type_id'] = $request->protype;
        $data['product_price'] = $request->product_price;
        $data['product_qty'] = $request->product_qty;
        $data['product_description'] = $request->product_description;
        $get_image = $request->file('product_img');
        if ($get_image) {
            /*-----Fix Undefined variable-----*/
            $edit_product = Product::where('product_id', $product_id)->get();
            $type_product = Protype::orderby('type_id', 'desc')->get();
            $manu_product = Manufacture::orderby('manu_id', 'desc')->get();
            /*-----End Fix-----*/
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('./img/product/', $new_image);
            $data['product_img'] = $new_image;
            DB::table('products')->where('product_id', $product_id)->update($data);
            Session::put('message_image', 'Cập Nhật Hình Ảnh Thành Công!');
            return view('admin.editproduct')->with('edit_product', $edit_product)
                ->with('type_product', $type_product)
                ->with('manu_product', $manu_product);
        }
        DB::table('products')->where('product_id', $product_id)->update($data);
        /*-----Fix Undefined variable-----*/
        $edit_product = Product::where('product_id', $product_id)->get();
        $type_product = Protype::orderby('type_id', 'desc')->get();
        $manu_product = Manufacture::orderby('manu_id', 'desc')->get();
        /*-----End Fix-----*/
        Session::put('message_update', 'Cập Nhật Thành Công!');
        return view('admin.editproduct')->with('edit_product', $edit_product)
            ->with('type_product', $type_product)
            ->with('manu_product', $manu_product);
    }

    //Delete Product
    function delete_product($product_id)
    {
        $this->StaffLogin();
        $token = md5($this->get_token_sfaff_by_id());
        $delete_product = DB::table('products')->where('product_id', $product_id)->where('token', $token)->delete();
        $show_Allproducts = Product::all();
        if ($delete_product == true) {
            Session::put('message_deleteProduct', 'Xóa Sản Phẩm Thành Công!');
        } else {
            Session::put('message_deleteProduct', 'Xóa Sản Phẩm Không Thực Hiện Được! (Sản phẩm không tồn tại hoặc người nào tạo người đó xóa)');
        }
        return view('admin.products')->with('show_Allproducts', $show_Allproducts);
    }

    //Add Product
    function add_product()
    {
        $this->StaffLogin();
        $getProtypes = DB::table('protypes')->get();
        $getManufactures = DB::table('manufactures')->get();
        $getFeatures = DB::table('features')->get();
        $staff_token = $this->get_token_sfaff_by_id();
        return view('admin.addproduct')->with('getProtypes', $getProtypes)
            ->with('getManufactures', $getManufactures)
            ->with('getFeatures', $getFeatures)
            ->with('staff_token', $staff_token);
    }

    //Save Product
    function save_product(Request $request)
    {
        $this->StaffLogin();
        $staff_token = $this->get_token_sfaff_by_id();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_qty'] = $request->product_qty;
        $data['manu_id'] = $request->manufacture;
        $data['type_id'] = $request->protype;
        $data['feature_id'] = $request->feature;
        $data['product_description'] = $request->product_description;
        $data['product_img'] = $request->product_img;
        $data['product_sold'] = $request->product_sold;
        $data['token'] = $request->product_token;
        $get_image = $request->file('product_img');

        /*-----Fix Undefined variable-----*/
        $getProtypes = DB::table('protypes')->get();
        $getManufactures = DB::table('manufactures')->get();
        $getFeatures = DB::table('features')->get();
        /*-----End Fix-----*/

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('./img/product/', $new_image);
            $data['product_img'] = $new_image;
            DB::table('products')->insert($data);
            Session::put('message_add', 'THÊM THÀNH CÔNG!');
            return view('admin.addproduct')->with('getProtypes', $getProtypes)
                ->with('getManufactures', $getManufactures)
                ->with('getFeatures', $getFeatures)
                ->with('staff_token', $staff_token);
        }
        $data['product_img'] = '';
        $data['product_sold'] = 0;
        DB::table('products')->insert($data);
        Session::put('message_add', 'THÊM THÀNH CÔNG!');
        return view('admin.addproduct')->with('getProtypes', $getProtypes)
            ->with('getManufactures', $getManufactures)
            ->with('getFeatures', $getFeatures)
            ->with('staff_token', $staff_token);
    }

    /*----- Show Orders -----*/
    function show_all_orders()
    {
        $this->AuthLogin();
        $show_AllOrders = Order::all();
        return view('admin.orders')->with('show_AllOrders', $show_AllOrders);
    }

    function detail_order($order_code)
    {
        $this->AuthLogin();
        $order_details = DB::table('detail_orders')->where('order_code', $order_code)->get();
        $order_status = DB::table('orders')->where('order_code', $order_code)->get();

        foreach ($order_status as $key => $order) {
            $shipping_id = $order->shipping_id;
        }

        $shippings = DB::table('shippings')->where('shipping_id', $shipping_id)->get();

        foreach ($order_details as $key => $order_coupon_code) {
            $coupon_code = $order_coupon_code->coupon_code;
        }

        $coupon_order = DB::table('coupons')->where('coupon_code', $coupon_code)->first();
        if ($coupon_order) {
            $coupon_condition = $coupon_order->coupon_condition;
            $coupon_number = $coupon_order->coupon_number;
            $coupon_code_cart = $coupon_order->coupon_code;
        } else {
            $coupon_condition = 0;
            $coupon_number = 0;
            $coupon_code_cart = 'Không có mã';
        }

        return view('admin.detailorder')->with('shippings', $shippings)
            ->with('order_details', $order_details)
            ->with('coupon_condition', $coupon_condition)
            ->with('coupon_number', $coupon_number)
            ->with('coupon_code_cart', $coupon_code_cart)
            ->with('order_status', $order_status);
    }

    /*----- Show Coupons -----*/
    //Show All Coupon
    function show_all_coupons()
    {
        $get_all_coupon = DB::table('coupons')->get();
        return view('admin.coupons')->with('get_all_coupon', $get_all_coupon);
    }

    //New Coupon
    function add_coupon()
    {
        return view('admin.addcoupon');
    }

    //Save Coupon
    function save_coupon(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['coupon_name'] = $request->coupon_name;
        $data['coupon_code'] = $request->coupon_code;
        $data['coupon_qty'] = $request->coupon_qty;
        $data['coupon_condition'] = $request->coupon_condition;
        $data['coupon_number'] = $request->coupon_number;

        if ($data['coupon_condition'] == 1 && $data['coupon_number'] < 1000) {
            Session::put('message_add_error', 'Thêm Coupon Không Thành Công!');
            return view('admin.addcoupon');
        } elseif ($data['coupon_condition'] == 2 && $data['coupon_number'] > 100) {
            Session::put('message_add_error', 'Thêm Coupon Không Thành Công!');
            return view('admin.addcoupon');
        } else {
            DB::table('coupons')->insert($data);
            Session::put('message_add', 'Thêm Coupon Thành Công!');
            return view('admin.addcoupon');
        }
    }

    //Edit Coupon
    function edit_coupon($coupon_id)
    {
        $this->AuthLogin();
        $get_all_coupon = Coupon::all();
        $edit_coupon = Coupon::where('coupon_id', $coupon_id)->get();
        return view('admin.editcoupon')->with('edit_coupon', $edit_coupon);
    }

    //Update Coupon
    function update_coupon(Request $request, $coupon_id)
    {
        $this->AuthLogin();
        $data = array();
        $edit_coupon = Coupon::where('coupon_id', $coupon_id)->get();

        $data['coupon_name'] = $request->coupon_name;
        $data['coupon_code'] = $request->coupon_code;
        $data['coupon_qty'] = $request->coupon_qty;
        $data['coupon_number'] = $request->coupon_number;
        DB::table('coupons')->where('coupon_id', $coupon_id)->update($data);

        Session::put('message_update_coupon', 'Cập Nhật Thành Công!');

        return view('admin.editcoupon')->with('edit_coupon', $edit_coupon);
    }

    //Delete Coupon
    public function delete_coupon($coupon_id)
    {
        $this->AuthLogin();
        $get_all_coupon = DB::table('coupons')->get();
        DB::table('coupons')->where('coupon_id', $coupon_id)->delete();
        Session::put('message_deleteCoupon', 'Xóa Coupon Thành Công!');
        return view('admin.coupons')->with('get_all_coupon', $get_all_coupon);
        //return Redirect::to('admin.coupons');
    }

    //Show Comment in admin
    public function show_admin_comment()
    {
        $this->AuthLogin();
        $comment = DB::table('comments')->join('products', 'comments.product_id', '=', 'products.product_id')
            ->join('customers', 'comments.id', '=', 'customers.id')->get();
        return view('admin.comment', compact('comment'));
    }

    //Delete Comment in admin
    public function delete_admin_comment($comment_id)
    {
        $this->AuthLogin();
        DB::table('comments')->where('comment_id', $comment_id)->delete();
        return Redirect::to('admin.comment');
    }

    //Show Admin Blog
    public function show_admin_blog()
    {
        $this->AuthLogin();
        $blogs = DB::table('blog')->get();

        return view('admin.blog')->with('blogs', $blogs);
    }
    //Show Edit Blog
    function edit_admin_blog($blog_id)
    {
        $this->AuthLogin();
        $blogs = DB::table('blog')->where('blog_id', $blog_id)->get();
        return view('admin.editblog')->with('blogs', $blogs);
    }

    //Update Blog
    function update_admin_blog(Request $request, $blog_id)
    {
        $this->AuthLogin();
        $data = array();
        $data['blog_title'] = $request->blog_title;
        $data['blog_description'] = $request->blog_description;
        $data['blog_author'] = $request->blog_author;
        $get_image = $request->file('blog_img');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('./img/blog/', $new_image);
            $data['blog_img'] = $new_image;
            DB::table('blog')->where('blog_id', $blog_id)->update($data);
            Session::put('message_image', 'Cập Nhật Hình Ảnh Thành Công!');
            return Redirect::to('admin.blog');
        }
        DB::table('blog')->where('blog_id', $blog_id)->update($data);
        Session::put('message_update', 'Cập Nhật Thành Công!');
        return Redirect::to('admin.blog');
    }

    //delete blog
    function delete_admin_blog($blog_id)
    {
        $this->AuthLogin();
        DB::table('blog')->where('blog_id', $blog_id)->delete();
        return Redirect::to('admin.blog');
    }

    //Add Admin Blog
    function add_admin_blog(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['blog_title'] = $request->blog_title;
        $data['blog_description'] = $request->blog_description;
        $data['blog_Author'] = $request->blog_author;
        $get_image = $request->file('blog_img');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('./img/blog', $new_image);
            $data['blog_img'] = $new_image;
            DB::table('blog')->insert($data);
            Session::put('message_image', 'Thêm Hình Ảnh Thành Công!');
            return Redirect::to('admin.addblog');
        }
    }
    /*----- Show Staff -----*/
    //
    function show_staffs()
    {
        $show_staffs = DB::table('staffs')->get();
        return view('admin.staffs', compact('show_staffs'));
    }

    public function save_staff(Request $request)
    {
        //Check_email
        $input['staff_email'] = $request->staff_email;
        $rules = array('staff_email' => 'unique:staffs,staff_email');
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            Session::put('message', 'Tài khoản này đã tồn tại. Vui lòng nhập lại!');
            return Redirect::to('admin.addstaff');
        } else {
            // Register the new staff.
            $staff = new Staff;
            $staff->staff_name = $request->staff_name;
            $staff->staff_email = $request->staff_email;
            $staff->staff_password = md5($request->staff_password);
            $staff->status = 0;
            $staff->token = md5('xyz');
            $staff->save();
            return Redirect::to('admin.staffs');
        }
    }
    public function edit_staff(Request $request)
    {
        $this->AuthLogin();
        $key = request('key');
        $edit_staff = Staff::where('staff_id', $key)->get();
        return view('admin.editstaff', compact('edit_staff'));
    }
    public function update_staff(Request $request)
    {
        $this->AuthLogin();
        $id = $request->staff_id;
        //Check_email
        $input['staff_email'] = $request->staff_email;
        $rules = array('staff_email' => 'unique:staffs,staff_email');
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            Session::put('message', 'Tài khoản này đã tồn tại. Vui lòng nhập lại!');
            return Redirect::to('admin.editstaff/' . $id);
        } else {
            // Register the new staff.
            $staff = Staff::find($id);
            $staff->staff_name = $request->staff_name;
            $staff->staff_email = $request->staff_email;
            $staff->staff_password = md5($request->staff_password);
            $staff->status = 0;
            $staff->save();
            return Redirect::to('admin.staffs');
        }
    }
    public function delete_staff()
    {
        $this->AuthLogin();
        $staff = Staff::find(request('key'));
        $staff->delete();
        return Redirect::to('admin.staffs');
    }
    /*----- Show Customers -----*/
    //
    function show_customers()
    {
        $show_customers = DB::table('customers')->get();
        return view('admin.customers', compact('show_customers'));
    }
    function edit_customer(Request $request)
    {
        $this->AuthLogin();
        $key = request('key');
        $edit_customer = Customer::where('customer_id', $key)->get();
        return view('admin.editcustomer', compact('edit_customer'));
    }
    function update_customer(Request $request)
    {
        $this->AuthLogin();
        $id = $request->customer_id;
        //Check_email
        $input['customer_email'] = $request->customer_email;
        $rules = array('customer_email' => 'unique:customers,customer_email');
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            Session::put('message', 'Tài khoản này đã tồn tại. Vui lòng nhập lại!');
            return Redirect::to('admin.editcustomer/' . $id);
        } else {
            // Update customer.
            $customer = Customer::find($id);
            $customer->customer_name = $request->customer_name;
            $customer->customer_email = $request->customer_email;
            $customer->customer_password = md5($request->customer_password);
            $customer->status = 0;
            $customer->save();
            return Redirect::to('admin.customers');
        }
    }
    function delete_customer()
    {
        $this->AuthLogin();
        $customer = Customer::find(request('key'));
        $customer->delete();
        return Redirect::to('admin.customers');
    }
}
