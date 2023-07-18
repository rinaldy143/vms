@extends('layouts.submaster')

@section('content')
<div class="content">
    <div class="d-flex align-items-center position-absolute subtitle-1 p-2">
            <a href="/dashboard" style="z-index: 100" class="subtitle-1">
            <span style="margin-left: 57.75px"><img src="/assets/media/icons/system-icon/outline/Arrow - left.svg" alt=""></span>
            Back
        </a>
    </div>
    <div class="d-flex position-relative justify-content-center m-0 p-0 heading-3">Account Setting</div>
    <div class="d-flex justify-content-center" style="margin-top: 40px">
        <div class="col-lg-3 col-md-6 col-11 pb-5" style="width: 326px">
            <div class="card drop-shadow border border-secondary align-items-center">
                {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                <div class="pt-10">
                    {{-- <a class="download round m-lg-3" title="" data-toggle="modal" href="#modalUpdate">
                        <img src="img/kebab.png" alt="download" title="download"
                            style="right: 20px;position: absolute;" />
                    </a> --}}
                    @if(auth()->user()->photo == "")
                    <img class="bd-placeholder-img rounded-circle border mt-5"  width="100px" height="100px" src="/img/Ellipse 44.png" alt="">
                    @else
                    <img class="bd-placeholder-img rounded-circle border mt-5"  width="100px" height="100px" src="/img/users/{{auth()->user()->photo}}" alt="">
                    @endif
                    {{-- <img class="d-flex bd-placeholder-img rounded-circle border justify-content-center" width="80px" height="80px" src="/img/users/" alt=""> --}}
                </div>
                <div class="card-body">
                    <h2 class="card-text text-color-dark font-weight-bold text-3 pb-1 mb-4 px-10 text-truncate text-center">{{auth()->user()->name}}
                    </h2>
                    <p class="text-center pb-5" style="line-height: 0%"><a href="">{{auth()->user()->role}}</a></p>
                    <p class="text-center m-0"><img src="img/call.png" alt="">{{auth()->user()->phone_number}}</p>
                    <p class="text-center" style="line-height: 0%; margin-bottom: 48px"><img src="img/Message.png" alt=""> {{auth()->user()->email}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mb-5">
        {{-- <div class="btn btn-outline-danger" style="width: 326px" data-toggle="modal" href="#modalPassword">Change Password</div> --}}
    </div>
    <div class="d-flex justify-content-center">
        <a class="btn btn-danger" style="width: 326px" href="{{ route('logout') }}">Logout</a>
    </div>
</div>
<!--begin::Modal-->
<!--begin::Modal Update User-->
<div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="modalChangePassword" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content m-lg-10 p-3">
                <div class="modal-header">
                    <div class="heading-3 m-0" id="exampleModalLongTitle">Update User</div>
                    <button type="button" class="close-share border-0" style="background-color: transparent" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mb-3 mb-lg-0 col-lg-12">
                                <label for="Name" class="subtitle-1 mt-4">
                                    {{__('Name')}}
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="field-input py-5">
                                    <input type="text" id="Name" name="Name" class="form-control" placeholder="Ex. John" maxlength="200" value={{old('Identity_Sparepart')}}>
                                    @error('Identity_Sparepart')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3 mb-lg-0 col-lg-12">
                                <label for="Email" class="subtitle-1 mt-4">
                                    {{__('Email')}}
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="field-input py-5">
                                    <input type="text" id="Email" name="Email" class="form-control" placeholder="Ex. Johnpantau@example.com" maxlength="200" value={{old('Email')}}>
                                    @error('Email')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3 mb-lg-0 col-lg-12">
                                <label for="No_Handphone" class="subtitle-1 mt-4">
                                    {{__('No Handphone')}}
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="field-input py-5">
                                    <div class="d-flex">
                                        <select class="form-select w-25" aria-label="Default select example">
                                            <option selected>+62</option>
                                            <option value="1">+63</option>
                                            <option value="2">+65</option>
                                            <option value="3">+66</option>
                                        </select>
                                        <input type="text" id="No_Handphone" name="No_Handphone" class="form-control" placeholder="892-7635-1645-18" maxlength="200" value={{old('No_Handphone')}}>
                                    </div>
                                    @error('No_Handphone')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3 mb-lg-0 col-lg-12">
                                <label for="Role" class="subtitle-1 mt-4 mb-5">
                                    {{__('Role')}}
                                    <span class="text-danger">*</span>
                                </label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Operation</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group d-flex align-items-center py-5">
                                <div>
                                    <div class="subtitle-1">Upload Photo</div>
                                    <label for="image" id="labelImg"
                                        class="font-weight-bold text-black m-0 border p-5">
                                        <img class="py-5 px-10" src="/assets/media/icons/system-icon/outline/Camera.svg" width="120px">
                                        <p class="fs-3">Upload Photo</p>
                                    </label>
                                    <img class="img-preview img-fluid mb-3 col-sm-5 d-block w-75" src="" alt="">
                                        <input type="file" src="/assets/media/icons/system-icon/outline/Edit Square.svg" class="form-control-file"
                                        id="image" name="image" style="display: none" multiple onchange="previewImage()" onclick="document.getElementById('labelImg').style.display = 'none'">
                                </div>
                                <div class="h-50">
                                    <div class="fw-bolder fs-3" id="list_file"></div>
                                    <div id="size_file"></div>
                                </div>
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0" style="flex-wrap: nowrap;">
                    <div class="col-md-6 text-center">
                        <button class="btn btn-danger text-3 rounded-8 w-75 p-md-3 h-100" type="submit" id="downloadWp" name="downloadWp">
                            Update
                        </button>
                    </div>
                    <div class="col-md-6 text-center">
                        <button type="reset" class="btn border border-danger text-danger text-3 rounded-8 w-75 p-md-3 h-100 close-share" data-dismiss="modal" aria-label="Close" id="downloadWp" name="downloadWp">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--end::Modal Update User-->
<!--begin::Modal Change Password-->
<div class="modal fade" id="modalPassword" tabindex="-1" aria-labelledby="modalChangePassword" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content m-lg-10 p-3">
                <div class="modal-header">
                    <div class="heading-3 m-0" id="exampleModalLongTitle">Change Password</div>
                    <button type="button" class="close-share border-0" style="background-color: transparent" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mb-3 mb-lg-0 col-lg-12">
                                <label for="Name" class="subtitle-1 mt-4">
                                    {{__('Last Password')}}
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="field-input py-5 relative" id="show_hide_password">
                                     <div style="position: absolute; top: 85px;padding-left: 15px">
                                        <img src="img/locked.svg" alt="">
                                    </div>
                                    <div style="position: absolute; top: 85px;right:75px;">
                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                    </div>
                                    <input type="password" id="Name" name="Name" class="form-control" style="padding-left: 55px;" placeholder="********" maxlength="200" value={{old('Identity_Sparepart')}}>
                                    @error('Identity_Sparepart')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3 mb-lg-0 col-lg-12">
                                <label for="Email" class="subtitle-1 mt-4">
                                    {{__('New Password')}}
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="field-input py-5" id="show_hide_password_new">
                                    <div style="position: absolute; top: 197px;padding-left: 15px">
                                        <img src="img/locked.svg" alt="">
                                    </div>
                                    <div style="position: absolute; top: 197px;right:75px;">
                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                    </div>
                                    <input type="password" id="Email" name="Email" class="form-control" placeholder="********" style="padding-left: 55px;" maxlength="200" value={{old('Email')}}>
                                    @error('Email')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3 mb-lg-0 col-lg-12">
                                <label for="No_Handphone" class="subtitle-1 mt-4">
                                    {{__('Confirm New Password')}}
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="field-input py-5" id="show_hide_password_confirm">
                                    <div style="position: absolute; top: 309px;padding-left: 15px">
                                        <img src="img/locked.svg" alt="">
                                    </div>
                                    <div style="position: absolute; top: 309px;right:75px;">
                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                    </div>
                                    <input type="password" id="No_Handphone" name="No_Handphone" class="form-control" placeholder="********" style="padding-left: 55px;" maxlength="200" value={{old('No_Handphone')}}>
                                    @error('No_Handphone')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0" style="flex-wrap: nowrap;">
                    <div class="col-md-6 text-center">
                        <button class="btn btn-danger text-3 rounded-8 w-75 p-md-3 h-100" type="submit" id="downloadWp" name="downloadWp">
                            Change Password
                        </button>
                    </div>
                    <div class="col-md-6 text-center">
                        <button type="reset" class="btn border border-danger text-danger text-3 rounded-8 w-75 p-md-3 h-100 close-share" data-dismiss="modal" aria-label="Close" id="downloadWp" name="downloadWp">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--end::Modal Change Password-->
<!--end::Modal-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script>

<script>
$(document).ready(function() {
    $("#show_hide_password_new a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password_new input').attr("type") == "text"){
            $('#show_hide_password_new input').attr('type', 'password');
            $('#show_hide_password_new i').addClass( "fa-eye-slash" );
            $('#show_hide_password_new i').removeClass( "fa-eye" );
        }else if($('#show_hide_password_new input').attr("type") == "password"){
            $('#show_hide_password_new input').attr('type', 'text');
            $('#show_hide_password_new i').removeClass( "fa-eye-slash" );
            $('#show_hide_password_new i').addClass( "fa-eye" );
        }
    });
});
</script>

<script>
$(document).ready(function() {
    $("#show_hide_password_confirm a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password_confirm input').attr("type") == "text"){
            $('#show_hide_password_confirm input').attr('type', 'password');
            $('#show_hide_password_confirm i').addClass( "fa-eye-slash" );
            $('#show_hide_password_confirm i').removeClass( "fa-eye" );
        }else if($('#show_hide_password_confirm input').attr("type") == "password"){
            $('#show_hide_password_confirm input').attr('type', 'text');
            $('#show_hide_password_confirm i').removeClass( "fa-eye-slash" );
            $('#show_hide_password_confirm i').addClass( "fa-eye" );
        }
    });
});
</script>
@endsection
