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
        <a href="/maintenance/report">
            <div class="subtitle-1 me-10">Report</div>
        </a>
        <a href="/maintenance/maintenance">
            <div class="subtitle-1 me-10">Maintenance</div>
        </a>
        <a href="/maintenance/workorder">
            <div class="subtitle-1 me-10">Work Order</div>
        </a>
    </div>
    <div class="card w-1000px mt-8 mb-10">
        <div class="card-body">
            <div class="heading-4">
                Create Request Maintenance
            </div>
            <form action="#">
                <div class="row">
                    <div class="form-group mt-10 w-400px me-10">
                        <label for="role" class="subtitle-1">Role<span class="text-danger">*</span></label>
                        <select name="" id="" class="form-select mt-2">
                            <option value="">Test</option>
                        </select>
                    </div>
                    <div class="form-group mt-10 w-400px">
                        <label for="role" class="subtitle-1">Maintenance Type<span class="text-danger">*</span></label>
                        <select name="" id="" class="form-select mt-2">
                            <option value="">Test</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group mt-4 w-400px me-10">
                        <label for="role" class="subtitle-1">Select Vehicle<span class="text-danger">*</span></label>
                        <select name="" id="" class="form-select mt-2">
                            <option value="">Test</option>
                        </select>
                    </div>
                    <div class="form-group mt-4 w-400px">
                        <label for="role" class="subtitle-1">Date Maintenance<span class="text-danger">*</span></label>
                        <select name="" id="" class="form-select mt-2">
                            <option value="">Test</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-10">
                    <div class="form-group mt-4 w-400px me-10">
                        <label for="role" class="subtitle-1">Report by</label>
                        <select name="" id="" class="form-select mt-2">
                            <option value="">Test</option>
                        </select>
                    </div>
                    <div class="form-group mt-4 w-400px">
                        <label for="role" class="subtitle-1">Problem<span class="text-danger">*</span></label>
                        <select name="" id="" class="form-select h-80px mt-2">
                            <option value="">Test</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-danger text-3 rounded-8 w-200px p-md-3 h-100 me-4">Create Maintenance</button>
                <button class="btn border border-danger text-danger text-3 rounded-8 w-200px p-md-3 h-100">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection
