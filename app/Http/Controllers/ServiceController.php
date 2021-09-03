<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use Carbon\Carbon;
use SoftDeletes;

class ServiceController extends Controller
{
    function AddService(){

        return view('backend.service.add_service');
    }

    function PostService(Request $request){
        Service::insert([
            'title' => $request->title,
            'des' => $request->des,
            'created_at' => Carbon::now(),
            
        ]);

        return back()->with('success', 'Services Added Successfully');
        
    }

    function ViewService(){

        $services = service::paginate();
        return view('backend.service.view_service', [ 'services' => $services]);
    }

    function DeleteService($id){
        service::findOrfail($id)->delete();

        return back()->with('success', 'Service Deleted Successfully');
        
    }

    function EditService($id){
        $service = service::findOrfail($id);
        return view('backend.service.edit_service', compact('service'));
    }

    function UpdateService(Request $request){
            service::findOrfail($request->id)->update([
                'title' => $request->title,
                'des' => $request->des,
                'updated_at' => Carbon::now()
            ]);
            
        return back()->with('success', 'Service Updated Successfully');
    }


    function TrashService(){
        $services = service::onlyTrashed()->paginate();
        return view('backend.service.trash_service', compact('services'));
    }

    
   

    
}
