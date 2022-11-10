@extends('layouts.master')

@section('content')
<div class="content" >
    <div class="container">
        {{-- <div class="text-black fw-bolder fs-2 mb-2 mt-5">Users</div> --}}
        <!--begin::Row-->
        <div class="d-flex">
            {{-- <div class="text-black fw-bolder heading-3 fs-2 mb-2 mt-5">Vehicles </div> --}}
            <div class="d-flex flex-column flex-xl-row px-5" >
                {{-- <div class="text-black fw-bolder heading-3 fs-2 mb-2 mt-5">Vehicles </div> --}}

                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                    <!--begin::Card-->
                    <div class="text-black fw-bolder heading-3 fs-2 mb-2 ">Vehicle </div>

                    <!--end::Card-->
                    <!--begin::Connected Accounts-->
                    <div class="mb-5 mb-xl-8">
                        <!--begin::Card header-->
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="pt-2 ">
                            <div class="d-flex align-items-center py-8">
                                <a href="#" class="btn btn-danger px-4 w-100 "><img src="assets/media/icons/system-icon/outline/Plus-3.svg" alt="">Add Vehicle/Trailer</a>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="btn  pe-20" style="background-color: #fff"><img src="assets/media/icons/system-icon/outline/Swap-1.svg" alt=""> Syncronize Vehicles</a>
                                <a href="#" class="btn  px-4" style="background-color: #fff"><img src="assets/media/icons/system-icon/outline/Setting.svg" alt=""></a>
                            </div>

                            <div class="separator separator-dashed my-5"></div>
                            <!--begin::Notice-->
                            <div class="d-flex align-items-center position-relative my-1 pt-6">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="position-absolute ms-6">
                                    <img src="img/Search.png" alt="">
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-customer-table-filter="search"
                                    class="form-control form-control-lg w-350px ps-15" placeholder="Search...">
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-8">
                                <a href="#" class="btn btn-danger w-50">Vehicle </a>
                                <a href="#" class="btn w-50"style="background-color: #fff">Trailer </a>
                            </div>
                            <!--end::Notice-->
                            <!--begin::Items-->
                            <div class="py-2">
                                <p class="pt-4 fs-4 text-muted">List Vehicle</p>
                                <!--begin::Item-->
                                <div class="d-flex flex-stack pt-3 ">
                                    <div class="d-flex w-100">

                                        <div class="d-flex flex-column w-100">
                                            <a href="#" class="fs-5 text-dark fw-bolder text-hover-primary border p-3 " style="border-radius: 8px; background-color:#fff;">D 1123 ABC</a>

                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex flex-stack pt-3 ">
                                    <div class="d-flex w-100">

                                        <div class="d-flex flex-column w-100">
                                            <a href="#" class="fs-5 text-dark fw-bolder text-hover-primary border p-3 " style="border-radius: 8px; background-color:#fff;">D 1123 ABC</a>

                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex flex-stack pt-3 ">
                                    <div class="d-flex w-100">

                                        <div class="d-flex flex-column w-100">
                                            <a href="#" class="fs-5 text-dark fw-bolder text-hover-primary border p-3 " style="border-radius: 8px; background-color:#fff;">D 1123 ABC</a>

                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex flex-stack pt-3 ">
                                    <div class="d-flex w-100">

                                        <div class="d-flex flex-column w-100">
                                            <a href="#" class="fs-5 text-dark fw-bolder text-hover-primary border p-3 " style="border-radius: 8px; background-color:#fff;">D 1123 ABC</a>

                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex flex-stack pt-3 ">
                                    <div class="d-flex w-100">

                                        <div class="d-flex flex-column w-100">
                                            <a href="#" class="fs-5 text-dark fw-bolder text-hover-primary border p-3 " style="border-radius: 8px; background-color:#fff;">D 1123 ABC</a>

                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex flex-stack pt-3 ">
                                    <div class="d-flex w-100">

                                        <div class="d-flex flex-column w-100">
                                            <a href="#" class="fs-5 text-dark fw-bolder text-hover-primary border p-3 " style="border-radius: 8px; background-color:#fff;">D 1123 ABC</a>

                                        </div>
                                    </div>

                                </div>
                                <!--end::Item-->


                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>

                    </div>
                    <!--end::Connected Accounts-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Content-->
            </div>
            <div class="flex-lg-row-fluid ms-lg-15 mb-5 mb-xl-8">
                <!--begin:::Tabs-->
                <div class="card my-5">
                    <div class="card-body pt-2">
                        <div class="d-flex justify-content-between">
                            <div class="w-75 mt-10">
                                <p>Plate Number</p>
                                <h3 class="fw-bolder heading-3 fs-1">D 1234 ABC</h3>
                                {{-- <div class="separator separator-dashed my-5"></div> --}}
                                {{-- <div class="separator separator-solid fw-bolder my-5"></div> --}}
                                <hr class="solid">
                                <div class="d-flex">
                                    <div class="col-lg-6">
                                        <p class="mb-2">Model Vehicle</p>
                                        <h4 class="fw-bold pb-5">Grand Max</h4>
                                        <p class="mb-2">Scheduling maintenance</p>
                                        <h4 class="fw-bold">20</h4>

                                    </div>
                                    <div class="col-lg-6">
                                        <p class="mb-2">Vehicle Type</p>
                                        <h4 class="fw-bold pb-5">Van</h4>
                                        <p class="mb-2">Last Maintained</p>
                                        <h4 class="fw-bold">20 May 2022</h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" alt="" style="float: right;">
                                <div class="img-fluid align-item-center mx-auto d-block">
                                    <img src="/img/Mask group.svg" alt="">
                                    <p class="text-center">Trailer Connected</p>
                                    <h3 class="text-primary text-center fs-4">T-01, T-02</h3>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>


                <div class="card w-100 mt-8">
                    <div class="card-body">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <div class="container px-0 py-5">
                                <div class="navbar-collapse" style="justify-content: space-between">
                                    <!-- Left Side Of Navbar -->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <h2>
                                            History Maintained
                                        </h2>
                                        <!--end::Search-->
                                    </div>

                                    <!-- Right Side Of Navbar -->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span class="position-absolute ms-6">
                                                <img src="img/Search.png" alt="">
                                            </span>
                                            <!--end::Svg Icon-->
                                            <input type="text" data-kt-customer-table-filter="search"
                                                class="form-control form-control-lg ps-15 mx-2" placeholder="Search...">

                                                <button type="button" class="btn border mx-2" style="border-radius: 8px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                                    <img src="img/Download.png" alt="">
                                                    <!--end::Svg Icon-->
                                                </button>
                                        </div>

                                        {{-- <button type="button" class="btn me-3 border" style="border-radius: 8px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                            <img src="img/Download.png" alt="">
                                            <!--end::Svg Icon-->
                                        </button> --}}

                                        <!--end::Search-->
                                    </div>

                                </div>
                            </div>
                        </nav>
                        <div class="d-flex flex-row-fluid mt-5">
                            <div class="col-lg-3 subtitle-1">
                                Date
                            </div>
                            <div class="col-lg-4 subtitle-1">
                                Maintentance Type
                            </div>

                        </div>
                        <hr class="solid">
                        <div class="scroll">
                            <div class="d-flex flex-row-fluid mt-6">
                                <div class="col-lg-3 col-md-3 subtitle-1 fw-bold">
                                    20 May 2022
                                </div>
                                <div class="col-lg-4 col-md-4 subtitle-1">
                                    Maintenance
                                </div>
                                <div class=" col-lg-5 col-md-5" style="text-align: right" >
                                    <a class="fs-4" style="color: #6E6666" href="#">Detail <img src="assets/media/icons/system-icon/outline/Arrow - Right.svg" alt="" >
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <!--begin::Sidebar-->

            <!--end::Sidebar-->
            <!--begin::Content-->


        </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->


        <!--begin::Card-->
        <!--end::Card-->


        <!--end::Row-->
    </div>

        <!--begin::Layout-->

</div>
@endsection
