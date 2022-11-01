@extends('layouts.auth')
@section('content')
<div class="content">
    <a href="/" style="z-index: 100">
        <div class="d-flex align-items-center position-absolute subtitle-1 p-2">
            <span style="margin-left: 57.75px"><img src="/assets/media/icons/system-icon/outline/Arrow - left.svg" alt=""></span>
            Back to Login
        </div>
    </a>
    <div class="row">
        <div class="justify-content-center align-items-center m-0 p-0">
            <div class="w-lg-400px mx-auto">
                <div class="text-center heading-3">Forget Password</div>
                <div class="w-lg-400px body-1 text-center" style="margin-top: 16px">Enter the registered email or number phone. We will send you a verification code to reset your password</div>
                <label class="subtitle-1" style="margin-top: 40px" for="">Email <span style="color: red">*</span></label>
                <input type="email" class="w-lg-400px form-control mb-5 mx-auto" style="margin-top: 8px" name="" id="" placeholder="Johnpantau@example.com">
                <div class="text-center" style="margin-top: 40px">
                    <button class="w-lg-400px btn btn-danger">Send Password</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
