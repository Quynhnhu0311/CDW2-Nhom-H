<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    //
    function blog() {
        $manufactures = DB::table('manufactures')->get();
        $blogs = DB::table('blog')->get();
        // $created_at = DB::table('blog')::now();

        return view('/blog')->with('blogs',$blogs)
                            ->with('manufactures',$manufactures);
    }
    function blog_detail($id) {
        $blog_detail = DB::table('blog')->where('blog.blog_id',$id)->get();
        $manufactures = DB::table('manufactures')->get();
        return view('/blog-details')->with('blog_detail',$blog_detail)
                                    ->with('manufactures',$manufactures);
    }
}
