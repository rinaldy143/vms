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
<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    {{-- <div class="modal-dialog modal-dialog-centered modal-md-contact" role="document"> --}}
    <div class="modal-dialog modal-dialog-centered " role="document">
        <form action="#" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-content m-lg-10 p-3 p-3 ">
                <div class="modal-header">
                    <h4 class="text-color-dark font-weight-semibold text-transform-none text-5 m-0"
                        id="exampleModalLongTitle">Add User</h4>
                    <button type="button" class="close-share border-0" style="background-color: transparent" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>
                    </button>

                </div>
                <div class="modal-body pb-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mb-3 mb-lg-0 col-lg-12">
                                <label for="Name"
                                    class="fw-bold text-black mt-4">{{__('Name')}} <span
                                        class="text-danger">*</span></label>
                                <div class="field-input py-5">
                                    <input type="text" id="Name" name="Name" class="form-control"
                                        placeholder="Your Name" maxlength="200" value={{old('Name')}}>
                                    @error('Name')
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

                                <label for="email"
                                    class="fw-bold text-black mt-4">email <span
                                    class="text-danger">*</span></label>
                                <div class="field-input py-5">
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="email" maxlength="200" value={{old('email')}}>
                                    @error('email')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <label for="contact_phone"
                                class="fw-bold text-black">{{__('No Handphone')}} <span
                                    class="text-danger">*</span></label>
                            <div class="field-input py-5">
                                <div class="input-group mb-0 border rounded">
                                    <div class="input-group-prepend">
                                        <select class="btn dropdown-toggle" type="button"
                                             data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" id="country_codes"
                                            name="country_codes">
                                            <option value="+62" selected>+62</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control border-0" id="no_contact"
                                        placeholder="89xxxxxxx" name="no_contact"
                                        aria-label="Text input with dropdown button"
                                        placeholder="89xx-xxxx-xxxx" maxlength="15" value={{old('no_contact')}}>

                                </div>
                                @error('country_codes')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror

                                @error('no_contact')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>


                            <label for="role"
                                class="font-weight-bold text-black mt-4">{{__('Role')}} <span
                                class="text-danger">*</span></label>
                            </label>
                            <div class="field-input">
                                <select class="form-control" aria-label="role" id="roles"
                                    name="roles">

                                    <option value="" disabled selected>{{__('Select role of user')}}</option>

                                    <option value="Accretia" >Accretia</option>
                                    <option value="Bellato" >Bellato</option>
                                    <option value="Cora" >Cora</option>
                                    {{-- <select class="form-select " aria-label="select location"
                                        id="inputLocations" name="locations" required>
                                        <option selected>{{__('contact-form.selectLocation')}}</option>
                                        @foreach ($locations as $location)
                                        <option value="{{ $location->id }}">{{$location->nama}}</option>
                                        @endforeach --}}
                                    </select>
                                    @error('role')
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


                        </div>

                        {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer border-0 pt-20 mt-10" style="flex-wrap: nowrap;">
                    <div class="col-md-6 text-center">
                        <button class="btn shadow btn-danger text-3 rounded-8 w-100 p-md-3 h-100" type="submit"
                            id="downloadWp" name="downloadWp">Submit</button>
                    </div>
                    <div class="col-md-6 text-center">
                        <button type="reset" class="btn shadow border border-danger text-danger text-3 rounded-8 w-100 p-md-3 h-100 close-share" data-dismiss="modal" aria-label="Close"
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

</style>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
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

// var fileInput = document.getElementById('image');
//         var listFile = document.getElementById('size_file');

//         fileInput.onchange = function () {
//         var files = Array.from(this.files);
//         files = files.map(file => file.size);
//         listFile.innerHTML = files.join('<br/>');
//         }


</script>
@endsection
