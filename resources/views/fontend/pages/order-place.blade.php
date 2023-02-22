@extends('fontend.layouts.layout')
@section('content')
 
<div class="d-flex justify-content-center m-4">
    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
        <form action="{{route('user.orderplace.save')}}" method="post" >
            @csrf
            <div class="login-form">
                <h4 class="login-title"> Address From </h4>
                <div class="row ">
                    <div class="col-md-12 col-12 mb-20">
                        <label>Enter Name:</label>
                        <input class="mb-0" type="text" placeholder="Name" name="customer_name">
                    </div>
                    <div class="col-12 mb-20">
                        <label>Enter Phone Number:</label>
                        <input class="mb-0" type="text" placeholder="Phone" name="phone">
                    </div>
                    <div class="col-12 mb-20">
                        <label>Enter Address:</label>
                        <input class="mb-0" type="text" placeholder="Enter Address" name="address">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="register-button mt-0">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<div>

@endsection

