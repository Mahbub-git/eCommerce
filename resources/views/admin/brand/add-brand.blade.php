<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{Form::open(['url'=>'brands','method'=>'post','files'=> true])}}
                    <div class="form-group">
                        {{Form::label('Brand Name')}}
                        {{Form::text('brand_name','',['class'=>'form-control','placeholder'=>'Enter Brand Name'])}}

                    </div>
                    <div class="form-group">
                        {{Form::label('Brand Description')}}
                        {{Form::textarea('brand_desc','',['class'=>'form-control','placeholder'=>'Enter Brand Description','rows'=>3])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('Brand Image')}}
                        {{Form::file('brand_image',['class'=>'form-control-file'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('Publication Status')}}
                        {{Form::select('status',['1'=>'Published','0'=>'Unpublished'],null,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::submit('Add Brand',['class'=>'btn btn-primary'])}}
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