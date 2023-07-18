@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container">
        <div class="nav my-10">
            <a href="/list-maintenance">
                <div class="subtitle-1 me-10 text-danger" style="border-bottom: 1px solid #FF0000">Maintenance</div>
            </a>
            @can('viewAny', App\Models\Entity\WorkOrder::class)
            <a href="/workorder">
                <div class="subtitle-1 me-10 " >Work Order</div>
            </a>
            @endcan
        </div>
        <h2 class="my-5">Maintenance</h2>
        <a class="btn btn-danger text-3 rounded-8 w-200px p-md-3 h-100 me-4" href="/maintenance">Create Maintenance</a>
        <a class="btn border border-dark text-dark text-3 rounded-8 w-200px p-md-3 h-100" href="/list-maintenance">List Maintenance</a>
        <div class="card w-1000px mt-8 mb-10">
            <div class="card-body">
                <div class="heading-4">
                    Create Work Order
                </div>
                <form action="{{route('maintenance.store')}}" method="post"enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <div class="row">
                            <div class="form-group mt-4 w-400px me-10">
                                <label for="vehicle_id" class="subtitle-1">CN Unit<span class="text-danger">*</span></label>
                                <select name="vehicle_id" id="vehicle_id" class="form-select mt-2">
                                    <option value="" disabled selected class="fw-bolder" >{{__('Select Vehicle Code')}}</option>
                                        {{-- <option value="">&#160;&#160;&#160;&#160;D 1123 ABC</option>
                                        <option value="">&#160;&#160;&#160;&#160;D 2130 BAC</option> --}}
                                        @foreach ($vehicles as $model)
                                        <option value="{{$model->id}}" {{ old('vehicle_id')==$model->id ?
                                            'selected' : '' }}>{{$model->plat_number}}</option>
                                        @endforeach
                                </select>

                                @error('vehicle_id')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            {{-- @foreach ($maintenance as $item)

                            <input type="hidden" name="C2" value="{{$item->vehicle->selected_value1 }}">
                            @endforeach --}}
                            {{-- <div class="form-group mt-4 w-400px me-10">
                                <label for="trailer_id" class="subtitle-1">Trailer<span class="text-danger">*</span></label>
                                <div id="list1" class="dropdown-check-list form-select" tabindex="100">
                                    <span class="anchor border-0 w-100">Trailer</span>
                                    <ul class="items">
                                        @foreach ($trailer as $model)
                                        <li>
                                            <input type="checkbox" name="trailer_id[]" value="{{ $model->id }}" {{ in_array($model->id, old('trailer_id', [])) ? 'checked' : '' }} />
                                            &#160;&#160;&#160;&#160;{{ $model->code_trailer }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                        <div class="row mb-10">
                            <div class="form-group mt-4 w-400px me-10">
                                <label for="km_Unit"
                                class="fw-bold text-black subtitle-1">{{__('KM Unit')}} <span
                                    class="text-danger">*</span></label>
                                <input type="text" id="km_Unit" name="km_Unit" class="form-control mt-2"
                                    placeholder="28 KM" maxlength="200" value={{old('km_Unit')}}>
                                @error('km_Unit')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-4 w-400px me-10">
                                <label for="hm_Unit"
                                class="fw-bold text-black subtitle-1">{{__('HM Unit')}}
                                <input type="text" id="hm_Unit" name="hm_Unit" class="form-control mt-2"
                                    placeholder="100 HM" maxlength="200" value={{old('hm_Unit')}}>
                                @error('hm_Unit')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-10">
                            <div class="form-group mt-4 w-75 me-10">
                                <label for="report_problem" class="fw-bold text-black subtitle-1">{{__('Problem Description')}} <span class="text-danger">*</span></label>
                                <textarea type="text" id="report_problem" name="report_problem" class="form-control mt-2"
                                    placeholder="Write a Problem" maxlength="200" rows="4" cols="50">{{old('report_problem')}}</textarea>
                                @error('report_problem')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row col-lg-12">
                            <div class="form-group mt-4 col-lg-3 me-10">
                                <label for="CN" class="subtitle-1">Unit Condition<span class="text-danger">*</span></label>
                                <div class="form-select radio-btn my-5">
                                    <input type="radio" id="unit_condition1" name="unit_condition" value="Operasi" {{ old('unit_condition') == 'Operasi' ? 'checked' : '' }}>
                                    <label for="unit_condition1">Operasi</label><br>
                                </div>
                                <div class="form-select radio-btn my-5">
                                    <input type="radio" id="unit_condition2" name="unit_condition" value="Breakdown" {{ old('unit_condition') == 'Breakdown' ? 'checked' : '' }}>
                                    <label for="unit_condition2">Breakdown</label><br>
                                </div>
                                <div class="form-select radio-btn my-5">
                                    <input type="radio" id="unit_condition3" name="unit_condition" value="Standby" {{ old('unit_condition') == 'Standby' ? 'checked' : '' }}>
                                    <label for="unit_condition3">Standby</label><br>
                                </div>
                                @error('unit_condition')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-4 col-lg-3 me-10">
                                <label for="priority" class="subtitle-1">Priority<span class="text-danger">*</span></label>
                                <div class="form-select radio-btn my-5">
                                    <input type="radio" id="priority1" name="priority" value="Normal" {{ old('priority') == 'Normal' ? 'checked' : '' }}>
                                    <label for="priority1">Normal</label><br>
                                </div>
                                <div class="form-select radio-btn my-5">
                                    <input type="radio" id="priority2" name="priority" value="Emergency" {{ old('priority') == 'Emergency' ? 'checked' : '' }}>
                                    <label for="priority2">Emergency</label><br>
                                </div>
                                @error('priority')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-4 col-lg-3 me-10">
                                <label for="dampak" class="subtitle-1">Dampak Kerusakan<span class="text-danger">*</span></label>
                                <div class="form-select radio-btn my-5">
                                    <input type="radio" id="dampak1" name="dampak" value="Kecil" {{ old('dampak') == 'Kecil' ? 'checked' : '' }}>
                                    <label for="dampak1">Kecil</label><br>
                                </div>
                                <div class="form-select radio-btn my-5">
                                    <input type="radio" id="dampak2" name="dampak" value="Sedang" {{ old('dampak') == 'Sedang' ? 'checked' : '' }}>
                                    <label for="dampak2">Sedang</label><br>
                                </div>
                                <div class="form-select radio-btn my-5">
                                    <input type="radio" id="dampak3" name="dampak" value="Besar" {{ old('dampak') == 'besar' ? 'checked' : '' }}>
                                    <label for="dampak3">besar</label><br>
                                </div>
                                @error('dampak')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row col-lg-12">
                            <div class="form-group mt-4 col-lg-4 me-10">
                                <label for="CN" class="subtitle-1">Activity Maintenance<span class="text-danger">*</span></label>
                                <div class="form-select radio-btn my-5">
                                    <input type="radio" id="activity_maintenance1" name="activity_maintenance" value="Tune Up" {{ old('activity_maintenance') == 'Tune Up' ? 'checked' : '' }}>
                                    <label for="activity_maintenance1">Tune Up</label><br>
                                </div>
                                <div class="form-select radio-btn my-5">
                                    <input type="radio" id="activity_maintenance2" name="activity_maintenance" value="Service Kecil" {{ old('activity_maintenance') == 'Service Kecil' ? 'checked' : '' }}>
                                    <label for="activity_maintenance2">Service Kecil</label><br>
                                </div>
                                <div class="form-select radio-btn my-5">
                                    <input type="radio" id="activity_maintenance3" name="activity_maintenance" value="Service Menengah" {{ old('activity_maintenance') == 'Service Menengah' ? 'checked' : '' }}>
                                    <label for="activity_maintenance3">Service Menengah</label><br>
                                </div>
                            </div>
                            <div class="form-group mt-4 col-lg-4 me-10">
                                <label for="CN" class="subtitle-1"></label>
                                <div class="form-select radio-btn my-5">
                                    <input type="radio" id="activity_maintenance4" name="activity_maintenance" value="Service Besar" {{ old('activity_maintenance') == 'Service Besar' ? 'checked' : '' }}>
                                    <label for="activity_maintenance4">Service Besar</label><br>
                                </div>
                                <div class="form-select radio-btn my-5">
                                    <input type="radio" id="activity_maintenance5" name="activity_maintenance" value="Service Keseluruhan" {{ old('activity_maintenance') == 'Service Keseluruhan' ? 'checked' : '' }}>
                                    <label for="activity_maintenance5">Service Keseluruhan</label><br>
                                </div>
                            </div>
                            @error('activity_maintenance')
                            <div class="invalid-feedback d-flex">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>



                        <input class="btn shadow btn-danger text-3 rounded-8 w-200px p-md-3 h-100" type="submit" value="Create Maintenance">
                        <button class="btn border border-danger text-danger text-3 rounded-8 w-200px p-md-3 h-100">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
        .dropdown-check-list {
    display: inline-block;
    }

    .dropdown-check-list .anchor {
    position: relative;
    cursor: pointer;
    display: inline-block;
    padding: 5px 50px 5px 10px;
    border: 1px solid #ccc;
    }


    .dropdown-check-list .anchor:active:after {
    right: 8px;
    top: 21%;
    }

    .dropdown-check-list ul.items {
    padding: 2px;
    display: none;
    margin: 0;
    border-top: none;
    }

    .dropdown-check-list ul.items li {
    list-style: none;
    }

    .dropdown-check-list.visible .anchor {
    color: #000;
    }

    .dropdown-check-list.visible .items {
    display: block;
    }

    .form-select.radio-btn{
        background-image: none;
    }
</style>

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


        var checkList = document.getElementById('list1');
        checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
        if (checkList.classList.contains('visible'))
            checkList.classList.remove('visible');
        else
            checkList.classList.add('visible');
        }

</script>

@endsection
