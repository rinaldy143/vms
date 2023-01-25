@extends('layouts.master')

@section('content')
<div class="container">
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
            <a href="/maintenance/workorder">
                <div class="subtitle-1 me-10">Work Order</div>
            </a>
        </div>
        <div class="card w-1000px mt-8">
            <div class="card-body">
                <div class="heading-4">
                    Work Order
                </div>
                <div class="position-relative" style="transform: rotate(90deg);top: -85px ">
                    <div style="border: 1px solid #000000;position: relative;top: 480px;width: 46px;left: 650px"></div>
                    <div style="border: 1px solid #CFCCCC;position: relative;top: 478px;width: 180px;left: 696px"></div>
                </div>
                <table class="table mt-10 align-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-bold" style="font-size: 16px;">No</th>
                            <th scope="col" class="fw-bold" style="font-size: 16px;">Vehicle</th>
                            <th scope="col" class="fw-bold" style="font-size: 16px;">Type</th>
                            <th scope="col" class="fw-bold" style="font-size: 16px;">Date</th>
                            <th scope="col" class="fw-bold" style="font-size: 16px;">Problem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row" style="font-size: 16px;">1</th>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="/img/image 1.png" alt="">
                                <div class="ms-5">
                                    <h1 style="font-size: 16px;margin-bottom: 0;">D 1123 ABC</h1>
                                    <p style="text-muted font-size: 14px;margin-bottom: 0;">Grand Max</p>
                                </div>
                            </div>
                        </td>
                        <td style="font-size: 16px;">Monthly</td>
                        <td style="font-size: 16px;">28/08/2020</td>
                        <td>
                            <div class="d-flex justify-content-between w-75" style="background-color: #F5F5F5;height: 64px;">
                                <h1 style="font-size: 16px;font-weight: 400;padding: 8px;border-radius: 8px;">Rem truck bunyi</h1>
                                <div style="position: absolute;right: 30px; top: 190px;">
                                    <img src="/assets/media/icons/system-icon/outline/Kebab.svg" alt="">
                                </div>
                            </div>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row" style="font-size: 16px;">2</th>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="/img/image 1.png" alt="">
                                <div class="ms-5">
                                    <h1 style="font-size: 16px;margin-bottom: 0;">D 1123 ABC</h1>
                                    <p style="text-muted font-size: 14px;margin-bottom: 0;">Grand Max</p>
                                </div>
                            </div>
                        </td>
                        <td style="font-size: 16px;">Monthly</td>
                        <td style="font-size: 16px;">28/08/2020</td>
                        <td>
                            <div class="d-flex justify-content-between w-75" style="background-color: #F5F5F5;height: 64px;">
                                <h1 style="font-size: 16px;font-weight: 400;padding: 8px;border-radius: 8px;">Rem truck bunyi</h1>
                                <div style="position: absolute;right: 30px; top: 275px;">
                                    <img src="/assets/media/icons/system-icon/outline/Kebab.svg" alt="">
                                </div>
                            </div>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row" style="font-size: 16px;">3</th>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="/img/image 1.png" alt="">
                                <div class="ms-5">
                                    <h1 style="font-size: 16px;margin-bottom: 0;">D 1123 ABC</h1>
                                    <p style="text-muted font-size: 14px;margin-bottom: 0;">Grand Max</p>
                                </div>
                            </div>
                        </td>
                        <td style="font-size: 16px;">Monthly</td>
                        <td style="font-size: 16px;">28/08/2020</td>
                        <td>
                            <div class="d-flex justify-content-between w-75" style="background-color: #F5F5F5;height: 64px;">
                                <h1 style="font-size: 16px;font-weight: 400;padding: 8px;border-radius: 8px;">Rem truck bunyi</h1>
                                <div style="position: absolute;right: 30px; top: 360px;">
                                    <img src="/assets/media/icons/system-icon/outline/Kebab.svg" alt="">
                                </div>
                            </div>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
