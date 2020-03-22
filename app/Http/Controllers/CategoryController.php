<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.category',[
            'categories' => $categories
        ]);
    }

    public function saveCategory(Request $request){
//        Category::create($request->all());
        $categoryImage = $request->file('cat_image');
        $imageName = $categoryImage->getClientOriginalName();
        $directory = 'admin/category-images/';
        $imageUrl = $directory.$imageName;
        $categoryImage->move($directory, $imageName);


        $category = new Category();
        $category->cat_name = $request->cat_name;
        $category->cat_desc = $request->cat_desc;
        $category->cat_image = $imageUrl;
        $category->status = $request->status;
        $category->save();
//        DB::table('categories')->insert([
//            'cat_name' => $request->cat_name,
//            'cat_desc' => $request->cat_desc,
//            'cat_image' => $request->cat_image,
//            'status' => $request->status,
//        ]);

        return redirect()->back()->with('message','Category Added Successfully');
    }

    public function unpublishedCategory($id){
        $category = Category::find($id);
        $category->status = 0;
        $category->save();

        return back();
    }
    public function publishedCategory($id){
        $category = Category::find($id);
        $category->status = 1;
        $category->save();

        return back();
    }

    public function updateCategory(Request $request){
        $category = Category::find($request->id);
        $categoryImage = $request->file('cat_image');
        if($categoryImage){
            unlink($category->cat_image);

            $imageName = $categoryImage->getClientOriginalName();
            $directory = 'admin/category-images/';
            $imageUrl = $directory.$imageName;
            $categoryImage->move($directory, $imageName);

            $category->cat_name = $request->cat_name;
            $category->cat_desc = $request->cat_desc;
            $category->cat_image = $imageUrl;
            $category->status = $request->status;
            $category->save();
        } else {
            $category->cat_name = $request->cat_name;
            $category->cat_desc = $request->cat_desc;
            $category->status = $request->status;
            $category->save();
        }

        return back()->with('message','Category Updated Successfully');
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();

        return back()->with('message','Category Deleted Successfully');
    }
}







