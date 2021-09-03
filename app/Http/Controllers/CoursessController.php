<?php

namespace App\Http\Controllers;

use App\Models\Coursess;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class CoursessController extends Controller
{
    //==== Add couresss are here =====

    public function AddCoursess()
    {


        return view('backend.coursess.add_coursess');
    }

    public function PostCoursess(Request $request)
    {

        $request->validate([

            'coursess_img' => 'required',
            'coursess_name' => 'required',
            'instractor_img' => 'required',

        ]);

        if ($request->hasFile('coursess_img', 'instractor_img')) {

            $image = $request->file('coursess_img');

            // Coursse images

            $ext = $request->coursess_name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(360, 310)->save(public_path('coursess/' . $ext));

            // instractor images

            $instractor_image = $request->file('instractor_img');

            $ins_img = $request->coursess_name . '-' . Str::lower(Str::random(3)) . '.' . $instractor_image->getClientOriginalExtension();

            Image::make($instractor_image)->resize(60, 60)->save(public_path('coursess/' . $ins_img));


            Coursess::insert([

                'coursess_name' => $request->coursess_name,
                'instractor_name' => $request->instractor_name,
                'coursess_img' =>  $ext,
                'instractor_img' =>   $ins_img,
                'created_at' => Carbon::now(),

            ]);
        }

        return back()->with('success', 'Coursess Added Successfully');
    }

    // ============== View Couress =======

    public function ViewCoursess()
    {

        $populler_coursess =  Coursess::all();

        return view('backend.coursess.view_coursess', compact('populler_coursess'));
    }

       // ============== DELETE COURSESS ======================


    public function DeleteCoursess($id){

        Coursess::findOrfail($id)->delete();

        return back()->with('success', 'Coursess Deleted Successfully');
    
    }

    // ============== UPDATE COURSESS ======================

    public function EditCoursess($id)
    {

        $coursess = Coursess::findOrfail($id)->first();

        return view('backend.coursess.edit_coursess', compact('coursess'));
    }

    public function UpdateCoursess(Request $request)
    {

   
        $id = $request->id;

        if ($request->hasFile('coursess_img', 'instractor_img')) {

            $image = $request->file('coursess_img');

            // Coursse images

            $ext = $request->coursess_name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(360, 310)->save(public_path('coursess/' . $ext));

            $old_img = Coursess::findOrfail($request->id)->coursess_img;

            if (file_exists(public_path('coursess/' . $old_img))) {
                unlink(public_path('coursess/' . $old_img));
            }

            // instractor images

            $instractor_image = $request->file('instractor_img');

            $ins_img = $request->coursess_name . '-' . Str::lower(Str::random(3)) . '.' . $instractor_image->getClientOriginalExtension();

            Image::make($instractor_image)->resize(60, 60)->save(public_path('coursess/' . $ins_img));

            $another_old_img = Coursess::findOrfail($request->id)->instractor_img;

            if (file_exists(public_path('coursess/' . $another_old_img))) {
                unlink(public_path('coursess/' . $another_old_img));
            }


            Coursess::findOrfail($id)->update([

                'coursess_name' => $request->coursess_name,
                'coursess_img' =>  $ext,
                'instractor_img' =>   $ins_img,
                'updated_at' => Carbon::now(),

            ]);


        } 
        else {
            Coursess::findOrfail($id)->update([

                'coursess_name' => $request->coursess_name,

                'updated_at' => Carbon::now(),

            ]);
        }


        return back()->with('success', 'Coursess Updated Successfully');
    }
}
