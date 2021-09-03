<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    //========== ADD CATEGORY ARE HERE ====================

    public function AddCategory()
    {


        return view('backend.category.add_category');
    }



    public function PostCategory(Request $request)
    {

        Category::insert([

            'category_name' => $request->category_name,
            'created_at' => Carbon::now(),

        ]);

        return back()->with('success', 'Category Added Successfully');
    }


     //========== VIEW CATEGORY ARE HERE ====================

    public function ViewCategory()
    {

        $categoris =  Category::all();

        return view('backend.category.view_category', compact('categoris'));
    }

     //========== UPDATE CATEGORY ARE HERE ====================



    public function EditCategory($id){

        $categoris = Category::findOrfail($id)->first();

        return view('backend.category.edit_category', compact('categoris'));
    }


    public function UpdateCategory(Request $request){

        $id = $request->id;

        Category::findOrfail($id)->update([

            'category_name' => $request->category_name,
            'updated_at' => Carbon::now(),

        ]);

        return Redirect()->route('ViewCategory')->with('success', 'Category Updated Successfully');
    }
    

    public function DeleteCategory($id){

        Category::findOrfail($id)->delete();

        return back()->with('success', 'Category Updated Successfully');
    }
}
