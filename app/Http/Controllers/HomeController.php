<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Feature;
use App\Models\Comment;
use App\Models\Repcomment;
use App\Models\Favorite;
use App\Models\Customer;
use App\Models\Infocustomer;
use App\Models\Addresscustomer;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class HomeController extends Controller
{
    function home()
    {
        $newArrivals = Product::where('feature_id', '=', 1)->get();
        $bestSellers = Product::where('feature_id', '=', 2)->get();
        $features = DB::table('features')->get();
        $manufactures = DB::table('manufactures')->get();
        $products_feature = Product::where('feature_id', '=', 1)->Paginate(4);
        $duplicate = DB::table('favorites')->join('products', 'products.product_id', '=', 'favorites.product_id')->get();
        $min_price = DB::table('products')->min('product_price');
        $max_price = DB::table('products')->max('product_price');



        return view('/index')->with('newArrivals', $newArrivals)
            ->with('bestSellers', $bestSellers)
            ->with('features', $features)
            ->with('products_feature', $products_feature)
            ->with('duplicate', $duplicate)
            ->with('manufactures', $manufactures);
    }
    // Show Product Home Page
    public function show_product_home($feature_id)
    {
        $manufactures = DB::table('manufactures')->get();
        $bestSellers = Product::where('feature_id', '=', 2)->get();
        $features = DB::table('features')->get();
        $feature_id = Feature::where('feature_id', $feature_id)->first();
        $products_feature = Product::where('feature_id', $feature_id->feature_id)->Paginate(4);
        $duplicate = DB::table('favorites')->join('products', 'products.product_id', '=', 'favorites.product_id')->get();
        return view('/index', compact('bestSellers', 'features', 'products_feature', 'duplicate', 'manufactures'));
    }
    //Detail Product and Related Product and Comment
    public function show_details($id){
        $product = Product::find($id);
        if($product){
            $tbReview = Comment::where('product_id',$id)->avg('rating_value');
            $detail = DB::table('products')->join('protypes','protypes.type_id','=','products.type_id')
            ->join('manufactures','manufactures.manu_id','=','products.manu_id')->where('products.product_id',$id)->get();
    
            foreach($detail as $related) {
                $type_id = $related->type_id;
            }
            /* Realated Product */
            $related_product = Product::where('type_id', $type_id)->paginate(8);;
            /* Show Comment and Rating Product */
            $comment_all = Comment::join('products','products.product_id','=','comments.product_id')
            ->where('comments.product_id',$id)->get();
            return view('shop-details',compact('detail','related_product','comment_all','tbReview'));
        }else{
            return Redirect::to('/')->with('error-detail', 'S???n Ph???m kh??ng t???n t???i !');;
        }

    }
    //Add Comment Product
    public function comment_product_ajax(Request $request)
    {
        $comment_product_id = $request->product_id;
        $id = $request->id_user_comment;
        $comment_content = $request->comment_content;
        $rating = $request->rating;
        $comment = new Comment();
        $comment->product_id = $comment_product_id;
        $comment->id = $id;
        $comment->comment_content = $comment_content;
        $comment->rating_value = $rating;
        $comment->save();
    }
    //Add Rep Comment Product
    public function rep_comment_product_ajax(Request $request){
        $id_product = $request->product_id_detail;
        $id = $request->id_user_comment_rep;
        $comment_id = $request->comment_id;
        $comment_content = $request->comment_content_rep;
        $comment_rep = new Repcomment();
        $comment_rep->id = $id;
        $comment_rep->comment_id = $comment_id;
        $comment_rep->comment_content = $comment_content;
        $kitu = strlen($request->comment_content_rep);
        if ($kitu > 150) {
            return Redirect::to('shop-details/'.$id_product)->with('error-comment', 'N???i dung b??nh lu???n kh??ng nh???p qu?? 150 k?? t??? !');
        }else if ($kitu <= 150) {
            $comment_rep->save();
            return Redirect::to('shop-details/'.$id_product);
        }
    }
    public function show_comment($id)
    {
        $detail = DB::table('products')->join('protypes', 'protypes.type_id', '=', 'products.type_id')
            ->join('manufactures', 'manufactures.manu_id', '=', 'products.manu_id')->where('products.product_id', $id)->get();
        foreach ($detail as $related) {
            $type_id = $related->type_id;
        }
        /* Realated Product */
        $related_product = DB::table('products')->join('protypes', 'protypes.type_id', '=', 'products.type_id')->where('protypes.type_id', $type_id)->paginate(8);
        foreach ($detail as $comment) {
            $comment_id = $comment->product_id;
        }
        /* Show Comment and Rating Product */
        $comment_all = Comment::join('products','products.product_id','=','comments.product_id')
        ->where('comments.product_id',$comment_id)->get();
        return view('show-comment',compact('detail','related_product','comment_all'));
    }
    public function update_info(Request $request){
        $id_customer = $request->id_customer;
        $dateOfBirth = $request->dateofbirth;
        $phone = $request->phone;
        $sex = $request->sex;
        $avatar = $request->avatar;
        $infoCustomer = new Infocustomer();
        $infoCustomer->id = $id_customer;
        $infoCustomer->dateOfBirth = $dateOfBirth;
        $infoCustomer->phone = $phone;
        $infoCustomer->sex = $sex;
        $kitu = strlen( $request->phone);
        $customer = Customer::where('id', $id_customer)->first();;
        $info = Infocustomer::where('id', $id_customer)->first();
        if($customer){
            if(!$info){
                if ($kitu > 11) {
                    return Redirect::to('file-customer/'. $id_customer)->with('error-phone-update', 'Phone kh??ng h???p l??? !');
                }else if ($kitu <= 150) {
                    $infoCustomer->save();
                    return Redirect::to('file-customer/'. $id_customer);
                }
            }else{
                return Redirect::to('editcustomer/'. $id_customer)->with('error-info', 'B???n ???? th??m th??ng tin r???i! ????y l?? trang c???p nh???t n???u b???n c???n');
            }
        }else{
            return Redirect::to('editcustomer/'. $id_customer)->with('error-customer', 'Ng?????i d??ng n??y kh??ng t???n t???i');
        }
    }
    //Edit manufacture
    public function edit_customer($id)
    {
        $customer = Customer::where('id', $id)->get();
        $customer_id = Customer::find($id);
        if($customer_id){
            return view('editcustomer', compact('customer'));
        }
        else{
            return Redirect::to('/')->with('error-detail', 'Ng?????i d??ng kh??ng t???n t???i !');;
        }
    }
    //Edit manufacture
    public function edit_address($id)
    {
        $customer_id = Addresscustomer::where('id_address_customer', $id)->first();
        if($customer_id) {
            $address = Addresscustomer::where('id_address_customer', $id)->get();
            return view('edit-add-customer', compact('address'));
        }else{
            return Redirect::to('/')->with('error-detail', 'Ng?????i d??ng kh??ng t???n t???i !');
        }
    }
    public function destroy_address(Request $request ,$id_address_customer)
    {
        $addressCustomer = DB::table('addresscustomers')->where('id_address_customer', $id_address_customer)->delete();
        $id = $request->id;
        $customer_id = Customer::find($id);
        if($customer_id){
            if($addressCustomer){
                Session::put('message_update', 'X??a Th??nh C??ng!');
                return Redirect::to('address-customer/'.$id);
            }else{
                Session::put('message_update', 'Address Kh??ng T???n T???i!');
                return Redirect::to('address-customer/'.$id);
            }
        }
        else {
            return Redirect::to('/')->with('error-detail', 'Ng?????i d??ng kh??ng t???n t???i !');
        }
        
    }
    public function edit_pass_customer($id)
    {
        $customer_id = Customer::find($id);
        if($customer_id){
            $customer = Customer::where('id', $id)->get();
            return view('edit-pass-customer', compact('customer'));
        }else{
            return Redirect::to('/')->with('error-detail', 'Ng?????i d??ng kh??ng t???n t???i !');
        }
    }
    public function update_info_customer(Request $request, $id)
    {
        $customer_id = Customer::find($id);
        if($customer_id){
            $data_customer = array();
            $data_info = array();
            $data_customer['name'] = $request->name;
            $data_info['phone'] = $request->phone;
            $data_info['dateOfBirth'] = $request->date;
            $data_info['sex'] = $request->sex;
            $kitu = strlen( $request->phone);
            if ($kitu > 11 || $kitu < 9) {
                return Redirect::to('editcustomer/' . $id)->with('error-phone-update', 'Phone kh??ng h???p l??? !');
            } else if ($kitu == 11 || $kitu == 9) {
                DB::table('customers')->where('id', $id)->update($data_customer);
                DB::table('infocustomers')->where('id', $id)->update($data_info);
                return Redirect::to('file-customer/'. $id)->with("status", "Data Update Successfully");
            }
        }else{
            return Redirect::to('/')->with('error-info-update', 'Ng?????i d??ng kh??ng t???n t???i !');;
        }
    }
    // Show Product Home Page
    public function detail_customer($id)
    {   
        $customer_id = Customer::find($id);
        if($customer_id){
            $customer = Customer::Where('id',$id)->get();
            return view('/file-customer', compact('customer'));
        }else{
            return Redirect::to('/')->with('error-detail', 'Ng?????i d??ng kh??ng t???n t???i !');;
        }
    }
    public function address_customer($id)
    {   
        $customer_id = Customer::find($id);
        if($customer_id){
            $address = Addresscustomer::Where('id',$id)->get();
            return view('address-customer', compact('address'));
        }else{
            return Redirect::to('/')->with('error-detail', 'Ng?????i d??ng kh??ng t???n t???i !');;
        }
    }
    public function add_address(Request $request){
        $id_customer = $request->id_customer;
        $address = $request->address;
        $addressCustomer = new Addresscustomer();
        $addressCustomer->id = $id_customer;
        $addressCustomer->address = $address;
        $kitu = strlen( $request->address);
        $customer = Customer::where('id', $id_customer)->first();
        if($customer){
            if ($kitu > 100) {
                return Redirect::to('address-customer/'. $id_customer)->with('error-address', 'N???i dung Address kh??ng nh???p qu?? 100 k?? t??? !');
            }else if ($kitu <= 100) {
                $addressCustomer->save();
                return Redirect::to('address-customer/'. $id_customer);
            }
        }
        else{
            return Redirect::to('address-customer/'. $id_customer)->with('error-customer', 'Ng?????i d??ng n??y kh??ng t???n t???i');
        }
    }
    public function update_address_customer(Request $request, $id)
    {
        $customer_id = Customer::find($id);
        if($customer_id){
            $data = array();
            $data['address'] = $request->address;
            $kitu = strlen( $request->address);
            if ($kitu > 100) {
                return Redirect::to('edit-add-customer/' . $id)->with('error-address-update', 'Phone kh??ng h???p l??? !');
            } else if ($kitu < 100) {
                DB::table('addresscustomers')->where('id_address_customer', $id)->update( $data);
                return Redirect::to('address-customer/'. $id)->with("status", "Data Update Successfully");
            }
        }else{
            return Redirect::to('edit-add-customer/' . $id)->with('error-address-customer', 'Ng?????i d??ng n??y kh??ng t???n t???i !');
        }
    }
    public function update_password_customer(Request $request, $id)
    {
        $old_pass = Customer::where('id',$id)->first();
        $old_passs = md5($request->old_pass);
        $data = array();
        $data['password'] = md5($request->new_pass);
        $kitu = strlen( $request->address);
        if($old_pass){
            if($old_pass->password == $old_passs){
                if($request->re_pass == $request->new_pass){
                    if ($kitu > 100) {
                        return Redirect::to('edit-pass-customer/' . $id)->with('error-pass-update', 'Password qu?? d??i!');
                    } else if ($kitu < 100) {
                        DB::table('customers')->where('id', $id)->update( $data);
                        return Redirect::to('edit-pass-customer/'. $id)->with("status", "?????i m???t kh???u th??nh c??ng");
                    }
    
                }else{
                    return Redirect::to('edit-pass-customer/' . $id)->with('error-re-update', 'M???t kh???u nh???p l???i kh??ng ????ng !');
                }
    
            }
            else{
                return Redirect::to('edit-pass-customer/' . $id)->with('error-old-update', 'M???t kh???u c?? kh??ng ????ng !');
            }
        }else{
            return Redirect::to('edit-pass-customer/' . $id)->with('error-old-customer', 'Ng?????i d??ng n??y kh??ng t???n t???i !');
        }
    }
}
