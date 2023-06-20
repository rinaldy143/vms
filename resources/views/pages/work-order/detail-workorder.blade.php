@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container">
            <div class="heading-4 position-absolute">
                <a class="text-dark" href="/workorder">< Back</a>
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
                            <h3>Approval Doc</h3>
                            <div class="d-flex mt-10">
                                <div class="col-lg-3">
                                    <p>Approved By</p>
                                    <p>Analysist</p>
                                </div>
                                <div class="col-lg-9">
                                    <p>: {{$maintenance->aprove_by}}</p>
                                    <p>: {{$maintenance->analysist}}</p>
                                </div>
                            </div>
                            <h2>Maintainer</h2>
                            {{-- <form action="{{route('workorder.store')}}" method="post"enctype="multipart/form-data">
                                @csrf --}}
                                <div class="d-flex mt-10">
                                    <div class="col-lg-3">
                                        <p>Assign By</p>
                                    </div>
                                    <div class="col-lg-9">
                                        @if ($maintenance->workorder !== null)
                                        : {{$maintenance->workorder->assign_by}}
                                        @else
                                        :
                                    @endif
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center py-5">
                                    @if ($maintenance->workorder !== null)

                                    <div>
                                        <img class="pt-3" src="/img/users/{{$maintenance->workorder->user->photo}}" alt="dawda">
                                    </div>
                                     <div class="h-50">
                                        <h2>{{$maintenance->workorder->user->name}}</h2>
                                        <span class="fw-lighter">{{$maintenance->workorder->user->phone_number}}</span>
                                     </div>
                                     @else
                                     @endif
                                </div>
                                <div class="row pt-5 pb-5">
                                    @if ($maintenance->workorder !== null)
                                    <span class="disabled-link btn btn-danger me-3 font-weight-bolder py-2 w-25" style="border-radius: 8px;" data-toggle="modal"
                                    href="javascript:void(0)" title="Maintainer">
                                    <img class="pt-2" src="/img/Plus.png" alt="">
                                    Add Maintain
                                </span>
                                    @else
                                        <a class="btn btn-danger me-3 font-weight-bolder py-2 w-25" style="border-radius: 8px;" data-toggle="modal"
                                        href="#modalMaintain" title="Maintainer">
                                        <img class="pt-2" src="/img/Plus.png" alt="">
                                        Add Maintain
                                        </a>
                                    @endif
                                        <!-- Tambahkan checkbox lainnya sesuai kebutuhan -->
                                        <div id="previewContainer" class="pt-10 preview-container d-flex flex-wrap"></div>


                                </div>
                                {{-- <input class="btn shadow btn-danger text-3 rounded-8 w-200px p-md-3 h-100" type="submit" value="Start Breakdown"> --}}
                            {{-- </form> --}}


                            <form action="#" method="post"enctype="multipart/form-data">
                                @csrf
                                <div class="pt-5">
                                    <h2>Breakdown Doc</h2>
                                    <div class="form-group mt-4 w-100 me-10">
                                        <label for="jobsite_location"
                                        class="fw-bold text-black subtitle-1">{{__('Jobsite Location')}} <span
                                            class="text-danger">*</span></label>
                                        <input type="text" id="jobsite_location" name="jobsite_location" class="form-control mt-2"
                                            placeholder="Ex. Jl. Kebon Sirih Barat" maxlength="200" value={{old('jobsite_location')}}>
                                        @error('jobsite_location')
                                        <div class="invalid-feedback d-flex">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="row mb-10">
                                        <div class="form-group mt-4 w-75">
                                            <label for="damage_component"
                                            class="fw-bold text-black subtitle-1">{{__('Damaged Component')}} <span
                                                class="text-danger">*</span></label>
                                            <input type="text" id="damage_component" name="damage_component" class="form-control mt-2"
                                                placeholder="Ex Kopling" maxlength="200" value={{old('damage_component')}}>
                                            @error('damage_component')
                                            <div class="invalid-feedback d-flex">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-4 w-25">
                                            <label for="damaged_level" class="subtitle-1">Damage Level<span class="text-danger">*</span></label>
                                            <select name="damaged_level" id="damaged_level" class="form-select mt-2">
                                                <option value="" disabled selected class="fw-bolder">{{ __('Select Level') }}</option>
                                                <option value="High" {{ old('damaged_level') === 'High' ? 'selected' : '' }}>&#160;&#160;&#160;&#160;High</option>
                                                <option value="Medium" {{ old('damaged_level') === 'Medium' ? 'selected' : '' }}>&#160;&#160;&#160;&#160;Medium</option>
                                                <option value="Low" {{ old('damaged_level') === 'Low' ? 'selected' : '' }}>&#160;&#160;&#160;&#160;Low</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <div class="form-group mt-4 w-w-100">
                                            <label for="analysist" class="fw-bold text-black subtitle-1">{{__('Analysis')}} <span class="text-danger">*</span></label>
                                            <textarea type="text" id="analysist" name="analysist" class="form-control mt-2"
                                                placeholder="Write your analysist" maxlength="200" rows="4" cols="50">{{old('analysist')}}</textarea>
                                            @error('analysist')
                                            <div class="invalid-feedback d-flex">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <input class="btn shadow btn-danger text-3 rounded-8 w-200px p-md-3 h-100" type="submit" value="End Breakdown">

                                    {{-- <button class="btn border border-danger text-danger text-3 rounded-8 w-200px p-md-3 h-100">Cancel</button> --}}
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
    </div>
</div>
@include('modal.modalMaintain')

<style>
.preview-item {
  display: flex;
  align-items: center;
  margin-right: 10px;
  margin-bottom: 10px;
}

.preview-item img {
  width: 50px;
  height: 50px;
  object-fit: cover;
  margin-right: 10px;
}

.preview-item .preview-content {
  display: flex;
  flex-direction: column;
}

.preview-item .preview-content p {
  margin: 0;
}

.disabled-link {
  color: gray;
  cursor: not-allowed;
}

</style>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>

</script>

@endsection
