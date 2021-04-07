<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AdminProductController extends Controller
{
    public function all_products(){
        
        $products = Product::all();
        //return response()->json($category);
        return view('backend.pages.products',['products'=> $products ]);
    }
    public function add_product(){
        $category = Category::all();
        return view('backend.pages.add_product',['category'=>$category]);
    }
    public function save_product(Request $request){
        //dd($request->all());
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
        ],
        [
            'category_id.required' => 'Select the category!!',
            'name.required' => 'Product name is required!!'
        ]);
        $imageName = '';
        if($request->has('product_pic')) {
            $imageName = time().'.'.$request->product_pic->extension();  
            $request->product_pic->move(public_path('images'), $imageName);
        }
  
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->cat_id = $request->category_id;
        $product->brand_id = 1;
        $product->image = $imageName;
        $product->save();
        return redirect()->route('admin.products')->with('success', 'Product saved successfully.');
    }

    public function edit_product($id){
        $product = Product::where('id', $id)->first();
        $category = Category::all();
        //return response()->json($category);
        return view('backend.pages.edit_product',['product'=>$product,'category'=>$category]);
    }

    public function update_product(Request $request){

        $product = Product::find($request->id);
        $imageName = $product->image;
        if($request->has('product_pic')) {
            $imageName = time().'.'.$request->product_pic->extension();  
            $request->product_pic->move(public_path('images'), $imageName);
        }
        
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->cat_id = $request->category_id;
        $product->brand_id = 1;
        $product->image = $imageName;
        $product->save();
        return redirect()->route('admin.products')->with('success','Product has been updated!!');
    }

    public function delete_product($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.products')->with('success','Product has been deleted!!');;
    }
}
