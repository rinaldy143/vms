@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container">
        {{-- <div class="text-black fw-bolder fs-2 mb-2 mt-5">Users</div> --}}
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-black fw-bolder heading-3 fs-1 mb-2 mt-5">Spareparts </div>
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
                        <button type="button" class="btn btn-danger me-3">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <img class="pt-2" src="img/Plus.png" alt="">
                            <!--end::Svg Icon-->Restock
                        </button>
                        <button type="button" class="btn me-3 text-danger fw-bolder" style="border: 1px solid red">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <img class="pt-2" src="img/Plus 1.png" alt="">
                            <!--end::Svg Icon-->Sparepart
                        </button>
                        <!--end::Search-->
                    </div>

                    <!-- Right Side Of Navbar -->
                    <div class="card-title">
                        <!--begin::Search-->
                        {{-- <button type="button" class="btn me-3" style="border: 1px solid black">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <img src="img/Filter 2.png" alt="">
                            <!--end::Svg Icon-->Filter
                        </button> --}}

                        <div class="dropdown dropdown-filter">
                            <button onclick="myFunction()" class="dropbtn fw-bold"><img src="img/Filter 2.png" alt="">
                                Filter</button>
                            <div id="myDropdown" class="dropdown-content">
                              <a class="fw-bolder" href="#home"><img src="img/arrow1.png" alt=""> Ascending</a>
                              <a class="fw-bolder" href="#about"><img src="img/arrow2.png" alt=""> Descending</a>
                              <a class="fw-bolder" href="#contact">High Stock</a>
                              <a class="fw-bolder" href="#contact">Low Stock</a>
                            </div>
                        </div>
                        <button type="button" class="btn me-3" style="border: 1px solid black">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <img src="img/Download.png" alt="">
                            <!--end::Svg Icon-->Export
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
                <div class="card drop-shadow border-secondary align-items-start">
                    {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                    <div class="pt-10 d-flex justify-content-between align-items-center m-0 w-100" style="padding-left: 2.5rem">
                        <p class="fw-bolder fs-4" style="display: contents">OLI</p>
                        <a class="m-lg-3" style="padding-right: 2rem" href="#" title="" >
                            <img src="img/kebab.png" alt="" title=""
                                />
                        </a>
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
                <div class="card drop-shadow border-secondary align-items-start">
                    {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                    <div class="pt-10 d-flex justify-content-between align-items-center m-0 w-100" style="padding-left: 2.5rem">
                        <p class="fw-bolder fs-4" style="display: contents">OLI</p>
                        <a class="m-lg-3" style="padding-right: 2rem" href="#" title="" >
                            <img src="img/kebab.png" alt="" title=""
                                />
                        </a>
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
                <div class="card drop-shadow border-secondary align-items-start">
                    {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                    <div class="pt-10 d-flex justify-content-between align-items-center m-0 w-100" style="padding-left: 2.5rem">
                        <p class="fw-bolder fs-4" style="display: contents">OLI</p>
                        <a class="m-lg-3" style="padding-right: 2rem" href="#" title="" >
                            <img src="img/kebab.png" alt="" title=""
                                />
                        </a>
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
    <style>
        .dropbtn.filter {
          background-color: transparent;
          color: black;
          padding: 11px;
          font-size: 15px;
          border: solid ;
          border-radius: 5px;
          border-width: thin
          /* cursor: pointer; */
        }
        .dropbtn {
          background-color: transparent;
          color: black;
          padding: 11px;
          font-size: 15px;
          border: solid ;
          border-radius: 5px;
          border-width: thin
          /* cursor: pointer; */
        }

        .dropdown {
          position: relative;
          display: inline-block;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          min-width: 160px;
          overflow: auto;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          color: black;
          background-color: white;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }

        .dropdown a:hover {background-color: white;}

        .show {display: block;}
        </style>
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
    </script>
@endsection
