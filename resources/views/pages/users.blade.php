@extends('layouts.master')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl">
        {{-- <div class="text-black fw-bolder fs-2 mb-2 mt-5">Users</div> --}}
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-black fw-bolder fs-2 mb-2 mt-5">Users </div>
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
                        <li class="nav-item px-2 rounded" style="background-color: red;">
                            <a class="nav-link fw-bolder" style="color: white" href="#">All</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fw-bolder" href="#">Operation</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fw-bolder" href="#">Lead Mechanice</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fw-bolder" href="#">Mechanice</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fw-bolder" href="#">Logistic</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <div class="card-title">
                        <!--begin::Search-->
                        <button type="button" class="btn me-3" style="border: 1px solid">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <img src="img/Download.png" alt="">
                            <!--end::Svg Icon-->Export
                        </button>
                        <button type="button" class="btn btn-danger me-3">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <img src="img/Add User.png" alt="">
                            <!--end::Svg Icon-->Add User
                        </button>
                        <!--end::Search-->
                    </div>

                </div>
            </div>
        </nav>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row pt-5 pb-5">

            <div class="col-lg-4 col-md-6 col-11 pb-5">
                <div class="card drop-shadow border border-secondary align-items-center">
                    {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                    <div class="pt-10 ">
                        <a class="download round m-lg-3" href="#" title="" >
                            <img src="img/kebab.png" alt="download" title="download"
                                style="right: 20px;position: absolute;" />
                        </a>
                        <img class="bd-placeholder-img rounded-circle border" width="100px" height="100px" src="img/Frame 1622.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h2 class="card-text text-color-dark font-weight-bold text-3 pb-1 mb-4 px-10 text-truncate">Johny yes papa
                        </h2>
                        <p class="text-center pb-5" style="line-height: 0%"><a href="">Operation</a></p>
                        <p class="text-center num m-0"><img src="img/call.png" alt=""> +62897635164518</p>
                        <p class="text-center email" style="line-height: 0%"><img src="img/Message.png" alt=""> Johnyyespapa@transtrack.id</p>
                        {{-- <div class="btnset">
                            <button class="btn btn1">Button</button>
                            <button class="btn btn2">button</button>
                        </div> --}}
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-11 pb-5">
                <div class="card drop-shadow border border-secondary align-items-center">
                    {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                    <div class="pt-10 ">
                        <a class="download round m-lg-3" href="#" title="" >
                            <img src="img/kebab.png" alt="download" title="download"
                                style="right: 20px;position: absolute;" />
                        </a>
                        <img class="bd-placeholder-img rounded-circle border" width="100px" height="100px" src="img/Frame 1622.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h2 class="card-text text-color-dark font-weight-bold text-3 pb-1 mb-4 px-10 text-truncate">Johny yes papa
                        </h2>
                        <p class="text-center pb-5" style="line-height: 0%"><a href="">Operation</a></p>
                        <p class="text-center num m-0"><img src="img/call.png" alt=""> +62897635164518</p>
                        <p class="text-center email" style="line-height: 0%"><img src="img/Message.png" alt=""> Johnyyespapa@transtrack.id</p>
                        {{-- <div class="btnset">
                            <button class="btn btn1">Button</button>
                            <button class="btn btn2">button</button>
                        </div> --}}
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-11 pb-5">
                <div class="card drop-shadow border border-secondary align-items-center">
                    {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                    <div class="pt-10 ">
                        <a class="download round m-lg-3" href="#" title="" >
                            <img src="img/kebab.png" alt="download" title="download"
                                style="right: 20px;position: absolute;" />
                        </a>
                        <img class="bd-placeholder-img rounded-circle border" width="100px" height="100px" src="img/Frame 1622.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h2 class="card-text text-color-dark font-weight-bold text-3 pb-1 mb-4 px-10 text-truncate">Johny yes papa
                        </h2>
                        <p class="text-center pb-5" style="line-height: 0%"><a href="">Operation</a></p>
                        <p class="text-center num m-0"><img src="img/call.png" alt=""> +62897635164518</p>
                        <p class="text-center email" style="line-height: 0%"><img src="img/Message.png" alt=""> Johnyyespapa@transtrack.id</p>
                        {{-- <div class="btnset">
                            <button class="btn btn1">Button</button>
                            <button class="btn btn2">button</button>
                        </div> --}}
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-11 pb-5">
                <div class="card drop-shadow border border-secondary align-items-center">
                    {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                    <div class="pt-10 ">
                        <a class="download round m-lg-3" href="#" title="" >
                            <img src="img/kebab.png" alt="download" title="download"
                                style="right: 20px;position: absolute;" />
                        </a>
                        <img class="bd-placeholder-img rounded-circle border" width="100px" height="100px" src="img/Frame 1622.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h2 class="card-text text-color-dark font-weight-bold text-3 pb-1 mb-4 px-10 text-truncate">Johny yes papa
                        </h2>
                        <p class="text-center pb-5" style="line-height: 0%"><a href="">Operation</a></p>
                        <p class="text-center num"><img src="img/call.png" alt=""> +62897635164518</p>
                        <p class="text-center email" style="line-height: 0%"><img src="img/Message.png" alt=""> Johnyyespapa@transtrack.id</p>
                        {{-- <div class="btnset">
                            <button class="btn btn1">Button</button>
                            <button class="btn btn2">button</button>
                        </div> --}}
                    </div>

                </div>
            </div>

            <div class="m-t-15 ">
                <div class="pull-right">
                    <nav aria-label="Page navigation nav-paging">

                    </nav>
                </div>

            </div>
        </div>
        <!--begin::Card-->
        <div class="row">
            <div
                class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
            </div>
            <div
                class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                <div class="dataTables_paginate paging_simple_numbers" id="kt_customers_table_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled"
                            id="kt_customers_table_previous"><a href="#"
                                aria-controls="kt_customers_table" data-dt-idx="0" tabindex="0"
                                class="page-link fw-bolder"><img src="img/Frame 1778.png" height="20px" alt=""></a></li>
                        <li class="paginate_button page-item active"><a href="#"
                                aria-controls="kt_customers_table" data-dt-idx="1" tabindex="0"
                                class="page-link fw-bolder" style="background-color: red">1</a></li>
                        <li class="paginate_button page-item "><a href="#"
                                aria-controls="kt_customers_table" data-dt-idx="2" tabindex="0"
                                class="page-link fw-bolder">2</a></li>
                        <li class="paginate_button page-item "><a href="#"
                                aria-controls="kt_customers_table" data-dt-idx="3" tabindex="0"
                                class="page-link fw-bolder">3</a></li>
                        <li class="paginate_button page-item "><a href="#"
                                aria-controls="kt_customers_table" data-dt-idx="4" tabindex="0"
                                class="page-link fw-bolder">4</a></li>
                        <li class="paginate_button page-item "><a href="#"
                                aria-controls="kt_customers_table" data-dt-idx="5" tabindex="0"
                                class="page-link fw-bolder">...</a></li>
                        <li class="paginate_button page-item "><a href="#"
                                aria-controls="kt_customers_table" data-dt-idx="6" tabindex="0"
                                class="page-link fw-bolder">10</a></li>
                        <li class="paginate_button page-item next" id="kt_customers_table_next"><a
                                href="#" aria-controls="kt_customers_table" data-dt-idx="7" tabindex="0"
                                class="page-link fw-bolder" style="background-color: transparent"><img src="img/next.png" height="20px" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--end::Card-->

        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<style>
    .blog-thumb {
    height: 200px;
    border-radius: 8px;
    margin: 20px;
}

.aside-enabled.aside-fixed .wrapper {
    padding-left: 0px;
}


@media (min-width: 992px){
    .aside-enabled.aside-fixed .wrapper {
    padding-left: 120px;
}
}

@media (min-width: 1350px){
    .aside-enabled.aside-fixed .wrapper {
    padding-left: 40px;
}
}
.navbar-expand-md .navbar-nav {
    font-size: unset;
}
@media (min-width: 768px){
.navbar-expand-md .navbar-nav {
    font-size: smaller;
}
}

@media (min-width: 1350px){
    .navbar-expand-md .navbar-nav {
        font-size: medium;
}
}

.card .card-body .text-center.num{
        font-size: smaller;
        margin-bottom: 0%
}
    .card .card-body .text-center.email{
        font-size: smaller;
}

@media (min-width: 768px){
    .card .card-body .text-center.num{
        font-size: smaller;
        margin-bottom: 0%
}
    .card .card-body .text-center.email{
        font-size: smaller;
}
}

@media (min-width: 1350px){
    .card .card-body .text-center.num{
        font-size: small;
        margin-bottom: 0%
}
    .card .card-body .text-center.email{
        font-size: small;
}
}


</style>
@endsection
