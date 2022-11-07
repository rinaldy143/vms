@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container">
        {{-- <div class="text-black fw-bolder fs-2 mb-2 mt-5">Users</div> --}}
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-black fw-bolder heading-3 fs-2 mb-2 mt-5">History </div>
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
            <div class="container px-0">
                <div class="navbar-collapse" style="justify-content: space-between">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item px-2">
                            <a class="nav-link fw-bolder" style="color: red; border-bottom-width: 1px; border-bottom-style: solid" href="#">Maintenance</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fw-bolder" href="#">Sparepart</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->


                </div>
            </div>
        </nav>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="card w-100 mt-8">
            <div class="card-body">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container px-0 py-5">
                        <div class="navbar-collapse" style="justify-content: space-between">
                            <!-- Left Side Of Navbar -->
                            <div class="card-title">
                                <!--begin::Search-->
                                <button type="button" class="btn btn-danger me-3 py-3 font-weight-bolder " style="border-radius: 8px;">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                    <!--end::Svg Icon-->Today
                                </button>
                                <button type="button" class="btn me-3 py-3 font-weight-bolder " style="border-radius: 8px;">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                    <!--end::Svg Icon-->Weekly
                                </button>
                                <button type="button" class="btn me-3 py-3 font-weight-bolder " style="border-radius: 8px;">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                    <!--end::Svg Icon-->Monthly
                                </button>
                                <!--end::Search-->
                            </div>

                            <!-- Right Side Of Navbar -->
                            <div class="card-title">
                                <!--begin::Search-->
                                <button type="button" class="btn me-3 border" style="border-radius: 8px">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                    <img src="img/Download.png" alt="">
                                    <!--end::Svg Icon--> <strong>Export</strong>
                                </button>

                                <!--end::Search-->
                            </div>

                        </div>
                    </div>
                </nav>
                <div class="d-flex flex-row-fluid mt-10">
                    <div class="col-lg-2 subtitle-1">
                        No RM
                    </div>
                    <div class="col-lg-3 subtitle-1">
                        Vehicle
                    </div>
                    <div class="col-lg-2 subtitle-1">
                        Mechanice
                    </div>
                    <div class="col-lg-3 subtitle-1">
                        Date
                    </div>

                </div>
                <div class="scroll">
                    <div class="d-flex flex-row-fluid mt-6">
                        <div class="col-lg-2 subtitle-1 fw-bold">
                            RM-01
                        </div>
                        <div class="col-lg-3 subtitle-1">
                            <div class="d-flex flex-row-fluid">
                                <img src="img/image 1.png" alt="">
                                <div class="" style="margin-left: 15px;">
                                    <p class="m-0">D 1123 ABC</p>
                                    <p class="m-0 fw-normal">Grand Max</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 body-1">
                            <img src="img/Frame 1676.png" alt="">
                        </div>
                        <div class="col-lg-3 body-1">
                            28/08/2022
                        </div>
                        <div class=" col-lg-1" >
                            <a class="fs-4" style="color: #6E6666" href="#">Detail <img src="assets/media/icons/system-icon/outline/Arrow - Right.svg" alt="" >
                            </a>

                        </div>
                    </div>
                    <div class="d-flex flex-row-fluid mt-6">
                        <div class="col-lg-2 subtitle-1 fw-bold">
                            RM-01
                        </div>
                        <div class="col-lg-3 subtitle-1">
                            <div class="d-flex flex-row-fluid">
                                <img src="img/image 1.png" alt="">
                                <div class="" style="margin-left: 15px;">
                                    <p class="m-0">D 1123 ABC</p>
                                    <p class="m-0 fw-normal">Grand Max</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 body-1">
                            <img src="img/Frame 1676.png" alt="">
                        </div>
                        <div class="col-lg-3 body-1">
                            28/08/2022
                        </div>
                        <div class=" col-lg-1" >
                            <a class="fs-4" style="color: #6E6666" href="#">Detail <img src="assets/media/icons/system-icon/outline/Arrow - Right.svg" alt="" >
                            </a>

                        </div>
                    </div>
                    <div class="d-flex flex-row-fluid mt-6">
                        <div class="col-lg-2 subtitle-1 fw-bold">
                            RM-01
                        </div>
                        <div class="col-lg-3 subtitle-1">
                            <div class="d-flex flex-row-fluid">
                                <img src="img/image 1.png" alt="">
                                <div class="" style="margin-left: 15px;">
                                    <p class="m-0">D 1123 ABC</p>
                                    <p class="m-0 fw-normal">Grand Max</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 body-1">
                            <img src="img/Frame 1676.png" alt="">
                        </div>
                        <div class="col-lg-3 body-1">
                            28/08/2022
                        </div>
                        <div class=" col-lg-1" >
                            <a class="fs-4" style="color: #6E6666" href="#">Detail <img src="assets/media/icons/system-icon/outline/Arrow - Right.svg" alt="" >
                            </a>

                        </div>
                    </div>
                    <div class="d-flex flex-row-fluid mt-6">
                        <div class="col-lg-2 subtitle-1 fw-bold">
                            RM-01
                        </div>
                        <div class="col-lg-3 subtitle-1">
                            <div class="d-flex flex-row-fluid">
                                <img src="img/image 1.png" alt="">
                                <div class="" style="margin-left: 15px;">
                                    <p class="m-0">D 1123 ABC</p>
                                    <p class="m-0 fw-normal">Grand Max</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 body-1">
                            <img src="img/Frame 1676.png" alt="">
                        </div>
                        <div class="col-lg-3 body-1">
                            28/08/2022
                        </div>
                        <div class=" col-lg-1" >
                            <a class="fs-4" style="color: #6E6666" href="#">Detail <img src="assets/media/icons/system-icon/outline/Arrow - Right.svg" alt="" >
                            </a>

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
