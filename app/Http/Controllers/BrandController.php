<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $brands = Brand::all();
        return view('admin.brand.brand', ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return 'Hellow';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validateBrand($request) {
        $this->validate($request, [
            'brand_name' => 'required',
            'brand_desc' => 'required',
            'brand_image' => 'required|image',
            'status' => 'required'
        ]);
    }

    public function store(Request $request) {
        $this->validateBrand($request);
        $brandImage = $request->file('brand_image');
        $imageName = $brandImage->getClientOriginalName();
        $directory = 'admin/brand-images/';
        $imageUrl = $directory . $imageName;
        $brandImage->move($directory, $imageName);


        $brand = new Brand();

        $brand->brand_name = $request->brand_name;
        $brand->brand_desc = $request->brand_desc;
        $brand->brand_image = $imageUrl;
        $brand->status = $request->status;
        $brand->save();
        return redirect()->back()->with('message', 'Brand Added Successfully');
    }

    public function unpublishedBrand($id) {
        $brand = Brand::find($id);
        $brand->status = 0;
        $brand->save();
        return redirect()->back()->with('message', 'Brand Unpublished Successfully');
    }

    public function publishedBrand($id) {
        $brand = Brand::find($id);
        $brand->status = 1;
        $brand->save();
        return redirect()->back()->with('message', 'Brand Published Successfully');
    }

    public function show($id) {
        //return 'hi'.$id;
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        $brand = Brand::find($id);
        $brandImage = $request->file('brand_image');
        if ($brandImage) {
            unlink($brand->brand_image);
            $imageName = $brandImage->getClientOriginalName();
            $directory = 'admin/brand-images/';
            $imageUrl = $directory . $imageName;
            $brandImage->move($directory, $imageName);

            $brand->brand_name = $request->brand_name;
            $brand->brand_desc = $request->brand_desc;
            $brand->brand_image = $imageUrl;
            $brand->status = $request->status;
            $brand->save();
        } else {
            $brand->brand_name = $request->brand_name;
            $brand->brand_desc = $request->brand_desc;
            $brand->status = $request->status;
            $brand->save();
        }

        return redirect()->back()->with('message', 'Brand Updated Successfully');
    }

    public function destroy($id) {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->back()->with('message', 'Brand Deleted Successfully');
    }

}
