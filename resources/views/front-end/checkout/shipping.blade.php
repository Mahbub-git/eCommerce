@extends('front-end.master')

@section('main-body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3>Dear {{Session::get('customerName')}}, Please Give your shipping info!</h3>
                        <small class="text-danger">* If shipping address is different please feel free to edit the address</small>
                    </div>
                    <div class="card-body">
                        <form action="{{route('checkout-shipping')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Full name</label>
                                <input type="text" class="form-control" name="full_name" value="{{$customerId->first_name.' '.$customerId->last_name}}">
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="email_address" value="{{$customerId->email_address}}">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phone_no" value="{{$customerId->phone_no}}">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="{{$customerId->address}}">
                            </div>

                            <button type="submit" class="btn btn-primary">Save Shipping Info</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection