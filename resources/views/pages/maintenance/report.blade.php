@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container">
        <div class="heading-3 position-absolute">Maintenances</div>
        <div class="d-flex justify-content-end">
            <div class="d-flex align-items-center position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="position-absolute ms-6">
                    <img src="/img/Search.png" alt="">
                </span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-customer-table-filter="search"
                    class="form-control form-control-lg w-325px h-50px ps-15" placeholder="Search...">

                <div class="px-10 btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px">
                    <img src="/img/Frame 1637.png" alt="">
                </div>
            </div>
        </div>
        <div class="d-flex" style="justify-content: space-between">
            <div class="nav" style="margin-top: 46px">
                <a href="/maintenance/report">
                    <div class="subtitle-1 me-10 text-danger" style="border-bottom: 1px solid #FF0000">Report</div>
                </a>
                <a href="/list-maintenance">
                    <div class="subtitle-1 me-10">Maintenance</div>
                </a>
                <a href="/workorder">
                    <div class="subtitle-1 me-10">Work Order</div>
                </a>
                <a href="/weightproduct">
                    <div class="subtitle-1 me-10">Weight Product</div>
                </a>
            </div>
            <div style="margin-top: 46px">
                <button type="button" class="btn me-3 p-0 border" style="border-radius: 8px">
                    <ul class="menu-nav p-0 m-0">
                        <li class="menu-item dropdown ">
                            <a class="nav-link text-dark"  href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/Filter 2.png" alt=""><strong> Filter</strong>
                            </a>
                            <div class="dropdown-menu mt-5" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-muted" href="#" style="margin-left: 20px"> All Process</a>
                                    <a class="dropdown-item fw-bold" href="#"> <img src="/img/Ellipse 188.svg" width="16px" alt=""> Waiting</a>
                                    <a class="dropdown-item fw-bold" href="#"> <img src="/img/Ellipse 189.svg" width="16px" alt=""> On Progress</a>
                                    <a class="dropdown-item fw-bold" href="#"> <img src="/img/Ellipse 190.svg" width="16px" alt=""> Maintained</a>
                            </div>
                        </li>
                    </ul>
                </button>
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
                                <h2>All Process</h2>
                                <!--end::Search-->
                            </div>


                        </div>
                    </div>
                </nav>
                <div class="row pt-5 pb-5">
                    {{-- @foreach ($user as $model) --}}
                    <div class="col-lg-4 col-md-6 col-11 pb-5">
                        <div class="card drop-shadow border border-secondary align-items-center border-dark">
                            {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                            <div class="card-body col-lg-12 row pt-10 w-100">
                                {{-- <a class="download round m-lg-3" href="#" title="" >
                                    <img src="img/kebab.png" alt="download" title="download"
                                        style="right: 20px;position: absolute;" />
                                </a> --}}
                                <div class="col-lg-3">
                                    <img src="/img/image 1.png" alt="">

                                </div>
                                <div class="col-lg-6">
                                    <div class="fw-bolder fs-3" id="list_file">D 1123 ABC</div>
                                    <div id="size_file">Grand Max</div>
                                </div>
                                <div class="col-lg-3" style="display: flex; justify-content: flex-end">
                                    <ul class="menu-nav" >
                                        <li class="menu-item dropdown">
                                            <a class="nav-link text-dark"  href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/img/kebab.png" style="" alt="">
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <form action="#" method="POST">
                                                    <a class="dropdown-item" data-toggle="modal" href="#"> <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" width="25px" alt=""> Update</a>
                                                    {{-- @csrf
                                                    @method('DELETE') --}}
                                                    <button type="submit" class="dropdown-item"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Delete</button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body w-100" style="display:flex;flex-direction: column;align-items: flex-start;">
                                <p class="border fs-7 text-danger fw-bolder border-dark p-3" style="line-height: 0%; border-radius: 10px; background-color:rgb(255,160,122);">Waiting </p>
                                <p class="num m-0 "><img src="/assets/media/icons/system-icon/outline/Calendar.svg" style="display: inline-block; margin-right:20px;" alt="">Date : 28 / 08 / 2022 </p>
                                <p class="email" style="line-height: 0%"><img src="/assets/media/icons/system-icon/outline/Bookmark.svg" class="my-2" style="display: inline-block; margin-right:20px;" alt="">Type : Monthly </p>
                                {{-- <div class="btnset">
                                    <button class="btn btn1">Button</button>
                                    <button class="btn btn2">button</button>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-11 pb-5">
                        <div class="card drop-shadow border border-secondary align-items-center border-dark">
                            {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                            <div class="card-body col-lg-12 row pt-10 w-100">
                                {{-- <a class="download round m-lg-3" href="#" title="" >
                                    <img src="img/kebab.png" alt="download" title="download"
                                        style="right: 20px;position: absolute;" />
                                </a> --}}
                                <div class="col-lg-3">
                                    <img src="/img/image 1.png" alt="">

                                </div>
                                <div class="col-lg-6">
                                    <div class="fw-bolder fs-3" id="list_file">D 1123 ABC</div>
                                    <div id="size_file">Grand Max</div>
                                </div>
                                <div class="col-lg-3" style="display: flex; justify-content: flex-end">
                                    <ul class="menu-nav" >
                                        <li class="menu-item dropdown">
                                            <a class="nav-link text-dark"  href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/img/kebab.png" style="" alt="">
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <form action="#" method="POST">
                                                    <a class="dropdown-item" data-toggle="modal" href="#"> <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" width="25px" alt=""> Update</a>
                                                    {{-- @csrf
                                                    @method('DELETE') --}}
                                                    <button type="submit" class="dropdown-item"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Delete</button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body w-100" style="display:flex;flex-direction: column;align-items: flex-start;">
                                <p class="border fs-7 text-primary fw-bolder border-dark p-3" style="line-height: 0%; border-radius: 10px; background-color:#87CEFA;">On Progress </p>
                                <p class="num m-0 "><img src="/assets/media/icons/system-icon/outline/Calendar.svg" style="display: inline-block; margin-right:20px;" alt="">Date : 28 / 08 / 2022 </p>
                                <p class="email" style="line-height: 0%"><img src="/assets/media/icons/system-icon/outline/Bookmark.svg" class="my-2" style="display: inline-block; margin-right:20px;" alt="">Type : Monthly </p>
                                {{-- <div class="btnset">
                                    <button class="btn btn1">Button</button>
                                    <button class="btn btn2">button</button>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-11 pb-5">
                        <div class="card drop-shadow border border-secondary align-items-center border-dark">
                            {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                            <div class="card-body col-lg-12 row pt-10 w-100">
                                {{-- <a class="download round m-lg-3" href="#" title="" >
                                    <img src="img/kebab.png" alt="download" title="download"
                                        style="right: 20px;position: absolute;" />
                                </a> --}}
                                <div class="col-lg-3">
                                    <img src="/img/image 1.png" alt="">

                                </div>
                                <div class="col-lg-6">
                                    <div class="fw-bolder fs-3" id="list_file">D 1123 ABC</div>
                                    <div id="size_file">Grand Max</div>
                                </div>
                                <div class="col-lg-3" style="display: flex; justify-content: flex-end">
                                    <ul class="menu-nav" >
                                        <li class="menu-item dropdown">
                                            <a class="nav-link text-dark"  href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="/img/kebab.png" style="" alt="">
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <form action="#" method="POST">
                                                    <a class="dropdown-item" data-toggle="modal" href="#"> <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" width="25px" alt=""> Update</a>
                                                    {{-- @csrf
                                                    @method('DELETE') --}}
                                                    <button type="submit" class="dropdown-item"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Delete</button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body w-100" style="display:flex;flex-direction: column;align-items: flex-start;">
                                <p class="border fs-7 text-success border-dark p-3" style="line-height: 0%; border-radius: 10px; background-color:rgb(152,251,152);">Maintained </p>
                                <p class="num m-0 "><img src="/assets/media/icons/system-icon/outline/Calendar.svg" style="display: inline-block; margin-right:20px;" alt="">Date : 28 / 08 / 2022 </p>
                                <p class="email" style="line-height: 0%"><img src="/assets/media/icons/system-icon/outline/Bookmark.svg" class="my-2" style="display: inline-block; margin-right:20px;" alt="">Type : Monthly </p>
                                {{-- <div class="btnset">
                                    <button class="btn btn1">Button</button>
                                    <button class="btn btn2">button</button>
                                </div> --}}
                            </div>

                        </div>
                    </div>
                    {{-- @endforeach --}}
                    <div class="m-t-15 ">
                        <div class="pull-right">
                            <nav aria-label="Page navigation nav-paging">

                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

@endsection
