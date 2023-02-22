@extends('fontend.layouts.layout')
@section('content')
<div class="d-flex justify-content-center m-4">
    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
        <form action="{{route('reg.store')}}" method="post">
            @csrf
            <div class="login-form">
                <h4 class="login-title">Register</h4>
                <div class="row">
                    <div class="col-md-12 mb-20">
                        <label>Name</label>
                        <input class="mb-0" type="text" placeholder="First Name" name="name">
                    </div>
                    <div class="col-md-12 mb-20">
                        <label>Email Address</label>
                        <input class="mb-0" type="email" placeholder="Email Address" name="email">
                    </div>
                    <div class="col-md-12 mb-20">
                        <label>Password</label>
                        <input class="mb-0" type="password" placeholder="Password" name='password'>
                    </div>
                    <div class="col-12">
                        <button class="register-button mt-0" type="submit">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
