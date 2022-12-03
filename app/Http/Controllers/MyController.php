<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Manufacture;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name = 'index')
    {
        $blogs = DB::table('blog')->get();
        $get_all_coupon = DB::table('coupons')->get();
        $manufactures = DB::table('manufactures')->get();
        $getProtypes = DB::table('protypes')->get();
        $getManufactures = DB::table('manufactures')->get();
        $manufactures = DB::table('manufactures')->get();
        $getFeatures = DB::table('features')->get();
        $type_product = Protype::orderby('type_id', 'desc')->get();
        $manu_product = Manufacture::orderby('manu_id', 'desc')->get();
        return view($name, compact('blogs','manufactures','getProtypes','getManufactures','getFeatures','type_product','manu_product','get_all_coupon','manufactures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
