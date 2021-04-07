<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AdminCategoriesController extends Controller
{
    public function all_categories(){
        
        $categories = Category::all();
        //return response()->json($category);
        return view('backend.pages.categories',['categories'=> $categories ]);
    }
    public function add_category(){
        return view('backend.pages.add_category');
    }
    public function save_category(Request $request){
        //dd($request->all());
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->route('admin.categories');
    }

    public function edit_category($id){
        $category = Category::where('id', $id)->first();
        //return response()->json($category);
        return view('backend.pages.edit_category',['category'=>$category]);
    }

    public function update_category(Request $request){

        $category = Category::find($request->id);
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->route('admin.categories');
    }

    public function delete_category($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.categories');
    }
}
