@extends('admin.master')


@section('body')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                @if(Session::get('message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{Session::get('message')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>User</h1>
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
                            <span class="h4">User List</span>
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
                                    <th>User Name</th>
                                    <th>User Phone</th>
                                    <th>User Email</th>
                                    <th>User Address</th>
                                    <th>User Image</th>
                                    <th>User Role</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->address}}</td>
                                        <td><img src="{{asset($user->photo)}}" height="100px"></td>
                                        @if($user->role==1)
                                            <td>Super Admin</td>
                                        @elseif($user->role==2)
                                            <td>Admin</td>
                                        @elseif($user->role==3)
                                            <td>Vendor</td>
                                        @endif
                                        <td>{{$user->status==1 ? 'Active':'Deactive'}}</td>
                                        <td>
                                            @if($user->status==1)
                                                <a href="{{route('unpub-category',['id'=>$user->id])}}" class="btn btn-primary">
                                                    <span><i class="fa fa-arrow-up"></i></span>
                                                </a>
                                            @else
                                                <a href="{{route('pub-category',['id'=>$user->id])}}" class="btn btn-warning">
                                                    <span><i class="fa fa-arrow-down"></i></span>
                                                </a>
                                            @endif
                                            <a href="#editModal{{$user->id}}" class="btn btn-success" data-toggle="modal">
                                                <span><i class="fa fa-edit"></i></span>
                                            </a>
                                            <a href="{{route('delete-category',['id'=>$user->id])}}" class="btn btn-danger">
                                                <span><i class="fa fa-trash"></i></span>
                                            </a>
                                        </td>
                                    </tr>

                                    {{--@include('admin.category.edit-category')--}}
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



    @include('admin.user.add-user')
@endsection