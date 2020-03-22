@extends('admin.master')

@section('body')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            @if(Session::get('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{Session::get('message')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Brand</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <span class="h4">Brand List</span>
                        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Brand Name</th>
                                    <th>Brand Description</th>
                                    <th>Brand Image</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                                @foreach($brands as $brand)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$brand->brand_name}}</td>
                                    <td width='250'>{{$brand->brand_desc}}</td>
                                    <td><img src="{{asset($brand->brand_image)}}" height="100px" width="150"></td>
                                    <td>{{$brand->status==1 ? 'Published':'Unpublished'}}</td>
                                    <td>
                                        @if($brand->status==1)
                                        <a href="{{route('unpub-brand',['id'=>$brand->id])}}" class="btn btn-primary">
                                            <span><i class="fa fa-arrow-up"></i></span>
                                        </a>
                                        @else
                                        <a href="{{route('pub-brand',['id'=>$brand->id])}}" class="btn btn-warning">
                                            <span><i class="fa fa-arrow-down"></i></span>
                                        </a>
                                        @endif
                                        <a href="#exampleModal{{$brand->id}}" class="btn btn-success" data-toggle="modal">
                                            <span><i class="fa fa-edit"></i></span>
                                        </a>
                                       
                                       <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" onclick="return confirm('Are you sure want to delete this post?');" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>

                                @include('admin.brand.edit-brand')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
</div>



@include('admin.brand.add-brand')
@endsection