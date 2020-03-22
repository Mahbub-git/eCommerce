<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('public.master');
    }

    public function getCategories(){
        $categories = Category::where('status',1)
                            ->orderBy('id','desc')
                            ->skip(1)
                            ->take(4)
                            ->get();
        return response()->json([
            'categories' => $categories
        ]);
    }

    public function featuredProducts(){
        $featured = Product::take(3)->get();
        return response()->json([
            'featured' => $featured
        ]);
    }
    public function newProducts(){
//        $newProducts = Product::take(4)->orderBy('id','desc')->get();
        $newProducts = Product::all()->random(4);
        return response()->json([
            'newProducts' => $newProducts
        ]);
    }
    public function getProductsbyCatId($id){
        $catProducts = DB::table('products')
                        ->join('categories','categories.id','=','products.cat_id')
                        ->where('cat_id',$id)
                        ->get();
        //return $catProducts;
        return response()->json([
            'catProducts' => $catProducts
        ]);
    }
    public function getProductbyId($id){
//        $catProducts = DB::table('products')
//                        ->join('categories','categories.id','=','products.cat_id')
//                        ->where('cat_id',$id)
//                        ->get();
        $singleProduct = Product::find($id);
//       return $singleProduct;
        return response()->json([
            'singleProduct' => $singleProduct
        ]);
    }
}
