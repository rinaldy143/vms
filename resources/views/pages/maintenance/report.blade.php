@extends('layouts.master')

@section('content')
<div class="content">
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
    <div class="nav" style="margin-top: 46px">
        <a href="/maintenance/report">
            <div class="subtitle-1 me-10">Report</div>
        </a>
        <a href="/maintenance/maintenance">
            <div class="subtitle-1 me-10">Maintenance</div>
        </a>
        <a href="">
            <div class="subtitle-1 me-10">Work Order</div>
        </a>
    </div>
    <div class="card w-1000px mt-8">
        <div class="card-body">
            <div class="heading-4">
                <span class="rounded me-4"><img src="/img/Ellipse 47.png" alt=""></span>
                Request Maintenance
            </div>
            <div class="d-flex flex-row-fluid mt-10">
                <div class="col-lg-1 subtitle-1">
                    No
                </div>
                <div class="col-lg-3 subtitle-1">
                    Vehicle
                </div>
                <div class="col-lg-2 subtitle-1">
                    Type
                </div>
                <div class="col-lg-2 subtitle-1">
                    Date
                </div>
                <div class="col-lg-3 subtitle-1">
                    Problem
                </div>
            </div>
            <div class="scroll">
                <div class="d-flex flex-row-fluid mt-6">
                    <div class="col-lg-1 subtitle-1">
                        1
                    </div>
                    <div class="col-lg-3 subtitle-1">
                        <img src="/img/image 1.png" alt="">
                    </div>
                    <div class="col-lg-2 body-1">
                        Monthly
                    </div>
                    <div class="col-lg-2 body-1">
                        28/08/2022
                    </div>
                    <div class="col-lg-3 subtitle-1">
                        Rem Truck Bunyi
                    </div>
                </div>
                <div class="d-flex flex-row-fluid mt-6">
                    <div class="col-lg-1 subtitle-1">
                        1
                    </div>
                    <div class="col-lg-3 subtitle-1">
                        <img src="/img/image 1.png" alt="">
                    </div>
                    <div class="col-lg-2 body-1">
                        Monthly
                    </div>
                    <div class="col-lg-2 body-1">
                        28/08/2022
                    </div>
                    <div class="col-lg-3 subtitle-1">
                        Rem Truck Bunyi
                    </div>
                </div>
                <div class="d-flex flex-row-fluid mt-6">
                    <div class="col-lg-1 subtitle-1">
                        1
                    </div>
                    <div class="col-lg-3 subtitle-1">
                        <img src="/img/image 1.png" alt="">
                    </div>
                    <div class="col-lg-2 body-1">
                        Monthly
                    </div>
                    <div class="col-lg-2 body-1">
                        28/08/2022
                    </div>
                    <div class="col-lg-3 subtitle-1">
                        Rem Truck Bunyi
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row mt-10">
        <div class="flex-column">
            <div class="card" style="width: 450px; height: 383px; margin-right: 40px">
                <div class="card-body">
                    <div class="heading-4">Report Maintenances</div>
                    <hr>
                    <img class="card-img" src="/img/Group 2283.png" alt="">
                </div>
            </div>
        </div>
        <div class="flex-column">
            <div class="card" style="width: 500px; height: 383px">
                <div class="card-body">
                    <div class="heading-4">Users</div>
                    <hr>
                    <img class="card-img" src="/img/Frame 2282.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
