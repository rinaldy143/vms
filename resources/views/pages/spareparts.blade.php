@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container">
        {{-- <div class="text-black fw-bolder fs-2 mb-2 mt-5">Users</div> --}}
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-black fw-bolder heading-3 fs-1 me-3">Spareparts </div>
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="position-absolute ms-6">
                        <img src="/img/Search.png" alt="">
                    </span>
                    <!--end::Svg Icon-->
                    <form action="{{route('spareparts.search')}}" method="GET">
                        <input type="text" name="search" data-kt-customer-table-filter="search"
                            class="form-control form-control-lg w-350px ps-15" placeholder="Search...">
                    </form>
                    <div class="px-10 btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px">
                        <img src="/img/Frame 1637.png" alt="">
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
                        {{-- <button type="button" class="btn btn-danger me-3 py-2 font-weight-bolder " style="border-radius: 8px;">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <img class="pt-2" src="img/Plus.png" alt="">
                            <!--end::Svg Icon-->Restock
                        </button> --}}
                        @can('create', App\Models\Entity\Sparepart::class)
                            <a class="btn btn-danger me-3 font-weight-bolder py-2" style="border-radius: 8px;" data-toggle="modal"
                            href="#modalRestock" title="Restock">
                            <img class="pt-2" src="/img/Plus.png" alt="">
                            Restock
                            </a>
                            <a class="btn me-3 text-danger font-weight-bolder py-2" style="border: 1px solid red; border-radius: 8px;" data-toggle="modal"
                            href="#modalSparepart" title="Add Sparepart">
                            <img class="pt-2" src="/img/Plus 1.png" alt="">
                            Add Sparepart
                            </a>
                        @endcan
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
                                        <img src="/img/Filter 2.png" alt=""><strong> Filter</strong>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{route('spareparts.ascending')}}"> <img src="/assets/media/icons/system-icon/outline/Arrow - Up-1.svg" width="25px" alt=""> Ascending</a>
                                            <a class="dropdown-item" href="{{route('spareparts.descending')}}"> <img src="/assets/media/icons/system-icon/outline/Arrow - Down-1.svg" width="25px" alt=""> Descending</a>
                                            <a class="dropdown-item" href="{{route('spareparts.highStock')}}"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> High Stock</a>
                                            <a class="dropdown-item" href="{{route('spareparts.lowStock')}}"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Low Stock</a>
                                    </div>
                                </li>
                            </ul>
                        </button>

                        <button type="button" class="btn me-3 border" style="border-radius: 8px">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <img src="/img/Download.png" alt="">
                            <!--end::Svg Icon--> <strong>Export</strong>
                        </button>

                        <!--end::Search-->
                    </div>

                </div>
            </div>
        </nav>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row pt-5 pb-5">
            @foreach ($spareparts as $item)
                <div class="col-lg-4 col-md-6 col-11 pb-5">
                    <!--begin::Card-->
                    <div class="card drop-shadow align-items-start pb-15" style="border-radius: 8px;">
                        <div class="pt-10 d-flex justify-content-between align-items-center m-0 w-100" style="padding-left: 2.5rem">
                            <p class="fw-bolder fs-4" style="display: contents">{{$item->name}}</p>
                            @can('create', App\Models\Entity\Sparepart::class)
                                <ul class="menu-nav">
                                    <li class="menu-item dropdown">
                                        <a href="#" class="nav-link text-dark" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="/img/kebab.png" style="padding-right: 2rem" alt="">
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <form action="{{route('spareparts.destroy', ($item->id))}}" method="POST">
                                                <a href="" class="dropdown-item">
                                                    <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" alt="" width="25px">
                                                    Update
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item">
                                                    <img src="/assets/media/icons/system-icon/outline/Delete.svg" alt="" width="25px">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            @endcan
                        </div>
                        <div class="d-flex align-items-center" style="padding-left: 2.5rem">
                            @if ($item->photo == null)
                                <img src="/img/Mask group.png" alt="" title="" width="50px" height="50px">
                            @else
                                <img src="/storage/{{$item->photo}}" alt="" width="50px" height="50px">
                            @endif
                            <ul class="m-0" style="list-style: none">
                                <li class="py-1">Identity : <strong>{{$item->identity}}</strong></li>
                                <li class="py-1">Brand : <strong>{{$item->brand}}</strong></li>
                                @if ($item->count >= 50)
                                <li class="py-1">Stock : <strong class="text-success">{{$item->count}}</strong></li>
                                @else
                                <li class="py-1">Stock : <strong class="text-danger">{{$item->count}}</strong></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                            <!--end::Card-->
                </div>
            @endforeach
            <div class="row mb-12">
                <div class="col-sm-12 col-md-7 d-flex align-items-center w-100 justify-content-md-end">
                    <div class="dataTables_paginate paging_simple_numbers" id="kt_customers_table_paginate">
                        <ul class="pagination">
                            {!! $spareparts->links() !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Row-->
    </div>
    <div>
        @include('modal.modalRestock')
    </div>
    <div>
        @include('modal.modalsparepart')
    </div>
    <!-- Modal contact-->


<style>
    .imgInput{
        display: none;
    }
    /* .form-group>input {
  display: none;
    } */

    label[for="image"] {
        border-style: dashed !important;
        border-width: medium !important;
    }

    input[type="number"] {
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    }

    .number-input {
    border: 2px solid #ddd;
    display: inline-flex;
    }

    .number-input,
    .number-input * {
    box-sizing: border-box;
    }

    .number-input button {
    outline:none;
    -webkit-appearance: none;
    background-color: transparent;
    border: none;
    align-items: center;
    justify-content: center;
    width: 3rem;
    height: 3rem;
    cursor: pointer;
    margin: 0;
    position: relative;
    }

    .number-input button:before,
    .number-input button:after {
    display: inline-block;
    position: absolute;
    content: '';
    width: 1rem;
    height: 2px;
    background-color: #212121;
    transform: translate(-50%, -50%);
    }
    .number-input button.plus:after {
    transform: translate(-50%, -50%) rotate(90deg);
    }

    .number-input input[type=number] {
    font-family: sans-serif;
    max-width: 5rem;
    padding: .5rem;
    border: solid #ddd;
    border-width: 0 2px;
    font-size: 1.5rem;
    height: 3rem;
    font-weight: bold;
    text-align: center;
    }

    @media(max-width: 767px) {
        .sparepart2{
            padding-top: 20%;
        }
    }
</style>

<script>
        var fileInput = document.getElementById('image');
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


        const Image= document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
        }
    //     function previewImage() {
    //     const Image= document.querySelector('#image');
    //     const imgPreview = document.querySelector('.img-preview');

    //     imgPreview.style.display = 'block';
    //     const oFReader = new FileReader();
    //     oFReader.readAsDataURL(image.files[0]);

    //     oFReader.onload = function(oFREvent) {
    //         imgPreview.src = oFREvent.target.result;
    //     }
    // }
    var buttons = document.querySelectorAll('form button:not([type="submit"])');
    for (i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function(e) {
        e.preventDefault();
    });
    }
</script>

@endsection
