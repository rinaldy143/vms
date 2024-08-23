@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container">
        {{-- <div class="text-black fw-bolder fs-2 mb-2 mt-5">Users</div> --}}
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-black fw-bolder heading-3 fs-2 mb-2 mt-5">Access Features </div>
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="position-absolute ms-6">
                        <img src="img/Search.png" alt="">
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-customer-table-filter="search"
                        class="form-control form-control-lg w-350px ps-15" placeholder="Search...">

                    <div class="px-10 btn btn-icon w-30px h-30px w-md-40px h-md-40px">
                        <img src="img/Frame 1637.png" alt="">
                    </div>
                </div>
        </div>
        <div class="d-flex">
            {{-- <div class="text-black fw-bolder heading-3 fs-2 mb-2 mt-5">Vehicles </div> --}}
            <div class="col-lg-5" style="padding-right: 15px">
                <!--begin:::Tabs-->
                <div class="card my-5">
                    <div class="card-body pt-2">
                        <nav class="navbar navbar-expand-md navbar-light">
                                <div class="navbar-collapse" style="justify-content: space-between">
                                    <!-- Left Side Of Navbar -->
                                    <div class="card-title  px-0 pt-5">
                                        <!--begin::Search-->
                                        <h2>User VMS</h2>

                                        <!--end::Search-->
                                    </div>

                                    <!-- Right Side Of Navbar -->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <button type="button" class="btn border border-danger py-0 px-2" style="border-radius: 8px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                            <img class="pt-2" src="img/Plus 1.png" alt="">
                                            <!--end::Svg Icon-->
                                        </button>

                                        <!--end::Search-->
                                    </div>

                                </div>
                        </nav>

                        <div class="d-flex flex-stack pt-3 ">
                            <div class="d-flex flex-column w-100">

                                <div class="d-flex flex-row justify-content-between align-items-center my-4 w-100 border px-10" style="border-radius: 8px; background-color:#fff;">
                                    <a href="#" class="fs-5 text-dark fw-bolder text-hover-danger" >Operation</a>
                                    <ul class="menu-nav">
                                        <li class="menu-item dropdown ">
                                            <a class="nav-link text-dark" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="pt-3" src="img/kebab.png" alt="" >
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" width="25px" alt=""> Update</a>
                                                    <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Delete</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center my-4 w-100 border px-10" style="border-radius: 8px; background-color:#fff;">
                                    <a href="#" class="fs-5 text-dark fw-bolder text-hover-danger" >Mechanice</a>
                                    <ul class="menu-nav">
                                        <li class="menu-item dropdown ">
                                            <a class="nav-link text-dark" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="pt-3" src="img/kebab.png" alt="" >
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" width="25px" alt=""> Update</a>
                                                    <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Delete</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center my-4 w-100 border px-10" style="border-radius: 8px; background-color:#fff;">
                                    <a href="#" class="fs-5 text-dark fw-bolder text-hover-danger" >Logistic</a>
                                    <ul class="menu-nav">
                                        <li class="menu-item dropdown ">
                                            <a class="nav-link text-dark" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="pt-3" src="img/kebab.png" alt="" >
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" width="25px" alt=""> Update</a>
                                                    <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Delete</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center my-4 w-100 border px-10" style="border-radius: 8px; background-color:#fff;">
                                    <a href="#" class="fs-5 text-dark fw-bolder text-hover-danger" >Departemen Maintenance</a>
                                    <ul class="menu-nav">
                                        <li class="menu-item dropdown ">
                                            <a class="nav-link text-dark" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="pt-3" src="img/kebab.png" alt="" >
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" width="25px" alt=""> Update</a>
                                                    <a class="dropdown-item" href="#"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Delete</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" style="padding-left: 15px">
                <!--begin:::Tabs-->
                <div class="card my-5">
                    <div class="card-body pt-2">
                        <div class="card-title  px-0 py-5">
                            <!--begin::Search-->
                            <h2>Access Super Admin</h2>

                            <!--end::Search-->
                        </div>
                        <hr class="solid">

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bolder fs-4 collapsed border-0 pb-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Maintenances </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="padding-bottom: 0px;">
                                        <div class="accordion-item border-0">
                                            <h2 class="accordion-header" id="hOne">
                                                <button class="accordion-button fw-bolder fs-5 collapsed border-0 py-0" type="button" data-bs-toggle="collapse" data-bs-target="#cOne" aria-expanded="false" aria-controls="cOne"> Report </button>
                                            </h2>
                                            <div id="cOne" class="accordion-collapse collapse" aria-labelledby="hOne">
                                                <div class="accordion-body" style="padding-bottom: 0px;">
                                                    <form action="">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label fw-bolder" for="defaultCheck1">
                                                                Read Report
                                                            </label>
                                                          </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="padding-bottom: 0px;">
                                        <div class="accordion-item border-0">
                                            <h2 class="accordion-header" id="hTwo">
                                                <button class="accordion-button fw-bolder fs-5 collapsed border-0 py-0" type="button" data-bs-toggle="collapse" data-bs-target="#cTwo" aria-expanded="false" aria-controls="cTwo"> Maintenance </button>
                                            </h2>
                                            <div id="cTwo" class="accordion-collapse collapse" aria-labelledby="hTwo">
                                                <div class="accordion-body" style="padding-bottom: 0px;">
                                                    <form action="">
                                                        <div class="form-check" style="padding-bottom: 10px">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label fw-bolder" for="defaultCheck1">
                                                                Read Maintenance
                                                            </label>
                                                        </div>
                                                        <div class="form-check" style="padding-bottom: 10px">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                                            <label class="form-check-label fw-bolder" for="defaultCheck2">
                                                                Create Maintenance
                                                            </label>
                                                        </div>
                                                        <div class="form-check" style="padding-bottom: 10px">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                                            <label class="form-check-label fw-bolder" for="defaultCheck2">
                                                                Update/Delete Maintenance
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="padding-bottom: 0px;">
                                        <div class="accordion-item border-0">
                                            <h2 class="accordion-header" id="hThree">
                                                <button class="accordion-button fw-bolder fs-5 collapsed border-0 py-0" type="button" data-bs-toggle="collapse" data-bs-target="#cThree" aria-expanded="false" aria-controls="cThree"> Work Order </button>
                                            </h2>
                                            <div id="cThree" class="accordion-collapse collapse" aria-labelledby="hThree">
                                                <div class="accordion-body" style="padding-bottom: 0px;">
                                                    <form action="">
                                                        <div class="form-check" style="padding-bottom: 10px">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label fw-bolder" for="defaultCheck1">
                                                                Read Work Order
                                                            </label>
                                                        </div>
                                                        <div class="form-check" style="padding-bottom: 10px">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                                            <label class="form-check-label fw-bolder" for="defaultCheck2">
                                                                Create Work Order
                                                            </label>
                                                        </div>
                                                        <div class="form-check" style="padding-bottom: 10px">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                                            <label class="form-check-label fw-bolder" for="defaultCheck2">
                                                                Update/Delete Work Order
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button fw-bolder fs-4 collapsed border-0 pb-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> History </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="padding-bottom: 0px;">
                                        <form action="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label fw-bolder" for="defaultCheck1">
                                                    History Maintenance
                                                </label>
                                              </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button fw-bolder fs-4 collapsed border-0 pb-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Users </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="padding-bottom: 0px;">
                                        <form action="">
                                            <div class="form-check" style="padding-bottom: 10px">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label fw-bolder" for="defaultCheck1">
                                                    Read User
                                                </label>
                                              </div>
                                            <div class="form-check" style="padding-bottom: 10px">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label fw-bolder" for="defaultCheck1">
                                                    Create User
                                                </label>
                                              </div>
                                            <div class="form-check" style="padding-bottom: 10px">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label fw-bolder" for="defaultCheck1">
                                                    Update/Delete User
                                                </label>
                                              </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button fw-bolder fs-4 collapsed border-0 pb-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Vehicles </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="padding-bottom: 0px;">
                                        <form action="">
                                            <div class="form-check" style="padding-bottom: 10px">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label fw-bolder" for="defaultCheck1">
                                                    Read Vehicle
                                                </label>
                                              </div>
                                            <div class="form-check" style="padding-bottom: 10px">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label fw-bolder" for="defaultCheck1">
                                                    Create Vehicle
                                                </label>
                                              </div>
                                            <div class="form-check" style="padding-bottom: 10px">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label fw-bolder" for="defaultCheck1">
                                                    Update/Delete Vehicles
                                                </label>
                                              </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button fw-bolder fs-4 collapsed border-0 pb-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> Spareparts </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="padding-bottom: 0px;">
                                        <form action="">
                                            <div class="form-check" style="padding-bottom: 10px">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label fw-bolder" for="defaultCheck1">
                                                    Read Sparepart
                                                </label>
                                              </div>
                                            <div class="form-check" style="padding-bottom: 10px">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label fw-bolder" for="defaultCheck1">
                                                    Create Sparepart
                                                </label>
                                              </div>
                                            <div class="form-check" style="padding-bottom: 10px">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label fw-bolder" for="defaultCheck1">
                                                    Update/Delete Sparepart
                                                </label>
                                              </div>
                                        </form>
                                    </div>
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
        <!--begin::Row-->
        <!--end::Row-->
        <!--begin::Row-->

        <!--begin::Card-->
        <!--end::Card-->

        <!--end::Row-->
    </div></div>
    <style>
.accordion-button:not(.collapsed) {
    /* padding-bottom: 1px; */
  color: #000  !important;
  background-color: transparent !important;
  box-shadow: inset 0 0px 0 #eff2f5
}
.accordion-button:not(.collapsed) {

}
    </style>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
@endsection
