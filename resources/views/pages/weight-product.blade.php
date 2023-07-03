@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container">
        {{-- <div class="text-black fw-bolder fs-2 mb-2 mt-5">Users</div> --}}
        <div class="d-flex justify-content-between align-items-center">
            <div class="text-black fw-bolder heading-3 fs-1 me-3">Weight Product </div>
        </div>
        <!--begin::Row-->
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container px-0 py-5">
                <div class="navbar-collapse" style="justify-content: space-between">
                    <!-- Left Side Of Navbar -->
                    <div class="card-title">
                        <!--begin::Search-->
                        {{-- <button type="button" class="btn btn-danger me-3 py-2 font-weight-bolder " style="border-radius: 8px;">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                            <img class="pt-2" src="img/Plus.png" alt="">
                            <!--end::Svg Icon-->Restock
                        </button> --}}
                        {{-- @can('create', App\Models\Entity\Sparepart::class) --}}
                        <a class="btn btn-danger me-3 font-weight-bolder py-2" style="border-radius: 8px;" data-toggle="modal"
                        href="#modalKriteria" title="Restock">
                        <img class="pt-2" src="/img/Plus.png" alt="">
                        Add Kriteria
                        </a>

                        {{-- @endcan --}}
                        <!--end::Search-->
                    </div>

                    <!-- Right Side Of Navbar -->
                    <div class="card-title">
                        <!--begin::Search-->
                        <button type="button" class="btn me-3 p-0 border" style="border-radius: 8px">
                            <ul class="menu-nav p-0 m-0">
                                <li class="menu-item dropdown ">
                                    <form action="{{ route('weightproduct.updatePrioritas') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-outline-danger">Update Prioritas</button>
                                    </form>



                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{route('spareparts.ascending')}}"> <img src="/assets/media/icons/system-icon/outline/Arrow - Up-1.svg" width="25px" alt=""> Ascending</a>
                                            <a class="dropdown-item" href="{{route('spareparts.descending')}}"> <img src="/assets/media/icons/system-icon/outline/Arrow - Down-1.svg" width="25px" alt=""> Descending</a>
                                            <a class="dropdown-item" href="{{route('spareparts.highStock')}}"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> High Stock</a>
                                            <a class="dropdown-item" href="{{route('spareparts.lowStock')}}"> <img src="/assets/media/icons/system-icon/outline/Delete.svg" width="25px" alt=""> Low Stock</a>
                                    </div>
                                </li>
                            </ul>
                        </button>

                        <!--end::Search-->
                    </div>

                </div>
            </div>
        </nav>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row pt-5 pb-5">
                <div class="col-lg-12 col-md-6 col-11 pb-5">
                    <!--begin::Card-->
                    @foreach ($weight_product as $item)

                    <div class="card w-100 mt-6">
                        <div class="card-body">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col" class="fw-bold" style="font-size: 16px;">Kriteria</th>
                                        <th scope="col" class="fw-bold" style="font-size: 16px;">Nilai Bobot</th>
                                        <th scope="col" class="fw-bold" style="font-size: 16px;">Prioritas</th>
                                        <th scope="col" class="fw-bold" style="font-size: 16px;">Bobot</th>
                                        {{-- <th scope="col" class="fw-bold" style="font-size: 16px;">Activity Maintenance</th>
                                        <th scope="col" class="fw-bold" style="font-size: 16px;">Detail</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row" style="font-size: 16px;">
                                        <div class="d-flex align-items-center">
                                            {{-- <img src="/img/image 1.png" alt=""> --}}
                                            <div class="ms-5">
                                                <h1 style="font-size: 16px;margin-bottom: 0;">{{$item->kriteria}}</h1>
                                                {{-- <p class="text-primary" style="font-size: 14px;margin-bottom: 0;">T-01, T-02</p> --}}
                                            </div>
                                        </div>
                                    </th>
                                        <td class="col-3" style="font-size: 16px;">
                                            {{$item->nilai_bobot}}
                                        </td>
                                        <td class="col-3" style="font-size: 16px;">
                                            {{$item->prioritas}}
                                        </td>
                                        <td class="col-3" style="font-size: 16px;">
                                            {{$item->bobot}}

                                        </td>
                                        {{-- <td style="font-size: 16px;">
                                            {{$item->activity_maintenance}}
                                        </td>
                                        <td>
                                            <a class="btn btn-danger text-3 rounded-8 w-100 p-md-3 h-100 me-4" href="{{route('workorder.show', $item->id)}}">Choose</a>
                                        </td> --}}
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach
                            <!--end::Card-->
                </div>
                <div class="row mb-12">
                    <div class="col-sm-12 col-md-7 d-flex align-items-center w-100 justify-content-md-end">
                        <div class="dataTables_paginate paging_simple_numbers" id="kt_customers_table_paginate">
                            <ul class="pagination">
                                {{-- {!! $spareparts->links() !!} --}}
                            </ul>
                        </div>
                    </div>
                </div>
        </div>

        <!--end::Row-->
    </div>
    {{-- <div> --}}
        @include('modal.modalKriteria')
    {{-- </div> --}}
    <!-- Modal contact-->


<style>
    .imgInput{
        display: none;
    }
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

    @media(max-width: 767px) {
        .sparepart2{
            padding-top: 20%;
        }
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


<script>

</script>

@endsection
