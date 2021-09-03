<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    //================ ADD ROUTE ARE HERE ==================

    public function AddBlog()
    {

        $users = User::orderBy('name', 'asc')->get();

        return view('backend.blog.add_blog', [
            'users' => $users,
        ]);
    }

    public function PostBlog(Request $request)
    {

        $request->validate([
            'user_id' => ['required'],
            'slug' => ['required'],
            'blog_title' => ['required'],
            'blog_image' => ['required'],
            'blog_des' => ['required'],

        ]);

        if ($request->hasFile('blog_image')) {

            $image = $request->file('blog_image');

            $ext = $request->slug . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(605, 442)->save(public_path('blog/' . $ext));


            Blog::insert([
                'user_id' => $request->user_id,
                'slug' => $request->slug,
                'blog_title' => $request->blog_title,
                'blog_image' => $ext,
                'blog_des' => $request->blog_des,
                'created_at' => Carbon::now(),

            ]);
        }

        return back()->with('success', 'Blog Added Successfully');
    }


     //================ VIEW ROUTE ARE HERE ==================

    public function ViewBlog(){

        $blogs = Blog::all();

        return view('backend.blog.view_blog', compact('blogs'));
    }


    public function AllBlog($id){

        $blogs = Blog::findOrfail($id)->first();

        return view('backend.blog.all_blog', compact('blogs'));
    }


     //================ UPDATE BLOG  ARE HERE ================== 

    public function EditBlog($id){

        $users = User::orderBy('name', 'asc')->get();
        $blogs = Blog::findOrfail($id)->first();

        return view('backend.blog.edit_blog',[

            'blogs' => $blogs,
            'users' => $users,
        ]);
    }

    public function UpdateBlog(Request $request){

        $id = $request->id;

        
        if ($request->hasFile('blog_image')) {

            $image = $request->file('blog_image');

            $ext = $request->slug . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(605, 442)->save(public_path('blog/' . $ext));

            $old_img = Blog::findOrfail($request->id)->blog_image;

            if (file_exists(public_path('blog/' . $old_img))) {
                unlink(public_path('blog/' . $old_img));
            }


            Blog::findOrfail($id)->update([
                'user_id' => $request->user_id,
                'slug' => $request->slug,
                'blog_title' => $request->blog_title,
                'blog_image' => $ext,
                'blog_des' => $request->blog_des,
                'created_at' => Carbon::now(),

            ]);
        }

            

          

        else{

            Blog::findOrfail($id)->update([
                'user_id' => $request->user_id,
                'slug' => $request->slug,
                'blog_title' => $request->blog_title,
               
                'blog_des' => $request->blog_des,
                'created_at' => Carbon::now(),

            ]);

        }

        return back()->with('success', 'Blog Updated Successfully');
    }



    public function DeleteBlog($id){

        Blog::findOrfail($id)->delete();

        return back()->with('success', 'Blog Deleted Successfully');
    }

}
