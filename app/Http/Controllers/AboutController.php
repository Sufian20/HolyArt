<?php

namespace App\Http\Controllers;

use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function AddAbout(){
        
        return view('backend.about.add_about');
    }

    function PostAbout(Request $request){

        About::insert([
            'about_icon' => $request->about_icon,
            'about_title' => $request->about_title,
            'about_des' => $request->about_des,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'About Added Successfully');
    }

    function ViewAbout(){
        $abouts = About::paginate();
        return view('backend.about.view_about', [ 'abouts' => $abouts]);
    }

    function DeleteAbout($id){
        About::findOrfail($id)->delete();
        return back()->with('success', 'Service Deleted Successfully');
    }

    function EditAbout($id){
            $abouts = About::findOrfail($id);
        
            return view('backend.about.edit_about', compact('abouts'));
    }

    function UpdateAbout(Request $request){

        About::find($request->id)->update([

            'about_icon' => $request->about_icon,
            'about_title' => $request->about_title,
            'about_des' => $request->about_des,
            'updated_at' => Carbon::now()

        ]);
    
        return back()->with('success', 'About Updated Successfully');
    }


}

