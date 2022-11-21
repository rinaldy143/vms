@extends('layouts.master')

@section('content')
<div class="content">
    <div class="heading-3 position-absolute">Maintenances</div>
    <div class="d-flex justify-content-end">
        <div class="d-flex align-items-center position-relative my-1">
            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
            <span class="position-absolute ms-6">
                <img src="img/Search.png" alt="">
            </span>
            <!--end::Svg Icon-->
            <input type="text" data-kt-customer-table-filter="search"
                class="form-control form-control-lg w-325px h-50px ps-15" placeholder="Search...">

            <div class="px-10 btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px">
                <img src="img/Frame 1637.png" alt="">
            </div>
        </div>
    </div>
    <div class="nav" style="margin-top: 46px">
        <a href="/maintenances">
            <div class="subtitle-1 me-10">Report</div>
        </a>
        <a href="/maintenance">
            <div class="subtitle-1 me-10">Maintenance</div>
        </a>
        <a href="">
            <div class="subtitle-1 me-10">Work Order</div>
        </a>
    </div>
    <div class="card w-1000px mt-8">
        <div class="card-body">
            <div class="heading-4 mt-10">
                Create Request Maintenance
            </div>
            <form action="#">
                <div class="form-group mt-10 w-400px">
                    <label for="role" class="subtitle-1">Role<span class="text-danger">*</span></label>
                    <select name="" id="" class="form-select">
                        <option value="">Test</option>
                    </select>
                </div>
                <div class="form-group mt-4 w-400px">
                    <label for="role" class="subtitle-1">Select Vehicle<span class="text-danger">*</span></label>
                    <select name="" id="" class="form-select">
                        <option value="">Test</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
