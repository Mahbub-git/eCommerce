<div class="modal fade" id="editModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('category-update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" value="{{$category->cat_name}}" name="cat_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name">
                        <input type="hidden" value="{{$category->id}}" name="id" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category Description</label>
                        <textarea class="form-control" name="cat_desc" id="exampleInputPassword1" placeholder="Enter Category Description">{{$category->cat_desc}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Image</label>
                        <input type="file" name="cat_image" class="form-control-file" onchange="loadFile(event)">
                        <img id="output" src="{{asset($category->cat_image)}}"/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Publication Status</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                            <option>Select</option>
                            <option value="1" {{$category->status==1?'Selected':''}}>Published</option>
                            <option value="0" {{$category->status==0?'Selected':''}}>Unpublished</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>