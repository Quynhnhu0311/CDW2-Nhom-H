<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Commentblog;
use App\Models\Blog;
use Illuminate\Support\Facades\Redirect;


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
        $blog_detail = Blog::where('blog_id',$id)->get();
        $manufactures = DB::table('manufactures')->get();
        $comment_blog = Commentblog::All();
        return view('/blog-details')->with('blog_detail',$blog_detail)
                                    ->with('manufactures',$manufactures)
                                    ->with('comment_blog',$comment_blog);
    }
    public function add_comment_blog(Request $request){
        $blog_id = $request->id_blog;
        $name = $request->name_comment_blog;
        $email = $request->email_comment_blog;
        $content = $request->content_comment_blog;
        $comment_blog = new Commentblog();
        $comment_blog->blog_id = $blog_id;
        $comment_blog->name_comment_blog = $name;
        $comment_blog->email_comment_blog = $email;
        $comment_blog->comment_content_blog = $content;
        $comment_blog->save();
        return Redirect::to('blog-detail/'.$blog_id);
    }
}
