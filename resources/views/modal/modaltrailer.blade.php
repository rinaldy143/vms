<div class="modal fade" id="modalTrailer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    {{-- <div class="modal-dialog modal-dialog-centered modal-md-contact" role="document"> --}}
    <div class="modal-dialog modal-dialog-centered " role="document">
        <form action="{{route('trailer.store')}}" method="post"
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
                                <label for="code_trailer"
                                    class="fw-bold text-black mt-4">{{__('Code Trailer')}} <span
                                        class="text-danger">*</span></label>
                                <div class="field-input">
                                    <input type="text" id="code_trailer" name="code_trailer" class="form-control"
                                        placeholder="Ex. D 1234 ABC" maxlength="200" value={{old('code_trailer')}}>
                                    @error('code_trailer')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <label for="type_trailer_id"
                                    class="fw-bold text-black mt-4">{{__('Trailer Type')}} <span
                                    class="text-danger">*</span></label>
                                </label>
                                <div class="field-input">
                                    <select class="form-control" aria-label="type_trailer_id" id="type_trailer_id"
                                        name="type_trailer_id">

                                        <option value="" disabled selected >{{__('Select Trailer Type')}}</option>
                                        @foreach ($trailerT as $model)

                                        <option value="{{$model->id}}" {{ old('type_vehicle_id')==$model->id ?
                                            'selected' : '' }}>{{$model->trailer_type}}</option>
                                        @endforeach

                                        {{-- <option value="Flatbed Trailer" >Flatbed Trailer</option>
                                        <option value="Skeletal Trailer" >Skeletal Trailer</option> --}}

                                        {{-- <select class="form-select " aria-label="select location"
                                            id="inputLocations" name="locations" required>
                                            <option selected>{{__('contact-form.selectLocation')}}</option>
                                            @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{$location->nama}}</option>
                                            @endforeach --}}
                                        </select>
                                        @error('type_trailer_id')
                                        <div class="invalid-feedback d-flex">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                <label for="model_trailer_id"
                                    class="fw-bold text-black mt-4">{{__('Trailer Model')}} <span
                                    class="text-danger">*</span></label>
                                </label>
                                <div class="field-input">
                                    <select class="form-control" aria-label="model_trailer_id" id="model_trailer_id"
                                        name="model_trailer_id">

                                        <option value="" disabled selected>{{__('Select Vehicle Model')}}</option>

                                        @foreach ($trailerM as $model)

                                        <option value="{{$model->id}}" {{ old('type_vehicle_id')==$model->id ?
                                            'selected' : '' }}>{{$model->trailer_model}}</option>
                                        @endforeach
                                        {{-- <option value="Colt Diesel Double (CDD) Bak" >Colt Diesel Double (CDD) Bak</option>
                                        <option value="Colt Diesel Double (CDD) Los Bak" >Colt Diesel Double (CDD) Los Bak</option>
                                        <option value="Colt Diesel Double (CDD) Long Box" >Colt Diesel Double (CDD) Long Box</option> --}}
                                        {{-- <select class="form-select " aria-label="select location"
                                            id="inputLocations" name="locations" required>
                                            <option selected>{{__('contact-form.selectLocation')}}</option>
                                            @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{$location->nama}}</option>
                                            @endforeach --}}
                                        </select>
                                        @error('model_trailer_id')
                                        <div class="invalid-feedback d-flex">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                <label for="vehicle_connected"
                                    class="fw-bold text-black mt-4">{{__('Trailer Connected')}} <span
                                    class="text-danger">*</span></label>
                                </label>
                                <div class="field-input">
                                    <select class="form-control" aria-label="vehicle_connected" id="vehicle_connected"
                                        name="vehicle_connected">

                                        <option style="background-image:url(img/Search.png);" value="" disabled selected>{{__('Select Vehicle Model')}}</option>

                                        <option value="Colt Diesel Double (CDD) Bak" >Colt Diesel Double (CDD) Bak</option>
                                        <option value="Colt Diesel Double (CDD) Los Bak" >Colt Diesel Double (CDD) Los Bak</option>
                                        <option value="Colt Diesel Double (CDD) Long Box" >Colt Diesel Double (CDD) Long Box</option>
                                        {{-- <select class="form-select " aria-label="select location"
                                            id="inputLocations" name="locations" required>
                                            <option selected>{{__('contact-form.selectLocation')}}</option>
                                            @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{$location->nama}}</option>
                                            @endforeach --}}
                                        </select>
                                        @error('vehicle_connected')
                                        <div class="invalid-feedback d-flex">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                <label for="monthly_maintenance"
                                    class="fw-bold text-black mt-4">{{__('Monthly Maintenance')}} <span
                                    class="text-danger">*</span></label>
                                </label>
                                <div class="input-group date border border-secondary" data-provide="datepicker">
                                    <input type="text" id="monthly_maintenance" name="monthly_maintenance" class="datepicker form-control border-0 " >
                                    <div class="input-group-addon border-0" style="background-color: #fff">
                                        <span><img src="/assets/media/icons/system-icon/outline/Calendar.svg" width="23px" alt=""></span>
                                    </div>
                                </div>

                        {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer border-0 pt-10" style="flex-wrap: nowrap;">
                    <div class="col-md-6 text-center">
                        <button class="btn shadow btn-danger text-3 rounded-8 w-100 p-md-3 h-100" type="submit"
                            id="downloadWp" name="downloadWp">Maintenance</button>
                    </div>
                    <div class="col-md-6 text-center">
                        <button type="reset" class="btn shadow border border-danger text-danger text-3 rounded-8 w-100 p-md-3 h-100 close-share" data-dismiss="modal" aria-label="Close"
                            id="downloadWp" name="downloadWp">Cancel</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
