<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\DocBlock\Tags\Generic;

class PhotoGalleyController extends Controller
{
    //============= Add Gallery ===============

    public function AddPhoto(){

        $categoris = Category::all();

        return view('backend.gallery.add_gallery', compact('categoris'));
    }


    public function PostPhoto(Request $request){

        $request->validate([
            'category_id' => ['required'],
            'images' => ['required'],
          

        ]);


        if ($request->hasFile('images')) {

            $image = $request->file('images');

            $ext = $request->category_id . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(480, 480)->save(public_path('gallery/' . $ext));


            Gallery::insert([
            
                'category_id' => $request->category_id,
                'images' => $ext,
                'created_at' => Carbon::now(),
    
            ]);
        }

      

        return back()->with('success', 'Photo Added Successfully');
    }


    //============= VIEW Gallery ===============

    public function ViewPhoto(){

      $photos = Gallery::with('category')->get();
    
     // $categoris = Category::orderBy('category_name', 'asc')->get();

        return view('backend.gallery.view_gallery', [
            'photos' =>  $photos,
           // 'categoris' =>  $categoris,
        ]);
    }


     //============= UPDATE GALERY ===============

public function EditPhoto($id){

   $photos =  Gallery::findOrfail($id);

   $categoris = Category::orderBy('category_name', 'asc')->get();

    return view('backend.gallery.edit_gallery', compact('photos', 'categoris'));
}


public function UpdatePhoto(Request $request){

    $id = $request->id;

    if ($request->hasFile('images')) {

        $image = $request->file('images');

        $ext = $request->category_id . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(480, 480)->save(public_path('gallery/' . $ext));

        $old_img = Gallery::findOrfail($request->id)->images;

        if (file_exists(public_path('gallery/' . $old_img))) {
            unlink(public_path('gallery/' . $old_img));
        }


        Gallery::findOrfail($id)->update([
        
            'category_id' => $request->category_id,
            'images' => $ext,
            'updated_at' => Carbon::now(),

        ]);
    }

    else{

        Gallery::findOrfail($id)->update([
        
            'category_id' => $request->category_id,
          
            'updated_at' => Carbon::now(),

        ]);

    }

    

    return Redirect()->route('ViewPhoto')->with('success', 'Photo Updated Successfully');
}


 public function DeletePhoto($id){

    Gallery::findOrfail($id)->delete();

    return back()->with('success', 'Photo Deleted Successfully');
 }


    
}
