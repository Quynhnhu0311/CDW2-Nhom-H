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
        if($id){
            $manufactures = DB::table('manufactures')->get();
            //Show detail Blog
            $blog_detail = DB::table('blog')->where('blog.blog_id',$id)->get();
            //Lấy ra Category Blog
            foreach($blog_detail as $category) {
                $category_id = $category->category_id;
            }
            $category_blog = DB::table('blog')->join('categorys', 'categorys.category_id', '=', 'blog.category_id')->where('categorys.category_id', $category_id)->get();

            return view('/blog-details')->with('blog_detail',$blog_detail)
                                        ->with('manufactures',$manufactures)
                                        ->with('category_blog',$category_blog);
        }
        else{
            return Redirect::to('/');
        }
    }
}
