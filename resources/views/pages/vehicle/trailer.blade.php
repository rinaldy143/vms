@extends('layouts.master')

@section('content')
<div class="content d-flex" >
    <div class="container col-lg-5 col-xl-4"  style="background-color: #F5F5F5">
        {{-- <div class="text-black fw-bolder fs-2 mb-2 mt-5">Users</div> --}}
        <!--begin::Row-->
            {{-- <div class="text-black fw-bolder heading-3 fs-2 mb-2 mt-5">Vehicles </div> --}}
            <div class="mx-2 px-3 py-5">
                {{-- <div class="text-black fw-bolder heading-3 fs-2 mb-2 mt-5">Vehicles </div> --}}

                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 mb-10 pt-5">
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
                                <a href="#modalTrailer" class="btn btn-danger fs-7 px-4 w-100 " data-toggle="modal"><img src="assets/media/icons/system-icon/outline/Plus-3.svg" width="20px" alt="">Add Vehicle/Trailer</a>

                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="btn border fs-7 w-75" style="background-color: #fff"><img src="assets/media/icons/system-icon/outline/Swap-1.svg" width="20px" alt=""> Syncronize Vehicles</a>
                                <a href="/setting" class="btn border px-4" style="background-color: #fff"><img src="assets/media/icons/system-icon/outline/Setting.svg" alt=""></a>
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
                                    class="form-control form-control-lg ps-15" placeholder="Search...">
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-8">
                                <a href="/vehicles" class="btn w-50"style="background-color: #fff">Vehicle </a>
                                <a href="/trailer" class="btn btn-danger w-50">Trailer </a>
                            </div>
                            <!--end::Notice-->
                            <!--begin::Items-->
                            <div class="py-2">
                                <p class="pt-4 fs-4 text-muted">List Trailer</p>
                                <!--begin::Item-->
                                <div class="d-flex flex-stack pt-3 ">
                                    <div class="d-flex w-100">

                                        <div class="d-flex flex-column w-100">
                                            <a href="#" class="fs-5 text-dark fw-bolder text-hover-primary border p-3 " style="border-radius: 8px; background-color:#fff;">T-01</a>

                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex flex-stack pt-3 ">
                                    <div class="d-flex w-100">

                                        <div class="d-flex flex-column w-100">
                                            <a href="#" class="fs-5 text-dark fw-bolder text-hover-primary border p-3 " style="border-radius: 8px; background-color:#fff;">T-02</a>

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
            <!--begin::Sidebar-->

            <!--end::Sidebar-->
            <!--begin::Content-->


    </div>
        <!--end::Row-->
        <!--begin::Row-->


        <!--begin::Card-->
        <!--end::Card-->


        <!--end::Row-->
            <div class="container col-lg-7 col-xl-8" style="background-color: #FFF">
                <!--begin:::Tabs-->
                <div class="card my-5">
                    <div class="card-body pt-2">
                        <div class="d-flex justify-content-between">
                            <div class="w-100 mt-10">
                                <p class="pvehicle">Code Trailer</p>
                                <h3 class="fw-bolder heading-3 fs-1">D 1234 ABC</h3>
                                <hr class="solid">
                                <div class="d-flex">
                                    <div class="col-lg-6 px-1">
                                        <p class="pvehicle mb-2 fs-7">Model Trailer</p>
                                        <h4 class="bvehicle fw-bold pb-5">Grand Max</h4>
                                        <p class="pvehicle mb-2 fs-7">Scheduling Maintained</p>
                                        <h4 class="bvehicle fw-bold">20</h4>

                                    </div>
                                    <div class="col-lg-6 px-1">
                                        <p class="pvehicle mb-2 fs-7">Trailer Type</p>
                                        <h4 class="bvehicle fw-bold pb-5">Van</h4>
                                        <p class="pvehicle mb-2 fs-7">Last Maintained</p>
                                        <h4 class="bvehicle fw-bold">20 May 2022</h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" alt="" style="float: right;">
                                <div class="img-fluid align-item-center mx-auto d-block">
                                    <img src="/img/Trailer.svg" alt="">
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

                                        <!--end::Search-->
                                    </div>

                                </div>
                            </div>
                        </nav>
                        <div class="d-flex flex-row-fluid mt-5">
                            <div class="pvehicle col-lg-3 col-md-3 subtitle-1">
                                Date
                            </div>
                            <div class="pvehicle col-lg-5 col-md-5 subtitle-1">
                                Maintentance Type
                            </div>

                        </div>
                        <hr class="solid">
                        <div class="scroll">
                            <div class="d-flex flex-row-fluid mt-6">
                                <div class="col-lg-3 col-md-3 subtitle-1 fw-bold">
                                    20 May 2022
                                </div>
                                <div class="col-lg-5 col-md-5 subtitle-1">
                                    Maintenance
                                </div>
                                <div class=" col-lg-4 col-md-4" style="text-align: right" >
                                    <a class="fs-4" style="color: #6E6666" href="#">Detail <img src="assets/media/icons/system-icon/outline/Arrow - Right.svg" alt="" >
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row-fluid mt-6">
                                <div class="col-lg-3 col-md-3 subtitle-1 fw-bold">
                                    10 May 2022
                                </div>
                                <div class="col-lg-5 col-md-5 subtitle-1">
                                    Accident
                                </div>
                                <div class=" col-lg-4 col-md-4" style="text-align: right" >
                                    <a class="fs-4" style="color: #6E6666" href="#">Detail <img src="assets/media/icons/system-icon/outline/Arrow - Right.svg" alt="" >
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row-fluid mt-6">
                                <div class="col-lg-3 col-md-3 subtitle-1 fw-bold">
                                    20 April 2022
                                </div>
                                <div class="col-lg-5 col-md-5 subtitle-1">
                                    Maintenance
                                </div>
                                <div class=" col-lg-4 col-md-4" style="text-align: right" >
                                    <a class="fs-4" style="color: #6E6666" href="#">Detail <img src="assets/media/icons/system-icon/outline/Arrow - Right.svg" alt="" >
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
</div>

        <!--begin::Layout-->

<div class="modal fade" id="modalTrailer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    {{-- <div class="modal-dialog modal-dialog-centered modal-md-contact" role="document"> --}}
    <div class="modal-dialog modal-dialog-centered " role="document">
        <form action="{{route('trailer.store')}}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-content m-lg-10 p-3 p-3 ">
                <div class="modal-header">
                    <h4 class="text-color-dark font-weight-semibold text-transform-none text-5 m-0"
                        id="exampleModalLongTitle">Add Vehicle</h4>
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
                                <label for="code_trailer"
                                    class="fw-bold text-black mt-4">{{__('Code Trailer')}} <span
                                        class="text-danger">*</span></label>
                                <div class="field-input">
                                    <input type="text" id="code_trailer" name="code_trailer" class="form-control"
                                        placeholder="Ex. D 1234 ABC" maxlength="200" value={{old('code_trailer')}}>
                                    @error('code_trailer')
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
                                <label for="type_trailer_id"
                                    class="fw-bold text-black mt-4">{{__('Trailer Type')}} <span
                                    class="text-danger">*</span></label>
                                </label>
                                <div class="field-input">
                                    <select class="form-control" aria-label="type_trailer_id" id="type_trailer_id"
                                        name="type_trailer_id">

                                        <option value="" disabled selected >{{__('Select Trailer Type')}}</option>
                                        @foreach ($trailerT as $model)

                                        <option value="{{$model->id}}" {{ old('type_vehicle_id')==$model->id ?
                                            'selected' : '' }}>{{$model->trailer_type}}</option>
                                        @endforeach

                                        {{-- <option value="Flatbed Trailer" >Flatbed Trailer</option>
                                        <option value="Skeletal Trailer" >Skeletal Trailer</option> --}}

                                        {{-- <select class="form-select " aria-label="select location"
                                            id="inputLocations" name="locations" required>
                                            <option selected>{{__('contact-form.selectLocation')}}</option>
                                            @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{$location->nama}}</option>
                                            @endforeach --}}
                                        </select>
                                        @error('type_trailer_id')
                                        <div class="invalid-feedback d-flex">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                <label for="model_trailer_id"
                                    class="fw-bold text-black mt-4">{{__('Trailer Model')}} <span
                                    class="text-danger">*</span></label>
                                </label>
                                <div class="field-input">
                                    <select class="form-control" aria-label="model_trailer_id" id="model_trailer_id"
                                        name="model_trailer_id">

                                        <option value="" disabled selected>{{__('Select Vehicle Model')}}</option>

                                        @foreach ($trailerM as $model)

                                        <option value="{{$model->id}}" {{ old('type_vehicle_id')==$model->id ?
                                            'selected' : '' }}>{{$model->trailer_model}}</option>
                                        @endforeach
                                        {{-- <option value="Colt Diesel Double (CDD) Bak" >Colt Diesel Double (CDD) Bak</option>
                                        <option value="Colt Diesel Double (CDD) Los Bak" >Colt Diesel Double (CDD) Los Bak</option>
                                        <option value="Colt Diesel Double (CDD) Long Box" >Colt Diesel Double (CDD) Long Box</option> --}}
                                        {{-- <select class="form-select " aria-label="select location"
                                            id="inputLocations" name="locations" required>
                                            <option selected>{{__('contact-form.selectLocation')}}</option>
                                            @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{$location->nama}}</option>
                                            @endforeach --}}
                                        </select>
                                        @error('model_trailer_id')
                                        <div class="invalid-feedback d-flex">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                <label for="vehicle_connected"
                                    class="fw-bold text-black mt-4">{{__('Trailer Connected')}} <span
                                    class="text-danger">*</span></label>
                                </label>
                                <div class="field-input">
                                    <select class="form-control" aria-label="vehicle_connected" id="vehicle_connected"
                                        name="vehicle_connected">

                                        <option style="background-image:url(img/Search.png);" value="" disabled selected>{{__('Select Vehicle Model')}}</option>

                                        <option value="Colt Diesel Double (CDD) Bak" >Colt Diesel Double (CDD) Bak</option>
                                        <option value="Colt Diesel Double (CDD) Los Bak" >Colt Diesel Double (CDD) Los Bak</option>
                                        <option value="Colt Diesel Double (CDD) Long Box" >Colt Diesel Double (CDD) Long Box</option>
                                        {{-- <select class="form-select " aria-label="select location"
                                            id="inputLocations" name="locations" required>
                                            <option selected>{{__('contact-form.selectLocation')}}</option>
                                            @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{$location->nama}}</option>
                                            @endforeach --}}
                                        </select>
                                        @error('vehicle_connected')
                                        <div class="invalid-feedback d-flex">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                <label for="monthly_maintenance"
                                    class="fw-bold text-black mt-4">{{__('Monthly Maintenance')}} <span
                                    class="text-danger">*</span></label>
                                </label>
                                <div class="input-group date border border-secondary" data-provide="datepicker">
                                    <input type="text" id="monthly_maintenance" name="monthly_maintenance" class="datepicker form-control border-0 " >
                                    <div class="input-group-addon border-0" style="background-color: #fff">
                                        <span><img src="assets/media/icons/system-icon/outline/Calendar.svg" width="23px" alt=""></span>
                                    </div>
                                </div>

                        {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer border-0 pt-10" style="flex-wrap: nowrap;">
                    <div class="col-md-6 text-center">
                        <button class="btn shadow btn-danger text-3 rounded-8 w-100 p-md-3 h-100" type="submit"
                            id="downloadWp" name="downloadWp">Maintenance</button>
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
        .pvehicle{
        font-size: 16px
    }
    .bvehicle{
        font-size: 16px;
    }
    @media(max-width: 1200px) {
        .pvehicle{
            font-size: 0.80rem;;
        }
        .bvehicle{
            font-size: 1.10rem;
        }
    }

</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/js/bootstrap-datepicker.min.js"></script>


<script>
      $('.date').datepicker({
    format: "mm",
    startView: "months",
    minViewMode: "months",
    autoclose: true,
    changeMonth: true,
    // todayHighlight: true,
  });

</script>

@endsection
