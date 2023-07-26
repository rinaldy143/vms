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
                                @can('create', App\Models\Entity\Trailer::class)
                                    <a href="#modalVehicle" class="btn btn-danger fs-7 px-4 w-100 " data-toggle="modal"><img src="/assets/media/icons/system-icon/outline/Plus-3.svg" width="20px" alt="">Add Vehicle</a>
                                @endcan

                            </div>
                            {{-- <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="btn border fs-7 w-75" style="background-color: #fff"><img src="/assets/media/icons/system-icon/outline/Swap-1.svg" width="20px" alt=""> Syncronize Vehicles</a>
                                <a href="/vehicle/setting" class="btn border px-4" style="background-color: #fff"><img src="/assets/media/icons/system-icon/outline/Setting.svg" alt=""></a>
                            </div> --}}

                            <div class="separator separator-dashed my-5"></div>
                            <!--begin::Notice-->
                            <div class="d-flex align-items-center position-relative my-1 pt-6">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="position-absolute ms-6">
                                    <img src="/img/Search.png" alt="">
                                </span>
                                <!--end::Svg Icon-->
                                <form action="{{route('vehicles.search')}}" method="GET" class="w-100">
                                    <input type="text" name="search" data-kt-customer-table-filter="search"
                                    class="form-control form-control-lg ps-15" placeholder="Search...">
                                </form>
                            </div>
                            {{-- <div class="d-flex justify-content-between align-items-center pt-8">
                                <a href="/vehicles" class="btn btn-danger w-50">Vehicle </a>
                                <a href="/trailer" class="btn w-50"style="background-color: #fff">Trailer </a>
                            </div> --}}
                            <!--end::Notice-->
                            <!--begin::Items-->
                            <div class="py-2">
                                <p class="pt-4 fs-4 text-muted">List Vehicle</p>
                                @if ($vehicles->count())
                                <!--begin::Item-->
                                @foreach ($vehicles as $key=>$model)


                                <div class="d-flex flex-stack pt-3 ">
                                    <div class="d-flex w-100">

                                        <div class="d-flex flex-column w-100">
                                            <a href="javascript:void(0)" id="changeLink" class="fs-5 text-danger btn-address fw-bolder text-hover-danger border p-3 my-1 {{$key==0?'text-danger':'text-dark'}}" style="border-radius: 8px; background-color:#fff;"
                                            onclick="changeAddress('{{$model->plat_number}}', '{{$model->monthly_maintenance}}', '{{$model->ModelVehicle->vehicle_model}}', '{{$model->TypeVehicle->vehicle_type}}', '{{$model->id}}', '{{$model->requestMaintenances->last()->dampak ?? '-'}}', '{{$model->requestMaintenances->last()->WorkOrder->updated_at ?? '-'}}', '{{'/history/' . ($model->requestMaintenances->last()->id ?? '#')}}');">{{$model->plat_number}}</a>

                                        </div>
                                    </div>
                                </div>
                                @include('modal.modaleditvehicle')

                                @endforeach

                                @else
                                <div class="pt-3 ">
                                    <div class="w-100">
                                        <div class="text-center w-100 mt-10">
                                            <h2>Empty Vehicle</h2>
                                            <p>You do not have a vehicle right now. add vehicle or trailer.</p>
                                        </div>
                                    </div>
                                    @can('create', App\Models\Entity\Trailer::class)
                                        <div class="text-center py-8">
                                            <a href="#modalVehicle" class="btn btn-danger fs-7 px-4 w-75 " data-toggle="modal"><img src="/assets/media/icons/system-icon/outline/Plus-3.svg" width="20px" alt="">Add Vehicle/Trailer</a>
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
        @if ($vehicles->count())
            <div class="container col-lg-7 col-xl-8" style="background-color: #FFF">
                <!--begin:::Tabs-->
                <div class="card my-5">
                    <div class="card-body pt-2">
                        <div class="d-flex justify-content-end">
                            @can('create', App\Models\Entity\Trailer::class)
                                <form id="delete" style="padding-left: 40px;margin-left: 40px;" action="{{route('vehicles.destroy', ($vehicles[0]->id))}}" method="POST">
                                    {{-- <a class="dropdown-item" data-toggle="modal" id="btn1" href="#modaleditUser{{$model->id}}"> <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" width="25px" alt=""> Update</a> --}}
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 btn-primary-outline btn-link" style="background-color: transparent"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""></button>
                                    <a href="#modaleditvehicle{{$vehicles[0]->id}}" data-toggle="modal" id="edit" class="btn border-0 p-0" style="border-radius: 8px;float: right">
                                        <img src="/assets/media/icons/system-icon/outline/Edit Square.svg" alt="" style="float: right;">
                                    </a>
                                </form>
                            @endcan
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="w-100 mt-10">
                                <p class="pvehicle">Plate Number</p>
                                <h3 class="fw-bolder heading-3 fs-1" id="vehicle-plat_number">{{$vehicles[0]->plat_number}}</h3>
                                <hr class="solid">
                                <div class="d-flex">
                                    <div class="col-lg-6 px-1">
                                        <p class="pvehicle mb-2 fs-7" >Model Vehicle</p>
                                        <h4 class="bvehicle fw-bold pb-5" id="vehicle-model_vehicle_id"> {{$vehicles[0]->ModelVehicle->vehicle_model}}</h4>
                                        <p class="pvehicle mb-2 fs-7">Scheduling Maintained</p>
                                        <h4 class="bvehicle fw-bold" id="vehicle-monthly_maintenance">{{$vehicles[0]->monthly_maintenance}}</h4>
                                        {{-- {{dd($vehicles[0]->requestMaintenances->last()->dampak)}} --}}


                                    </div>
                                    <div class="col-lg-6 px-1">
                                        <p class="pvehicle mb-2 fs-7">Vehicle Type</p>
                                        <h4 class="bvehicle fw-bold pb-5" id="vehicle-type_vehicle_id">{{$vehicles[0]->TypeVehicle->vehicle_type}}</h4>
                                        <p class="pvehicle mb-2 fs-7">Last Maintained</p>
                                        <h4 class="bvehicle fw-bold" id="vehicle-last-update">{{$vehicles[0]->requestMaintenances->last()->WorkOrder->updated_at ?? '-'}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                {{-- <button type="submit" class="border-0 btn-white">  <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""></button> --}}
                                <div class="img-fluid align-item-center mx-auto d-block">
                                    <img src="/img/Mask group.svg" alt="">
                                    {{-- <p class="text-center">Trailer Connected</p>
                                    <h3 class="text-primary text-center fs-4">T-01, T-02</h3> --}}
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
                                            Latest Maintained
                                        </h2>
                                        <!--end::Search-->
                                    </div>

                                    <!-- Right Side Of Navbar -->
                                    {{-- <div class="card-title">
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
                                    </div> --}}

                                </div>
                            </div>
                        </nav>
                        <div class="d-flex flex-row-fluid mt-5">
                            <div class="pvehicle col-lg-3 col-md-3 subtitle-1">
                                Date
                            </div>
                            <div class="pvehicle col-lg-5 col-md-5 subtitle-1">
                                Dampak
                            </div>

                        </div>
                        <hr class="solid">
                        <div class="scroll">
                            <div class="d-flex flex-row-fluid mt-6">
                                <div class="col-lg-3 col-md-3 subtitle-1 fw-bold" id="vehicle-last-update">
                                        <h4 class="bvehicle fw-bold" id="vehicle-last-update1">{{$vehicles[0]->requestMaintenances->last()->WorkOrder->updated_at ?? '-'}}</h4>
                                </div>
                                <div class="col-lg-5 col-md-5 subtitle-1">
                                    <h4 class="bvehicle fw-bold pb-5" id="vehicle-last-maintain">{{$vehicles[0]->requestMaintenances->last()->dampak ?? '-'}}</h4>
                                </div>
                                <div class=" col-lg-4 col-md-4" style="text-align: right" >
                                    <a class="fs-4" id="vehicle-rm"  style="color: #6E6666" href="{{'/history/' . ($vehicles[0]->requestMaintenances->last()->id ?? '#')}}">Detail <img src="/assets/media/icons/system-icon/outline/Arrow - Right.svg" alt="" >
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
<div>
    @include('modal.modalvehicle')
</div>
<div>
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

  let vehicles = {!!$vehicles!!};
  let vehiclesT = {!!$vehiclesT!!};
  let model_vehicle = {!!$model_vehicle!!};
  let rm = {!!$rm!!};
  let wo = {!!$wo!!};

//   let t = document.getElementById("edit").href;
    // changeAddress(vehicles[0].plat_number,vehicles[0].monthly_maintenance,model_vehicle[0].vehicle_model,vehiclesT[0].vehicle_type,vehicles[0].id);

    function changeAddress(plat_number, monthly_maintenance, vehicle_model, vehicle_type, id, dampak, updated_at, rm_id ){
        $('#vehicle-plat_number').html(plat_number);
        $('#vehicle-model_vehicle_id').html(vehicle_model);
        $('#vehicle-monthly_maintenance').html(monthly_maintenance);
        $('#vehicle-type_vehicle_id').html(vehicle_type);
        $('#vehicle-last-maintain').html(dampak);
        $('#vehicle-last-update').html(updated_at);
        $('#vehicle-last-update1').html(updated_at);
        $('#vehicle-rm').attr("href", rm_id);

        // $('#edit').html(id);
        // $('#edit').attr('href', "#modaleditvehicle");
        // var href = $(this).attr('href');

        var url = "{{ route('vehicles.destroy', '') }}";
        $("#delete").attr("action", url + '/' + id);
        $("#edit").attr("href", "#modaleditvehicle" + id);

    }

    $('.btn-address').on('click', function(){
        $('.btn-address').removeClass('text-danger');
        $('.btn-address').addClass('text-dark');
        $(this).removeClass('text-dark');
        $(this).addClass('text-danger');
    });
    // changeAddress(vehicles[0].plat_number,vehicles[0].monthly_maintenance,model_vehicle[0].vehicle_model,vehiclesT[0].vehicle_type,vehicles[0].id);


    // document.getElementById("changeLink").onclick = function() {
    // document.getElementById("edit").href="xyz.php";
    // return false;
    // };

</script>

@endsection
