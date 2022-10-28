@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<div class="content">
    <div class="container">
        {{-- <div class="text-black fw-bolder fs-2 mb-2 mt-5">Users</div> --}}
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-black fw-bolder heading-3 fs-1 me-3">Spareparts </div>
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="position-absolute ms-6">
                        <img src="img/Search.png" alt="">
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-customer-table-filter="search"
                        class="form-control form-control-lg w-350px ps-15" placeholder="Search...">

                    <div class="px-10 btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px">
                        <img src="img/Frame 1637.png" alt="">
                    </div>
                </div>
        </div>
        <!--begin::Row-->
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container px-0 py-5">
                <div class="navbar-collapse" style="justify-content: space-between">
                    <!-- Left Side Of Navbar -->
                    <div class="card-title">
                        <!--begin::Search-->
                        <button type="button" class="btn btn-danger me-3 py-2 font-weight-bolder " style="border-radius: 8px;">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <img class="pt-2" src="img/Plus.png" alt="">
                            <!--end::Svg Icon-->Restock
                        </button>
                        <button type="button" class="btn me-3 text-danger font-weight-bolder py-2" style="border: 1px solid red; border-radius: 8px;">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <img class="pt-2" src="img/Plus 1.png" alt="">
                            <!--end::Svg Icon--> Add Sparepart
                        </button>
                        <!--end::Search-->
                    </div>

                    <!-- Right Side Of Navbar -->
                    <div class="card-title">
                        <!--begin::Search-->
                        <button type="button" class="btn me-3 p-0 border" style="border-radius: 8px">
                            <ul class="menu-nav p-0 m-0">
                                <li class="menu-item dropdown ">
                                    <a class="nav-link text-dark" style="padding: 11px 11px;" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/Filter 2.png" alt=""><strong> Filter</strong>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Arrow - Up-1.svg" width="25px" alt=""> Ascending</a>
                                            <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Arrow - Down-1.svg" width="25px" alt=""> Descending</a>
                                            <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> High Stock</a>
                                            <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Low Stock</a>
                                    </div>
                                </li>
                            </ul>
                        </button>

                        <button type="button" class="btn me-3 border" style="border-radius: 8px">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <img src="img/Download.png" alt="">
                            <!--end::Svg Icon--> <strong>Export</strong>
                        </button>
                        {{-- <div class="d-flex flex-row text-left w-100 fs-xxl-3">
                            <ul class="menu-nav">
                                <li class="menu-item dropdown ">
                                    <a class="nav-link text-dark" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{__('Produk')}}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item {{ Route::is('TMS') ? 'active':'' }}"
                                            href="#">Transportation Management System</a>
                                        <a class="dropdown-item {{ Route::is('WMS') ? 'active':'' }}"
                                            href="#">Warehouse Management System</a>
                                        <a class="dropdown-item {{ Route::is('VMS') ? 'active':'' }}"
                                            href="#">Vendor Management System</a>
                                        <a class="dropdown-item {{ Route::is('SCF') ? 'active':'' }}"
                                            href="#">Supply Chain Financing</a>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}

                        <!--end::Search-->
                    </div>

                </div>
            </div>
        </nav>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row pt-5 pb-5">

            <div class="col-lg-4 col-md-6 col-11 pb-5">
                <div class="card drop-shadow align-items-start" style="border-radius: 8px;" >
                    {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                    <div class="pt-10 d-flex justify-content-between align-items-center m-0 w-100" style="padding-left: 2.5rem">
                        <p class="fw-bolder fs-4" style="display: contents">OLI</p>
                        <ul class="menu-nav">
                            <li class="menu-item dropdown ">
                                <a class="nav-link text-dark" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/kebab.png" style="padding-right: 2rem" alt="">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" width="25px" alt=""> Update</a>
                                        <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Delete</a>
                                </div>
                            </li>
                        </ul>
                        {{-- <a class="m-lg-3" style="padding-right: 2rem" href="#" title="" >
                            <img src="img/kebab.png" alt="" title=""
                                />
                        </a> --}}
                    </div>

                        <div class="d-flex align-items-center" style="padding-left: 2.5rem">
                                <img src="img/Mask group.png" alt="" title=""
                                style="" />
                                <ul class="m-0" style="list-style: none;">
                                    <li class="py-1">Identity : <strong>OL123</strong></li>
                                    <li class="py-1">Brand : <strong>TOP1</strong></li>
                                    <li class="py-1">Stock : <strong class="text-danger">7 PCS</strong></li>
                                </ul>
                        </div>
                    <div class="card-body">
                        {{-- <div class="btnset">
                            <button class="btn btn1">Button</button>
                            <button class="btn btn2">button</button>
                        </div> --}}
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-11 pb-5">
                <div class="card drop-shadow align-items-start" style="border-radius: 8px;">
                    {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                    <div class="pt-10 d-flex justify-content-between align-items-center m-0 w-100" style="padding-left: 2.5rem">
                        <p class="fw-bolder fs-4" style="display: contents">OLI</p>
                        <ul class="menu-nav">
                            <li class="menu-item dropdown ">
                                <a class="nav-link text-dark" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/kebab.png" style="padding-right: 2rem" alt="">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" width="25px" alt=""> Update</a>
                                        <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Delete</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                        <div class="d-flex align-items-center" style="padding-left: 2.5rem">
                                <img src="img/Mask group.png" alt="" title=""
                                style="" />
                                <ul class="m-0" style="list-style: none;">
                                    <li class="py-1">Identity : <strong>OL123</strong></li>
                                    <li class="py-1">Brand : <strong>TOP1</strong></li>
                                    <li class="py-1">Stock : <strong class="text-success">70 PCS</strong></li>
                                </ul>
                        </div>
                    <div class="card-body">
                        {{-- <div class="btnset">
                            <button class="btn btn1">Button</button>
                            <button class="btn btn2">button</button>
                        </div> --}}
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-11 pb-5">
                <div class="card drop-shadow align-items-start" style="border-radius: 8px;">
                    {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                    <div class="pt-10 d-flex justify-content-between align-items-center m-0 w-100" style="padding-left: 2.5rem">
                        <p class="fw-bolder fs-4" style="display: contents">OLI</p>
                        <ul class="menu-nav">
                            <li class="menu-item dropdown ">
                                <a class="nav-link text-dark" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/kebab.png" style="padding-right: 2rem" alt="">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" width="25px" alt=""> Update</a>
                                        <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Delete</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                        <div class="d-flex align-items-center" style="padding-left: 2.5rem">
                                <img src="img/Mask group.png" alt="" title=""
                                style="" />
                                <ul class="m-0" style="list-style: none;">
                                    <li class="py-1">Identity : <strong>OL123</strong></li>
                                    <li class="py-1">Brand : <strong>TOP1</strong></li>
                                    <li class="py-1">Stock : <strong class="text-danger">7 PCS</strong></li>
                                </ul>
                        </div>
                    <div class="card-body">
                        {{-- <div class="btnset">
                            <button class="btn btn1">Button</button>
                            <button class="btn btn2">button</button>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
        <!--begin::Card-->

        <!--end::Card-->

        <!--end::Row-->
    </div></div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
@endsection
