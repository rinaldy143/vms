@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container">
        <div class="heading-3 position-absolute">Work Order</div>
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
        <div class="nav my-10">
            <a href="/maintenance/report">
                <div class="subtitle-1 me-10">Report</div>
            </a>
            <a href="/maintenance">
                <div class="subtitle-1 me-10">Maintenance</div>
            </a>
            <a href="/workorder">
                <div class="subtitle-1 me-10 text-danger" style="border-bottom: 1px solid #FF0000">Work Order</div>
            </a>
            <a href="/maintenance/Sparepart">
                <div class="subtitle-1 me-10">Sparepart</div>
            </a>
        </div>
            <h2 class="my-5">Maintenance</h2>
            <a class="btn btn-danger text-3 rounded-8 w-200px p-md-3 h-100 " href="/workorder">list work order</a>
            {{-- <a class="btn border border-dark text-dark text-3 rounded-8 w-200px p-md-3 h-100 me-4" href="#">onprocess work order</a> --}}
            <div class="d-flex align-items-center position-relative my-5">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="position-absolute ms-6">
                    <img src="/img/Search.png" alt="">
                </span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-customer-table-filter="search"
                    class="form-control form-control-lg w-100 h-50px ps-15" placeholder="Search...">
                <div class="card-title" style="padding-left: 5px; margin-left: 5px;">
                    <!--begin::Search-->
                    <button type="button" class="btn me-3 px-5 py-1 border" style="border-radius: 8px">
                        <ul class="menu-nav p-0 m-0">
                            <li class="menu-item dropdown ">
                                    <a class="nav-link text-dark" style="padding: 11px 11px;" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="d-flex">
                                            <img class="mx-2" src="/img/Filter 2.png" alt="">
                                            <strong>Filter</strong>
                                        </span>
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
                </div>
            </div>
                @foreach ($maintenance as $item)

                @if (isset($item->workorder) && $item->workorder->photo !== null)
                @else
                <div class="card w-100 mt-6">
                    <div class="card-body">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col" class="fw-bold" style="font-size: 16px;">CN Unit Vehicle</th>
                                    <th scope="col" class="fw-bold" style="font-size: 16px;">Priority</th>
                                    <th scope="col" class="fw-bold" style="font-size: 16px;">Start BD Date</th>
                                    <th scope="col" class="fw-bold" style="font-size: 16px;">Status</th>
                                    <th scope="col" class="fw-bold" style="font-size: 16px;">Activity Maintenance</th>
                                    <th scope="col" class="fw-bold" style="font-size: 16px;">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row" style="font-size: 16px;">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/image 1.png" alt="">
                                        <div class="ms-5">
                                            <h1 style="font-size: 16px;margin-bottom: 0;">{{$item->vehicle->plat_number}}</h1>
                                            <p class="text-primary" style="font-size: 14px;margin-bottom: 0;">T-01, T-02</p>
                                        </div>
                                    </div>
                                </th>
                                    <td class="col-2" style="font-size: 16px;">
                                        {{$item->priority}}
                                    </td>
                                    <td style="font-size: 16px;">
                                        {{$item->created_at}}
                                    </td>
                                    <td style="font-size: 16px;">
                                        @if(empty($item->workorder->assign_by))
                                        Waiting Start Breakdown
                                        @elseif($item->workorder->analysist !== null)
                                        On Maintenance
                                        @else
                                        Waiting End Breakdown
                                        @endif
                                    </td>
                                    <td style="font-size: 16px;">
                                        {{$item->activity_maintenance}}
                                    </td>
                                    <td>
                                        <a class="btn btn-danger text-3 rounded-8 w-100 p-md-3 h-100 me-4" href="{{route('workorder.show', $item->id)}}">Choose</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
                @endforeach

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

@endsection
