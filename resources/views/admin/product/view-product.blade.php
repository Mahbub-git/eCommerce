<div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" >
                     <div class="col-md-3" style="border: 1px solid black">
                         Product name
                     </div>
                     <div class="col-md-9" style="border: 1px solid black">
                         {{$product->product_name}}
                     </div>
                </div>
                <div class="row" >
                     <div class="col-md-3" style="border: 1px solid black">
                         Product Category
                     </div>
                     <div class="col-md-9" style="border: 1px solid black">
                         {{--@foreach(json_decode($product->cat_id) as $cat)--}}
                             {{--{{$cat}},--}}
                         {{--@endforeach--}}
                     </div>
                </div>
                <div class="row" >
                    <div class="col-md-3" style="border: 1px solid black">
                        Product Brand
                    </div>
                    <div class="col-md-9" style="border: 1px solid black">
                        {{$product->brand_name}}
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-3" style="border: 1px solid black">
                        Product Short Descript
                    </div>
                    <div class="col-md-9" style="border: 1px solid black">
                        {{$product->short_desc}}
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-3" style="border: 1px solid black">
                        Product Long Description
                    </div>
                    <div class="col-md-9" style="border: 1px solid black">
                        {!! $product->long_desc !!}
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-3" style="border: 1px solid black">
                        Product Price
                    </div>
                    <div class="col-md-9" style="border: 1px solid black">
                        {{$product->product_price}}
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-3" style="border: 1px solid black">
                        Product Discount Price
                    </div>
                    <div class="col-md-9" style="border: 1px solid black">
                        {{$product->discount_price}}
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-3" style="border: 1px solid black">
                        Product Image
                    </div>
                    <div class="col-md-9" style="border: 1px solid black">
                        <img src="{{asset($product->product_image)}}">
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-3" style="border: 1px solid black">
                        Product Image Gallery
                    </div>
                    <div class="col-md-9" style="border: 1px solid black">
                        {{--@foreach(json_decode($product->multiple_image) as $image)--}}
                            {{--<img src="{{asset($image)}}" width="100">--}}
                        {{--@endforeach--}}
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

