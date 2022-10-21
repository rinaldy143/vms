@extends('layouts.auth')
@section('content')
<div class="content">
    <div class="row">
        <div class="d-flex justify-content-start">
            <a class="btn" href="/login" > < Back to Login</a>
        </div>
    </div>
    <div class="row">
        <div class="justify-content-center align-items-center">
            <div class="w-lg-400px mx-auto">
                <h1 class="text-center">Forget Password</h1>
                <p class="w-lg-400px text-center">Enter the registered email or number phone. We will send you a verification code to reset your password</p>
                <label class="form-label fs-6 fw-bolder text-dark" for="">Email *</label>
                <input type="email" class="w-lg-400px form-control mb-5 mx-auto" name="" id="" placeholder="Johnpantau@example.com">
                <div class="text-center">
                    <button class="w-lg-400px btn btn-danger">Send Password</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
