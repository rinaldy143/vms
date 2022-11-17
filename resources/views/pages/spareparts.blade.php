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
                        <a class="btn me-3 text-danger font-weight-bolder py-2" style="border: 1px solid red; border-radius: 8px;" data-toggle="modal"
                        href="#modalContact" title="Download">
                        <img class="pt-2" src="img/Plus 1.png" alt="">
                        Add Sparepart
                        </a>
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
        </div>
        <!--begin::Card-->
        <!--end::Card-->

        <!--end::Row-->
    </div></div>
    <!-- Modal contact-->
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    {{-- <div class="modal-dialog modal-dialog-centered modal-md-contact" role="document"> --}}
    <div class="modal-dialog modal-lg" role="document">
        <form action="#" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-content m-lg-10 p-3 p-3">
                <div class="modal-header">
                    <h4 class="text-color-dark font-weight-semibold text-transform-none text-5 m-0"
                        id="exampleModalLongTitle">Add Sparepart</h4>
                    <button type="button" class="close-share border-0" style="background-color: transparent" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg-6">
                                <label for="Identity_Sparepart"
                                    class="fw-bold text-black mt-4">{{__('Identity Sparepart')}} <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="field-input py-5">
                                    <input type="text" id="Identity_Sparepart" name="Identity_Sparepart" class="form-control"
                                        placeholder="Your Name" maxlength="200" value={{old('Identity_Sparepart')}}>
                                    @error('Identity_Sparepart')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    {{-- <label for="inputName"
                                        class="text-color-light">{{__('contact-form.name')}}</label>
                                    <input type="text" class="form-control" id="inputName"
                                        placeholder="Ex. Jonathan" name="name"> --}}
                                    {{-- @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror --}}
                                </div>
                                <label for="Name_Sparepart"
                                    class="fw-bold text-black mt-4">Name Sparepart <span
                                    class="text-danger">*</span></label>
                                <div class="field-input py-5">
                                    <input type="text" id="Name_Sparepart" name="Name_Sparepart" class="form-control"
                                        placeholder="Name Sparepart" maxlength="200" value={{old('Name_Sparepart')}}>
                                    @error('Name_Sparepart')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group d-flex align-items-center py-5">
                                    <div>
                                        <p class="fw-bold fs-3 text-black">Upload Photo</p>
                                        <label for="image" id="labelImg"
                                        class="font-weight-bold text-black m-0 border p-5" style="background-image: url(/assets/media/icons/system-icon/outline/Camera.svg);  background-repeat: no-repeat;
                                        background-size: cover;
                                        width: 100px;
                                        height:100px;
                                        position: absolute;">
                                        {{-- <img class="py-5 px-10" src="/assets/media/icons/system-icon/outline/Camera.svg" width="120px"> --}}
                                        {{-- <p class="fs-3">Upload Photo</p> --}}
                                        </label>


                                        <img class="img-preview img-fluid mb-3 col-sm-5 d-block w-75" src="" alt="">
                                        <input type="file" src="/assets/media/icons/system-icon/outline/Edit Square.svg" class="form-control-file"
                                        id="image" name="image" style="display: none" multiple onchange="previewImage()" onclick="document.getElementById('labelImg').style.opacity = 0">
                                    </div>
                                     <div class="h-50">
                                        <div class="fw-bolder fs-3" id="list_file"></div>
                                        <div id="size_file"></div>
                                     </div>

                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-lg-0 col-lg-6">
                                <label for="Brand"
                                    class="fw-bold text-black mt-4">Brand
                                    <span class="text-danger">*</span></label>
                                <div class="field-input py-5">
                                    <input type="text" id="Brand" name="Brand" class="form-control"
                                        placeholder="Your Brand" maxlength="200" value={{old('Brand')}}>
                                    @error('Brand')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
{{--
                                <label for="Stock"
                                    class="font-weight-bold text-black mt-4">Stock --}}

                                {{-- <input type="number" id="Stock" name="Stock" class="form-control"
                                    placeholder="Website" maxlength="200" value={{old('Stock')}}>
                                @error('Stock')
                                <div class="invalid-feedback alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror --}}
                                <label for="Stock"
                                class="fw-bold text-black mt-4 pb-5">Stock<span
                                class="text-danger">*</span></label><br>
                                <div class="number-input">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number" value={{old('Stock')}}>
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                  </div>
                            </div>
                        </div>

                        {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer border-0 pt-20" style="flex-wrap: nowrap;">
                    <div class="col-md-6 text-center">
                        <button class="btn btn-danger text-3 rounded-8 w-25 p-md-3 h-100" type="submit"
                            id="downloadWp" name="downloadWp">Submit</button>
                    </div>
                    <div class="col-md-6 text-center">
                        <button type="reset" class="btn border border-danger text-danger text-3 rounded-8 w-25 p-md-3 h-100 close-share" data-dismiss="modal" aria-label="Close"
                            id="downloadWp" name="downloadWp">Cancel</button>
                    </div>
                </div>
        </form>
        {{-- <p class="text-center text-1 px-3">{{__('whitepapers.desc')}} <a
                href="#">{{__('whitepapers.span1')}}</a>
        </p> --}}
        {{-- /upload/whitepaper/{{$value->upload_file_name}} --}}
    </div>
</div>

<style>
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
</style>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
        var fileInput = document.getElementById('image');
        var listFile = document.getElementById('list_file');
        var sizeFile = document.getElementById('size_file');

        function fileSizeSI(){
            var a,b,c,d,e
        return (b=Math,c=b.log,d=1000,e=c(a)/c(d)|0,a/b.pow(d,e)).toFixed(2)
        +' '+(e?'kMGTPEZY'[--e]+'B':'Bytes')
    }


        fileInput.onchange = function () {
        var files = Array.from(this.files);
        files = files.map(file => file.name);
        listFile.innerHTML = files.join('<br/>');
        var sizes = Array.from(this.files);
        sizes = sizes.map(file => file.size);
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

// var fileInput = document.getElementById('image');
//         var listFile = document.getElementById('size_file');

//         fileInput.onchange = function () {
//         var files = Array.from(this.files);
//         files = files.map(file => file.size);
//         listFile.innerHTML = files.join('<br/>');
//         }


</script>
@endsection
