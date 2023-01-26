@extends('layouts.master')
@section('content')
<div class="content">
    <!--begin::Container-->
    <div class="container">
        {{-- <div class="text-black fw-bolder fs-2 mb-2 mt-5">Users</div> --}}
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-black fw-bolder heading-3 fs-2 mb-2 mt-5">Users </div>
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->

                    <span class="position-absolute ms-6">
                        <img src="/img/Search.png" alt="">
                    </span type="submit">
                    <!--end::Svg Icon-->
                    <form action="{{route('users.search')}}" method="GET">
                        <input type="text" name="search" data-kt-customer-table-filter="search"
                            class="form-control form-control-lg w-350px ps-15" placeholder="Search...">
                    </form>
                    <div class="px-10 btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px">
                        <img src="/img/Frame 1637.png" alt="">
                    </div>
                </div>
        </div>
        <!--begin::Row-->
        {{-- <nav class="navbar navbar-expand-md navbar-light">
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
                        <a class="btn btn-danger me-3 fw-bold py-3"  data-toggle="modal"
                        href="#modalUser" title="Download">
                        <img class src="img/Add User.png" alt="">
                        Add User
                        </a>
                        <!--end::Search-->
                    </div>

                </div>
            </div>
        </nav> --}}
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container px-0 py-5">
                <div class="navbar-collapse" style="justify-content: space-between">
                    <!-- Left Side Of Navbar -->
                    <div class="card-title">
                        <!--begin::Search-->
                        <a  class=" text-danger fw-bolder me-3 py-3 font-weight-bolder " href="#" style="border-bottom: 1px solid red; padding-bottom: 3px">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <!--end::Svg Icon-->All
                        </a>
                        <a  class=" text-dark me-6 py-3 font-weight-bolder " style="">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <!--end::Svg Icon-->Operation
                        </a>
                        <a  class=" text-dark me-6 py-3 font-weight-bolder " style="">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <!--end::Svg Icon-->Lead Mechanice
                        </a>
                        <a  class=" text-dark me-6 py-3 font-weight-bolder " style="">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <!--end::Svg Icon-->Mechanice
                        <a  class=" text-dark me-6 py-3 font-weight-bolder " style="">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <!--end::Svg Icon-->Logistic
                        </a>
                        <!--end::Search-->
                    </div>

                    <!-- Right Side Of Navbar -->
                    @can('create', App\Models\Entity\User::class)
                        <div class="card-title">
                            <!--begin::Search-->
                            <button type="button" class="btn me-3" style="border: 1px solid">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                <img src="img/Download.png" alt="">
                                <!--end::Svg Icon-->Export
                            </button>
                            <a class="btn btn-danger me-3 fw-bold py-3"  data-toggle="modal"
                            href="#modalUser" title="Download">
                            <img class src="img/Add User.png" alt="">
                            Add User
                            </a>
                            <!--end::Search-->
                        </div>
                    @endcan
                </div>
            </div>
        </nav>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row pt-5 pb-5">
            @foreach ($user as $model)
            <div class="col-lg-4 col-md-6 col-11 pb-5">
                <div class="card drop-shadow border border-secondary align-items-center">
                    {{-- <img src="/img/img_videos/{{$video->thumbnail}}" alt="" class="card-img-top video-thumb "> --}}
                    @can('create', App\Models\Entity\User::class)
                        <div class="pt-10 w-100">
                            {{-- <a class="download round m-lg-3" href="#" title="" >
                                <img src="img/kebab.png" alt="download" title="download"
                                    style="right: 20px;position: absolute;" />
                            </a> --}}
                            <ul class="menu-nav">
                                <li class="menu-item dropdown" style="right: 20px;position: absolute;">
                                    <a class="nav-link text-dark" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/kebab.png" style="" alt="">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <form action="{{route('users.destroy', ($model->id))}}" method="POST">
                                            <a class="dropdown-item" data-toggle="modal" id="btn1" href="#modaleditUser{{$model->id}}"> <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" width="25px" alt=""> Update</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Delete</button>
                                        </form>
                                    </div>
                                    <div>
                                        @include('modal.modaleditUser')
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @endcan
                    @if($model->photo == "")
                    <img class="bd-placeholder-img rounded-circle border mt-5"  width="100px" height="100px" src="/img/Ellipse 44.png" alt="">
                    @else
                    <img class="bd-placeholder-img rounded-circle border mt-5"  width="100px" height="100px" src="/storage/{{$model->photo}}" alt="">
                    @endif
                    <div class="card-body ">
                        <h2 class="card-text text-color-dark font-weight-bold text-3 pb-1 mb-4 px-10 text-truncate text-center">{{$model->name}}
                        </h2>
                        <p class="text-center pb-5" style="line-height: 0%"><a href="">{{$model->role}}</a></p>
                        <p class="text-center num m-0"><img src="img/call.png" alt=""> {{$model->phone_number}}</p>
                        <p class="text-center email" style="line-height: 0%"><img src="img/Message.png" alt=""> {{$model->email}}</p>
                        {{-- <div class="btnset">
                            <button class="btn btn1">Button</button>
                            <button class="btn btn2">button</button>
                        </div> --}}
                    </div>

                </div>
            </div>
            @endforeach

            <div class="row mb-12">
                <div class="col-sm-12 col-md-7 d-flex align-items-center w-100 justify-content-md-end">
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

            <div class="m-t-15 ">
                <div class="pull-right">
                    <nav aria-label="Page navigation nav-paging">

                    </nav>
                </div>

            </div>
        </div>
        <!--begin::Card-->
        <!--end::Card-->

        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!-- Modal contact-->

<div>
    @include('modal.modalUser')
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
$("#btn1").click(function(){
    $("#myModal1").modal();
});

        var fileInput = document.getElementById('photo');
        var listFile = document.getElementById('list_file');
        var sizeFile = document.getElementById('size_file');

        function formatBytes(bytes,decimals) {
            if(bytes == 0) return '0 Bytes';
            var k = 1024,
                dm = decimals || 0,
                sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
                i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
        }


        fileInput.onchange = function () {
        var files = Array.from(this.files);
        files = files.map(file => file.name);
        listFile.innerHTML = files.join('<br/>');
        var sizes = Array.from(this.files);
        sizes = sizes.map(file => formatBytes(file.size));
        sizeFile.innerHTML = sizes.join('<br/>');


        const photo= document.querySelector('#photo');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(photo.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
        }

    var buttons = document.querySelectorAll('form button:not([type="submit"])');
    for (i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function(e) {
        e.preventDefault();
    });
    }

</script>



@endsection
