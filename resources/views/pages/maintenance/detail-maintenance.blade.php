@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container">
            <div class="heading-4 position-absolute">
                <a class="text-dark" href="/list-maintenance">< Back</a>
            </div>

            <div class=" py-20">
                <h1 class="">Detail Maintenance</h1>
            </div>
            <div class="card w-100 mt-8">
                {{-- @foreach ($maintenance as $item) --}}

                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <img src="/img/image 1.png" alt="">
                        <div class="ms-5">
                            <h1 style="font-size: 16px;margin-bottom: 0;">{{$maintenance->vehicle->plat_number}}</h1>
                            <p class="text-primary" style="font-size: 14px;margin-bottom: 0;">T-01, T-02</p>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3>Maintenance</h3>
                        <div class="text-dark">
                            <div class="d-flex">
                                <div class="col-lg-6">
                                    <div class="d-flex row">
                                        <div class="col-lg-6">
                                            <p>Start BD Date</p>
                                            <p>Breakdown Type</p>
                                            <p>Unit Condition</p>
                                            <p>Created by</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: {{$maintenance->created_at}}</p>
                                            <p>: {{$maintenance->breakdown_type}}</p>
                                            <p>: {{$maintenance->unit_condition}}</p>
                                            <p>: {{$maintenance->report_by}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex row">
                                        <div class="col-lg-6">
                                            <p>KM Unit</p>
                                            <p>HM Unit</p>
                                            <p>Activity Maintenance</p>
                                            <p>Priority</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: {{$maintenance->km_Unit}} KM</p>
                                            <p>: {{$maintenance->hm_Unit}} HM</p>
                                            <p>: {{$maintenance->activity_maintenance}}</p>
                                            <p>: {{$maintenance->priority}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-10">
                                <div class="col-lg-3">
                                    <p>Problem Description</p>
                                </div>
                                <div class="col-lg-9">
                                    <p>: {{$maintenance->report_problem}}</p>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('maintenance.update', ($maintenance->id))}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <h3 class="mt-10">Approval Doc</h3>
                            <div class="d-flex row">
                                <div class="mb-10">
                                    <div class="form-group mt-4 w-100 me-10">
                                        <label for="analysist" class="fw-bold text-black subtitle-1">{{__('Analysist')}} <span class="text-danger">*</span></label>
                                        <textarea type="text" id="analysist" name="analysist" class="form-control mt-2"
                                            placeholder="Write your analyst here" maxlength="200" rows="4" cols="50">{{old('analysist')}}</textarea>
                                        @error('analysist')
                                        <div class="invalid-feedback d-flex">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- <a class="btn me-3 text-danger font-weight-bolder py-2" style="border: 1px solid red; border-radius: 8px;"
                            href="#" title="Add Sparepart">
                            Reject
                            </a>
                            <a class="btn btn-danger me-3 font-weight-bolder py-2" style="border-radius: 8px;"
                            href="#" title="Restock">
                            Accept
                            </a> --}}
                            <div class="row">
                                {{-- <form action="{{route('users.destroy', ($maintenance->id))}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form> --}}
                                <button class="btn border mx-3 border-danger text-danger text-3 rounded-8 w-200px p-md-3 h-100">reject</button>
                                <input class="btn shadow btn-danger text-3 rounded-8 w-200px p-md-3 h-100" type="submit" value="Accept">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

@endsection
