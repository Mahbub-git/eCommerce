<div class="modal fade" id="exampleModal{{$brand->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Brand</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{Form::open(['route'=>['brands.update',$brand->id],'method'=>'PATCH','files'=> true])}}
                <div class="form-group">
                    {{Form::label('Brand Name')}}
                    {{Form::text('brand_name',$brand->brand_name,['class'=>'form-control','placeholder'=>'Enter Brand Name'])}}
                    <!--<input type='hidden' name="id" value="{{$brand->id}}">-->
                </div>
                <div class="form-group">
                    {{Form::label('Brand Description')}}
                    {{Form::textarea('brand_desc',$brand->brand_desc,['class'=>'form-control','placeholder'=>'Enter Brand Description','rows'=>3])}}
                </div>
                <div class="form-group">
                    {{Form::label('Brand Image')}}
                    {{Form::file('brand_image',['class'=>'form-control-file'])}}
                    <img src='{{$brand->brand_image}}' height="100" width='200'>
                </div>
                <div class="form-group">
                    {{Form::label('Publication Status')}}
                    <select class="form-control" id="exampleFormControlSelect1" name="status">
                        <option>Select</option>
                        <option value="1" {{$brand->status==1?'Selected':''}}>Published</option>
                        <option value="0" {{$brand->status==0?'Selected':''}}>Unpublished</option>
                    </select>
                </div>
                <div class="form-group">
                    {{Form::submit('Update Brand',['class'=>'btn btn-primary'])}}
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{Form::close()}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>