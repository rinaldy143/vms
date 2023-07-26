<div class="modal fade" id="modalVehicle" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    {{-- <div class="modal-dialog modal-dialog-centered modal-md-contact" role="document"> --}}
    <div class="modal-dialog modal-dialog-centered " role="document">
        <form action="{{route('vehicles.store')}}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-content m-lg-10 p-3 p-3 ">
                <div class="modal-header">
                    <h4 class="text-color-dark font-weight-semibold text-transform-none text-5 m-0"
                        id="exampleModalLongTitle">Add Vehicle</h4>
                    <button type="button" class="close-share border-0" style="background-color: transparent" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>
                    </button>

                </div>
                <div class="modal-body pb-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mb-3 mb-lg-0 col-lg-12">
                                <label for="plat_number"
                                    class="fw-bold text-black mt-4">{{__('Plate Number')}} <span
                                        class="text-danger">*</span></label>
                                <div class="field-input">
                                    <input type="text" id="plat_number" name="plat_number" class="form-control" required
                                        placeholder="Ex. D 1234 ABC" maxlength="200" value={{old('plat_number')}}>
                                    @error('plat_number')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    {{-- <label for="inputName"
                                        class="text-color-light">{{__('contact-form.name')}}</label>
                                    <input type="text" class="form-control" id="inputName"
                                        placeholder="Ex. Jonathan" name="name"> --}}
                                    {{-- @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror --}}
                                </div>
                                <label for="type_vehicle_id"
                                    class="fw-bold text-black mt-4">{{__('Vehicle Type')}} <span
                                    class="text-danger">*</span></label>
                                </label>
                                <div class="field-input">
                                    <select class="form-control" aria-label="type_vehicle_id" id="type_vehicle_id"
                                        name="type_vehicle_id" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' required>
                                        <option value="" disabled selected>{{__('Select Vehicle Type')}}</option>
                                        @foreach ($vehiclesT as $model)

                                        <option value="{{$model->id}}" {{ old('type_vehicle_id')==$model->id ?
                                            'selected' : '' }}>{{$model->vehicle_type}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <label for="ModelVehicle"
                                    class="fw-bold text-black mt-4">{{__('Vehicle Model')}} <span
                                    class="text-danger">*</span></label>
                                </label>
                                <div class="field-input">
                                    <select class="form-control" aria-label="ModelVehicle" id="model_vehicle_id"
                                        name="model_vehicle_id" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' required>

                                        <option value="" disabled selected>{{__('Select Vehicle Model')}}</option>
                                        @foreach ($model_vehicle as $model)

                                        <option value="{{$model->id}}" {{ old('ModelVehicle')==$model->id ?
                                            'selected' : '' }}>{{$model->vehicle_model}}</option>
                                        @endforeach
                                    </select>
                                        @error('ModelVehicle')
                                        <div class="invalid-feedback d-flex">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                <label for="monthly_maintenance"
                                    class="fw-bold text-black mt-4">{{__('Monthly Maintenance')}} <span
                                    class="text-danger">*</span></label>
                                </label>
                                <div class="input-group date border border-secondary  rounded" data-provide="datepicker">
                                    <input type="text" id="monthly_maintenance" name="monthly_maintenance" class="datepicker form-control  border-0 rounded"  required value={{old('monthly_maintenance')}}>
                                    @error('monthly_maintenance')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="input-group-addon border-0" style="background-color: #fff">
                                        <span><img src="/assets/media/icons/system-icon/outline/Calendar.svg" width="23px" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-10" style="flex-wrap: nowrap;">
                    <div class="col-md-6 text-center">
                        <input class="btn shadow btn-danger text-3 rounded-8 w-100 p-md-3 h-100" type="submit" value="Maintenance">
                    </div>
                    <div class="col-md-6 text-center">
                        <button type="reset" class="btn shadow border border-danger text-danger text-3 rounded-8 w-100 p-md-3 h-100 close-share" data-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    </div>

                </div>
        </form>


        {{-- <p class="text-center text-1 px-3">{{__('whitepapers.desc')}} <a
                href="#">{{__('whitepapers.span1')}}</a>
        </p> --}}
        {{-- /upload/whitepaper/{{$value->upload_file_name}} --}}
    </div>
</div>
