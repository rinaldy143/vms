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
                    <div class="text-black fw-bolder heading-3 fs-2 mb-2 ">Trailer </div>

                    <!--end::Card-->
                    <!--begin::Connected Accounts-->
                    <div class="mb-5 mb-xl-8">
                        <!--begin::Card header-->
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="pt-2 ">
                            @can('create', App\Models\Entity\Trailer::class)
                            <div class="d-flex align-items-center py-8">
                                <a href="#modalTrailer" class="btn btn-danger fs-7 px-4 w-100 " data-toggle="modal"><img src="/assets/media/icons/system-icon/outline/Plus-3.svg" width="20px" alt="">Add Vehicle/Trailer</a>

                            </div>
                            @endcan
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="btn border fs-7 w-75" style="background-color: #fff"><img src="/assets/media/icons/system-icon/outline/Swap-1.svg" width="20px" alt=""> Syncronize Vehicles</a>
                                <a href="/vehicle/setting" class="btn border px-4" style="background-color: #fff"><img src="/assets/media/icons/system-icon/outline/Setting.svg" alt=""></a>
                            </div>

                            <div class="separator separator-dashed my-5"></div>
                            <!--begin::Notice-->
                            <div class="d-flex align-items-center position-relative my-1 pt-6">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="position-absolute ms-6">
                                    <img src="/img/Search.png" alt="">
                                </span>
                                <!--end::Svg Icon-->
                                <form action="{{route('trailer.search')}}" method="GET" class="w-100">
                                    <input type="text" name="search" data-kt-customer-table-filter="search"
                                    class="form-control form-control-lg ps-15" placeholder="Search...">
                                </form>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-8">
                                <a href="/vehicles" class="btn w-50"style="background-color: #fff">Vehicle </a>
                                <a href="/trailer" class="btn btn-danger w-50">Trailer </a>
                            </div>
                            <!--end::Notice-->
                            <!--begin::Items-->
                            <div class="py-2">
                                <p class="pt-4 fs-4 text-muted">List Trailer</p>
                                @if ($trailers->count())
                                <!--begin::Item-->
                                <div class="d-flex flex-stack pt-3 ">
                                    <div class="d-flex w-100">

                                        <div class="d-flex flex-column w-100">
                                            @foreach ($trailers as $key=>$model)
                                            <a href="javascript:void(0)" class="fs-5 text-danger btn-address fw-bolder text-hover-danger border p-3 my-1 {{$key==0?'text-danger':'text-dark'}}" style="border-radius: 8px; background-color:#fff;"
                                            onclick="changeAddress('{{$model->code_trailer}}','{{$model->monthly_maintenance}}','{{$model->ModelTrailer->trailer_model}}','{{$model->TypeTrailer->trailer_type}}', '{{$model->vehicle_connected}}', '{{$model->id}}')">{{$model->code_trailer}}</a>
                                            @include('modal.modaledittrailer')
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="pt-3 ">
                                    <div class="w-100">
                                        <div class="text-center w-100 mt-10">
                                            <h2>Empty Trailer</h2>
                                            <p>You do not have a trailer right now. add vehicle or trailer.</p>
                                        </div>
                                    </div>
                                    @can('create', App\Models\Entity\Trailer::class)
                                        <div class="text-center py-8">
                                            <a href="#modalTrailer" class="btn btn-danger fs-7 px-4 w-75 " data-toggle="modal"><img src="/assets/media/icons/system-icon/outline/Plus-3.svg" width="20px" alt="">Add Vehicle/Trailer</a>
                                        </div>
                                    @endcan
                                </div>
                                @endif
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
        @if ($trailers->count())
            <div class="container col-lg-7 col-xl-8" style="background-color: #FFF">
                <!--begin:::Tabs-->
                <div class="card my-5">
                    <div class="card-body pt-2">
                        <div class="d-flex justify-content-between">
                            <div class="w-100 mt-10">
                                <p class="ptrailer">Code Trailer</p>
                                <h3 class="fw-bolder heading-3 fs-1" id="vehicle-code_trailer">D 1234 ABC</h3>
                                <hr class="solid">
                                <div class="d-flex">
                                    <div class="col-lg-6 px-1">
                                        <p class="ptrailer mb-2 fs-7">Model Trailer</p>
                                        <h4 class="btrailer fw-bold pb-5" id="vehicle-model_trailer_id">Grand Max</h4>
                                        <p class="ptrailer mb-2 fs-7">Scheduling Maintained</p>
                                        <h4 class="btrailer fw-bold" id="vehicle-monthly_maintenance">20</h4>

                                    </div>
                                    <div class="col-lg-6 px-1">
                                        <p class="ptrailer mb-2 fs-7">Trailer Type</p>
                                        <h4 class="btrailer fw-bold pb-5" id="vehicle-type_trailer_id">Van</h4>
                                        <p class="ptrailer mb-2 fs-7">Last Maintained</p>
                                        <h4 class="btrailer fw-bold">20 May 2022</h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                @can('create', App\Models\Entity\Trailer::class)
                                    <a href="" data-toggle="modal" id="edit" class="btn border-0 p-0" style="border-radius: 8px;float: right">
                                        <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" alt="" style="float: right;">
                                    </a>
                                @endcan
                                <div class="img-fluid align-item-center mx-auto d-block">
                                    <img src="/img/Trailer.svg" alt="">
                                    <p class="text-center">Trailer Connected</p>
                                    <h3 class="text-primary text-center fs-6" id="vehicle_CONN">T-01, T-02</h3>
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
                                                <img src="/img/Search.png" alt="">
                                            </span>
                                            <!--end::Svg Icon-->
                                            <input type="text" data-kt-customer-table-filter="search"
                                                class="form-control form-control-lg ps-15 mx-2" placeholder="Search...">

                                                <button type="button" class="btn border mx-2" style="border-radius: 8px">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                                    <img src="/img/Download.png" alt="">
                                                    <!--end::Svg Icon-->
                                                </button>
                                        </div>

                                        <!--end::Search-->
                                    </div>

                                </div>
                            </div>
                        </nav>
                        <div class="d-flex flex-row-fluid mt-5">
                            <div class="ptrailer col-lg-3 col-md-3 subtitle-1">
                                Date
                            </div>
                            <div class="ptrailer col-lg-5 col-md-5 subtitle-1">
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
                                    <a class="fs-4" style="color: #6E6666" href="#">Detail <img src="/assets/media/icons/system-icon/outline/Arrow - Right.svg" alt="" >
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
                                    <a class="fs-4" style="color: #6E6666" href="#">Detail <img src="/assets/media/icons/system-icon/outline/Arrow - Right.svg" alt="" >
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
                                    <a class="fs-4" style="color: #6E6666" href="#">Detail <img src="/assets/media/icons/system-icon/outline/Arrow - Right.svg" alt="" >
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        @else
        <div class="card w-100 mt-8 border-0">

        </div>
        @endif
</div>

        <!--begin::Layout-->
{{-- @can('create', App\Models\Entity\Trailer::class) --}}
    @include('modal.modaltrailer')
{{-- @endcan --}}
<style>
        .ptrailer{
        font-size: 16px
    }
    .btrailer{
        font-size: 16px;
    }
    @media(max-width: 1200px) {
        .ptrailer{
            font-size: 0.80rem;;
        }
        .btrailer{
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

  let trailers = {!!$trailers!!};
  let trailerT = {!!$trailerT!!};
  let trailerM = {!!$trailerM!!};
    changeAddress(trailers[0].code_trailer,trailers[0].monthly_maintenance,trailerM[0].trailer_model,trailerT[0].trailer_type, trailers[0].vehicle_connected, trailers[0].id);

    function changeAddress(code_trailer, monthly_maintenance, trailer_model, trailer_type, vehicle_connected, id){
        $('#vehicle-code_trailer').html(code_trailer);
        $('#vehicle-model_trailer_id').html(trailer_model);
        $('#vehicle-monthly_maintenance').html(monthly_maintenance);
        $('#vehicle-type_trailer_id').html(trailer_type);
        $('#vehicle_CONN').html(vehicle_connected);
        $("#edit").attr("href", "#modaleditTrailer" + id);
    }

    $('.btn-address').on('click', function(){
        $('.btn-address').removeClass('text-danger');
        $('.btn-address').addClass('text-dark');
        $(this).removeClass('text-dark');
        $(this).addClass('text-danger');
    });
    changeAddress(trailers[0].code_trailer,trailers[0].monthly_maintenance,trailers[0].trailer_model,trailers[0].trailer_type, trailers[0].vehicle_connected, trailers[0].id);
</script>

@endsection
