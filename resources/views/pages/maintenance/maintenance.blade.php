@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container">
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
                <div class="subtitle-1 me-10 text-danger" style="border-bottom: 1px solid #FF0000">Maintenance</div>
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
                                <option value="" disabled selected>{{__('Select Role')}}</option>

                                <option value="">Admin</option>
                                <option value="">Member</option>
                            </select>
                        </div>
                        <div class="form-group mt-10 w-400px">
                            <label for="role" class="subtitle-1">Maintenance Type<span class="text-danger">*</span></label>
                            <select name="" id="" class="form-select mt-2">
                                <option value="" disabled selected>{{__('Select Maintenance Type')}}</option>
                                <option value="">Monthly</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mt-4 w-400px me-10">
                            <label for="role" class="subtitle-1">Select Vehicle<span class="text-danger">*</span></label>
                            <select name="" id="" class="form-select mt-2">
                                <option value="" disabled selected class="fw-bolder" >{{__('Vehicle')}}</option>
                                    <option class="fs-8" value="" disabled >&#160;&#160;&#160;&#160;{{__('Grand max')}}</option>
                                    <option value="">&#160;&#160;&#160;&#160;D 1123 ABC</option>
                                    <option value="">&#160;&#160;&#160;&#160;D 2130 BAC</option>
                                <option value="" disabled class="fw-bolder" >{{__('Trailer')}}</option>
                                <option class="fs-8" value="" disabled >&#160;&#160;&#160;&#160;{{__('Tridem Axle 40FT')}}</option>
                                <option value="">&#160;&#160;&#160;&#160;T-01</option>
                                <option value="">&#160;&#160;&#160;&#160;T-02</option>
                            </select>
                        </div>
                        <div class="form-group mt-4 w-400px">
                            {{-- <label for="role" class="subtitle-1">Date Maintenance<span class="text-danger">*</span></label> --}}
                            <label for="monthly_maintenance"
                            class="fw-bold text-black mt-4">{{__('Monthly Maintenance')}} <span
                            class="text-danger">*</span></label>
                            </label>
                            <div class="input-group date border border-secondary  rounded" data-provide="datepicker">
                                <input type="date" id="monthly_maintenance" name="monthly_maintenance" class="datepicker form-control  border-0 rounded"  required value={{old('monthly_maintenance')}}>
                                @error('monthly_maintenance')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="form-group mt-4 w-400px me-10">
                            <label for="name"
                            class="fw-bold text-black subtitle-1">{{__('Report by')}} <span
                                class="text-danger">*</span></label>
                            <input type="text" id="name" name="name" class="form-control mt-2"
                                placeholder="Ex. John" maxlength="200" value={{old('name')}}>
                            @error('name')
                            <div class="invalid-feedback d-flex">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mt-4 w-400px ">
                            <label for="role" class="subtitle-1">Problem<span class="text-danger">*</span></label>
                            <select name="" id="myProblem" class="form-select mt-2">
                                <option value="" disabled selected>{{__('Select Problem')}}</option>
                                <option value="">Lorem ipsum dolor sit amet</option>
                                <option value="">Consectetur adipiscing elit</option>
                                <option value="">Nullam hendrerit purus ut faucibus commodo </option>
                                <option value="">Pellentesque consectetur imperdiet nibh</option>
                                <option class="text-danger" value="modalProblem">+&#160;&#160;&#160;&#160;Add other problems..</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-danger text-3 rounded-8 w-200px p-md-3 h-100 me-4">Create Maintenance</button>
                    <button class="btn border border-danger text-danger text-3 rounded-8 w-200px p-md-3 h-100">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalProblem" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content m-lg-10 p-3 p-3">
                <div class="modal-header">
                    <h4 class="text-color-dark font-weight-semibold text-transform-none text-5 m-0"
                        id="exampleModalLongTitle">Add Maintenance Problem</h4>
                    <button type="button" class="close-share cancel border-0" style="background-color: transparent" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mb-3 mb-lg-0 col-lg-12">
                                <label for="name"
                                class="fw-bold text-black subtitle-1">{{__('Problem')}} <span class="text-danger">*</span></label>
                                {{-- <input type="text" id="name" name="name" class="form-control mt-2"
                                    placeholder="Write your problem here." maxlength="200" value={{old('name')}}> --}}
                                <textarea name="name" id="name" class="form-control mt-2" placeholder="Write your problem here." maxlength="200" value={{old('name')}} cols="55" rows="4"></textarea>
                                @error('name')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer border-0" style="flex-wrap: nowrap;">
                    <div class="col-md-6 text-center">
                        <button class="btn btn-danger text-3 rounded-8 w-75 p-md-3 h-100" type="submit"
                            id="downloadWp" name="downloadWp">Submit</button>
                    </div>
                    <div class="col-md-6 text-center">
                        <button type="reset" class="btn cancel border border-danger text-danger text-3 rounded-8 w-75 p-md-3 h-100 close-share" data-dismiss="modal" aria-label="Close"
                            id="cancel" name="cancel">Cancel</button>
                    </div>
                </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){ //Make script DOM ready
    $('#myProblem').change(function() { //jQuery Change Function
        var opval = $(this).val(); //Get value from select element
        if(opval=="modalProblem"){ //Compare it and if true
            $('#modalProblem').modal("show"); //Open Modal
        }
    });
});

$(".cancel").click(function(){
            $("#modalProblem").modal('hide');
        });


</script>
@endsection
