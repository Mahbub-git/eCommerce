<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Image;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('status',1)->get();
        $brands = Brand::where('status',1)->select('id','brand_name')->get();
//        $products = Product::all();
        $products = DB::table('products')
                                ->join('brands','brands.id','=','products.brand_id')
                                ->join('categories','categories.id','=','products.cat_id')
                                ->join('users','users.id','=','products.user_id')
                                ->select('products.*','brands.brand_name','categories.cat_name','users.name')
                                ->get();
//        return $products;

        return view('admin.product.product',[
            'categories' => $categories,
            'brands' => $brands,
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productName = $request->product_name;

        $productImage = $request->file('product_image');
        $ext = '.'.$request->product_image->getClientOriginalExtension();
        $imageName = str_replace($ext, $productName.date('d-m-Y-h-m').$ext,$request->product_image->getClientOriginalName());
        $directory = 'admin/product-images/main/';
        $imageUrl = $directory . $imageName;
        Image::make($productImage)->resize(300,300)->save($imageUrl);

        foreach ($request->file('multiple_image') as $image){
            $imageName = $image->getClientOriginalName();
            $directory = 'admin/product-images/gallery/';
            $imageUrl = $directory.$imageName;
            Image::make($image)->resize(300,300)->save($imageUrl);
            $data[] = $imageUrl;
        }

        $product = new Product();
        $product->product_name = $request->product_name;
        foreach ($request->cat_id as $cat){
            $data2[] = $cat;
        }
        $product->cat_id = json_encode($data2);
        $product->brand_id = $request->brand_id;
        $product->short_desc = $request->short_desc;
        $product->long_desc = $request->long_desc;
        $product->discount_price = $request->discount_price;
        $product->product_price = $request->product_price;
        $product->product_qty = $request->product_qty;
        $product->product_size = $request->product_size;
        $product->product_image = $imageUrl;
        $product->multiple_image = json_encode($data);
        $product->status = $request->status;
        $product->save();

        return back()->with('message','Product Added Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
