<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    //======= ADD TEAM ARE HERE ==============



    public function AddTeam(){



        return view('backend.OurTeam.add_team');
    }


    public function PostTeam(Request $request){

        $request->validate([
            'name' => ['required'],
            'title' => ['required'],
            'images' => ['required'],
          

        ]);


        if ($request->hasFile('images')) {

            $image = $request->file('images');

            $ext = $request->name . '-' . Str::lower(Str::random(3)) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(360, 310)->save(public_path('team/' . $ext));
            
            OurTeam::insert([

                'name' => $request->name,
                'title' => $request->title,
                'images' => $ext,
                'created_at' => Carbon::now(),

            ]);

        

        }

        return back()->with('success', 'Team Added Successfully');
    }


    //===================== VIEW TEAM ARE HERE ====================

    public function ViewTeam(){

        $teams = OurTeam::all();


        return view('backend.OurTeam.view_team', compact('teams'));
    }

    //============== DELETE TEAM =================================

    public function DeleteTeam($id){

        OurTeam::findOrfail($id)->delete();

        return back()->with('success', 'Team Deleted Successfully');
    }

}
