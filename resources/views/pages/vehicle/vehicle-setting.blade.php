@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container">
        {{-- <div class="text-black fw-bolder fs-2 mb-2 mt-5">Users</div> --}}
        <div class="d-flex align-items-center">
            <a class="col-lg-5 fw-bolder text-dark" href="/vehicles"><img src="assets/media/icons/system-icon/outline/Arrow - Left.svg" alt="">Back</a>
            <div class="col-lg-7 text-black fw-bolder heading-3 fs-2 mb-2 mt-5">Setting Vehicle Type </div>
        </div>
        <!--begin::Row-->
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container px-0">
                <div class="navbar-collapse" style="justify-content: space-between">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item px-2">
                            <a class="nav-link fw-bolder" style="color: red; border-bottom-width: 1px; border-bottom-style: solid" href="#">Vehicle</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fw-bolder" href="#">Trailer</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->


                </div>
            </div>
        </nav>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="card w-100 my-6">
            <div class="card-body">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container px-0 py-5">
                        <div class="navbar-collapse" style="justify-content: space-between">
                            <!-- Left Side Of Navbar -->
                            <div class="card-title">
                                <!--begin::Search-->
                                <p>Vehicle Type</p>
                                <h3 class="fs-1">Cost Diesel Double (CDD)</h3>
                                <!--end::Search-->
                            </div>

                            <!-- Right Side Of Navbar -->
                            <div class="card-title">
                                <!--begin::Search-->
                                <button type="button" class="btn me-3 fw-bolder border" style="border-radius: 8px">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                    <img src="img/Download.png" alt="">
                                    <!--end::Svg Icon-->Edit
                                </button>

                                <!--end::Search-->
                            </div>

                        </div>
                    </div>
                </nav>
                <p>Vehicle Model</p>
                <div class="d-flex flex-row-fluid  mt-10">
                    <div class="col-lg-6 subtitle-1">
                        <div class="d-flex flex-row-fluid pb-10" style="align-items: center">
                            <img src="img/Mask group(1).svg" alt="">
                            <div class="" style="margin-left: 15px;">
                                <p class="m-0 ">Colt Diesel Double (CDD)</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-fluid pb-10" style="align-items: center">
                            <img src="img/Mask group-2.svg" alt="">
                            <div class="" style="margin-left: 15px;">
                                <p class="m-0 ">Colt Diesel Double (CDD) Bak</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-fluid pb-10" style="align-items: center">
                            <img src="img/Mask group-4.svg" alt="">
                            <div class="" style="margin-left: 15px;">
                                <p class="m-0 ">Colt Diesel Double (CDD) Bak Long</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-fluid pb-10" style="align-items: center">
                            <img src="img/Mask group-6.svg" alt="">
                            <div class="" style="margin-left: 15px;">
                                <p class="m-0 ">Colt Diesel Double (CDD) Box Reefer</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 subtitle-1">
                        <div class="d-flex flex-row-fluid pb-10" style="align-items: center">
                            <img src="img/Mask group-1.svg" alt="">
                            <div class="" style="margin-left: 15px;">
                                <p class="m-0 ">Colt Diesel Double (CDD) Los Bak</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-fluid pb-10" style="align-items: center">
                            <img src="img/Mask group-3.svg" alt="">
                            <div class="" style="margin-left: 15px;">
                                <p class="m-0 ">Colt Diesel Double (CDD) Long Bak</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-fluid pb-10" style="align-items: center">
                            <img src="img/Mask group-5.svg" alt="">
                            <div class="" style="margin-left: 15px;">
                                <p class="m-0 ">Colt Diesel Double (CDD) Bak Air Galon</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card w-100 my-6">
            <div class="card-body">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container px-0 py-5">
                        <div class="navbar-collapse" style="justify-content: space-between">
                            <!-- Left Side Of Navbar -->
                            <div class="card-title">
                                <!--begin::Search-->
                                <p>Vehicle Type</p>
                                <h3 class="fs-1">Van</h3>
                                <!--end::Search-->
                            </div>

                            <!-- Right Side Of Navbar -->
                            <div class="card-title">
                                <!--begin::Search-->
                                <button type="button" class="btn me-3 fw-bolder border" style="border-radius: 8px">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                    <img src="img/Download.png" alt="">
                                    <!--end::Svg Icon-->Edit
                                </button>

                                <!--end::Search-->
                            </div>

                        </div>
                    </div>
                </nav>
                <p>Vehicle Model</p>
                <div class="d-flex flex-row-fluid  my-10">
                    <div class="col-lg-6 subtitle-1">
                        <div class="d-flex flex-row-fluid pb-10" style="align-items: center">
                            <img src="img/Mask Group.svg" width="80px" alt="">
                            <div class="" style="margin-left: 15px;">
                                <p class="m-0 ">Grand Max Blind Van</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 subtitle-1">
                        <div class="d-flex flex-row-fluid pb-10" style="align-items: center">

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="card w-100 my-6">
            <div class="card-body">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container px-0 py-5">
                        <div class="navbar-collapse" style="justify-content: space-between">
                            <!-- Left Side Of Navbar -->
                            <div class="card-title">
                                <!--begin::Search-->
                                <p>Vehicle Type</p>
                                <h3 class="fs-1">Colt Diesel Engkel (CDE)</h3>
                                <!--end::Search-->
                            </div>

                            <!-- Right Side Of Navbar -->
                            <div class="card-title">
                                <!--begin::Search-->
                                <button type="button" class="btn me-3 fw-bolder border" style="border-radius: 8px">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                    <img src="img/Download.png" alt="">
                                    <!--end::Svg Icon-->Edit
                                </button>

                                <!--end::Search-->
                            </div>

                        </div>
                    </div>
                </nav>
                <p>Vehicle Model</p>
                <div class="d-flex flex-row-fluid  mt-10">
                    <div class="col-lg-6 subtitle-1">
                        <div class="d-flex flex-row-fluid pb-10" style="align-items: center">
                            <img src="img/Mask group(1).svg" alt="">
                            <div class="" style="margin-left: 15px;">
                                <p class="m-0 ">Colt Diesel Engkel (CDE) Box</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-fluid pb-10" style="align-items: center">
                            <img src="img/Mask group-2.svg" alt="">
                            <div class="" style="margin-left: 15px;">
                                <p class="m-0 ">Colt Diesel Engkel (CDE) Reefer</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 subtitle-1">
                        <div class="d-flex flex-row-fluid pb-10" style="align-items: center">
                            <img src="img/Mask group-1.svg" alt="">
                            <div class="" style="margin-left: 15px;">
                                <p class="m-0 ">Colt Diesel Engkel (CDE) Bak</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row-fluid pb-10" style="align-items: center">
                            <img src="img/Mask group-3.svg" alt="">
                            <div class="" style="margin-left: 15px;">
                                <p class="m-0 ">Colt Diesel Engkel (CDE) Los Bak</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--begin::Card-->
        <!--end::Card-->

        <!--end::Row-->
    </div>
</div>
@endsection
