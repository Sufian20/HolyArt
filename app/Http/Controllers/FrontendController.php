<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\ConfirmRegistration;
use App\Models\Contact;
use App\Models\Coursess;
use App\Models\Gallery;
use App\Models\OurTeam;
use App\Models\service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class FrontendController extends Controller
{
    function ForntPage(){
          $services =  service::all();
          
          $abouts = About::all();

          $coursess = Coursess::all();

          $blogs = Blog::orderBy('blog_title', 'desc')->limit(4)->get();

         $categoris = Category::orderBy('category_name', 'asc')->get();

         $photos =  Gallery::all();
        

        return view('frontend.main',[
            'services' => $services,
            'abouts' =>$abouts,
            'coursess' =>$coursess,
            'blogs' =>$blogs,
            'categoris' =>$categoris,
            'photos' =>$photos,
            
        ]);
    }


    //==================== Confirm Registration ===========================


    public function PostConfirmRegistration(Request $request){

        ConfirmRegistration::insert([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'created_at' => Carbon::now(),

        ]);

        return back()->with('success', 'Registration message sended');

    }

      //==================== Blog ===========================

    public function  BlogPage(){

        $blogs = Blog::orderBy('blog_title', 'desc')->limit(4)->get();


        return view('frontend.blogpage',[
            'blogs' => $blogs,
        ]);
    }
    
    public function BlogDetails($slug){
        
        $blogs = Blog::where('slug', $slug)
        ->join('users', 'blogs.user_id', 'users.id',)
        ->select('users.name', 'blogs.*')
        ->first();
    
        $comments = Comment::where('blog_id', $blogs->id)->get();

        return view('frontend.blog_details',[
            'blogs' => $blogs,
            'comments' => $comments,
        ]);
    }


    public function PostComment(Request $request){

        Comment::insert([

            'user_id' => Auth::id(),
            'blog_id' => $request->blog_id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'created_at' => Carbon::now(),

        ]);

        return back();

    }

       //==================== Contact ===========================

    public function Contact(){


        return view('frontend.contact');
    }


    public function PostContact(Request $request){

        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required',

        ]);

        Contact::insert([

            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now(),

        ]);

        return back()->with('success', 'Message Send Successfully');
    }
   
     
    //==================== GALLERY ARE HERE ==================

    public function GalleryPage(){

        $photos = Gallery::all();
        $categoris = Category::orderBy('category_name', 'asc')->get();

        return view('frontend.gallery',[
            'photos' => $photos,
            'categoris' => $categoris,

        ]);
    }


    // ============= COURSSESS ARE HERE ===================

    public function CourssesPage(){

        $coursess = Coursess::all();

        return view('frontend.coursses',[
            'coursess' => $coursess,
        ]);
    }


    // =============== TEAM PAGE ARE HERE ====================

    public function TeamPage(){

        $teams = OurTeam::orderBy('id', 'asc')->get();

        return view('frontend.team', compact('teams'));
    }

    


}
