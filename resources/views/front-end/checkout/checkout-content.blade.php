@extends('front-end.master')

@section('main-body')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Please Register to continue your shopping</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('checkout-registration')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" class="form-control" name="first_name">
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" name="last_name">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email_address">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="phone_no">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-md-5">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Please Login to continue your shopping</h3>
                    <h4 class="text-danger">{{Session::get('message')}}</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('checkout-login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email_address">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection