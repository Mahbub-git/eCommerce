<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        {{--<input type="text" name="cat_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name">--}}
                        <select class="form-control" name="cat_id[]" multiple>
                            <option>Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->cat_name}}">{{$category->cat_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Brand Name</label>
                        {{--<input type="text" name="cat_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name">--}}
                        <select class="form-control" name="brand_id">
                            <option>Select Brand</option>
                            @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product Short Description</label>
                        <textarea class="form-control" name="short_desc" id="exampleInputPassword1" placeholder="Enter Product Short Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product Long Description</label>
                        <textarea class="form-control" name="long_desc" id="editor1" placeholder="Enter Product long Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Discount Price</label>
                        <input type="text" name="discount_price" class="form-control" id="exampleInputEmail1" placeholder="Enter Discount Price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Price</label>
                        <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Price">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Quantity</label>
                        <input type="text" name="product_qty" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Quantity">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Size</label>
                        <select class="form-control" name="product_size">
                            <option>Select Product Size</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="Xl">Xl</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Image</label>
                        <input type="file" name="product_image" class="form-control-file" onchange="loadFile(event)">
                        <img id="output" src="" width="200"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Multiple Image</label>
                        <input type="file" name="multiple_image[]" multiple class="form-control-file" onchange="loadFile(event)">
                        <img id="output" src="" width="200"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Publication Status</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                            <option>Select</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

