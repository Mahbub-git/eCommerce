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
                        <h1>Orders</h1>
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
                            <span class="h4">Order List</span>
                            <a href="{{route('export')}}" class="btn btn-primary float-right">
                                <i class="fa fa-exc"></i>
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Order no.</th>
                                    <th width="200">Customer Name</th>
                                    <th>Order Total</th>
                                    <th>Order Status</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->customer->first_name.' '.$order->customer->last_name}}</td>
                                        <td>{{$order->order_total}}</td>
                                        <td>{{$order->order_status}}</td>
                                        <td>{{$order->payment_status}}</td>
                                        <td>
                                            @if($order->status==1)
                                                <a href="{{route('unpub-category',['id'=>$order->id])}}" class="btn btn-primary">
                                                    <span><i class="fa fa-arrow-up"></i></span>
                                                </a>
                                            @else
                                                <a href="{{route('pub-category',['id'=>$order->id])}}" class="btn btn-warning">
                                                    <span><i class="fa fa-arrow-down"></i></span>
                                                </a>
                                            @endif
                                            <a href="{{route('view-order-details',['id'=>$order->id])}}" class="btn btn-success">
                                                <span><i class="fa fa-search-plus"></i></span>
                                            </a>
                                            <a href="{{$order->id}}" class="btn btn-success" data-toggle="modal">
                                                <span><i class="fa fa-download"></i></span>
                                            </a>
                                            <a href="{{route('delete-category',['id'=>$order->id])}}" class="btn btn-danger">
                                                <span><i class="fa fa-trash"></i></span>
                                            </a>
                                        </td>
                                    </tr>


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



@endsection
