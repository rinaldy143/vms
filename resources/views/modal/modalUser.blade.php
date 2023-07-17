<div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    {{-- <div class="modal-dialog modal-dialog-centered modal-md-contact" role="document"> --}}
    <div class="modal-dialog modal-dialog-centered " role="document">
        <form action="{{route('users.store')}}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-content m-lg-10 p-3 p-3 ">
                <div class="modal-header">
                    <h4 class="text-color-dark font-weight-semibold text-transform-none text-5 m-0"
                        id="exampleModalLongTitle">Add User</h4>
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
                                <label for="name"
                                    class="fw-bold text-black mt-4">{{__('Name')}} <span
                                        class="text-danger">*</span></label>
                                <div class="field-input py-5">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Your Name" maxlength="200" value={{old('name')}}>
                                    @error('name')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <label for="email"
                                    class="fw-bold text-black mt-4">email <span
                                    class="text-danger">*</span></label>
                                <div class="field-input py-5">
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="email" maxlength="200" value={{old('email')}}>
                                    @error('email')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <label for="phone_number"
                                class="fw-bold text-black">{{__('No Handphone')}} <span
                                    class="text-danger">*</span></label>
                            <div class="field-input py-5">
                                <div class="input-group mb-0 border rounded">
                                    <div class="input-group-prepend">
                                        <select class="btn dropdown-toggle" type="button"
                                             data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" id="phone_country_code"
                                            name="phone_country_code">
                                            <option value="+62" selected>+62</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control border-0" id="phone_number"
                                        placeholder="89xxxxxxx" name="phone_number"
                                        aria-label="Text input with dropdown button"
                                        placeholder="89xx-xxxx-xxxx" maxlength="15" value={{old('phone_number')}}>
                                </div>
                                @error('phone_country_code')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                                @error('phone_number')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <label for="role"
                                class="font-weight-bold text-black mt-4">{{__('Role')}} <span
                                class="text-danger">*</span></label>
                            </label>
                            <div class="field-input">
                                <select class="form-control" aria-label="role" id="role"
                                    name="role">
                                    <option value="" disabled selected>{{__('Select role of user')}}</option>
                                    {{-- @foreach ($type_role as $model)

                                    <option value="{{$model->role}}" {{ old('ModelVehicle')==$model->role ?
                                        'selected' : '' }}>{{$model->role}}</option>
                                    @endforeach --}}
                                    <option value="ADMIN" >ADMIN</option>
                                    <option value="Operation" >Operation</option>
                                    <option value="Lead Mechanices / Departement Mechanices" >Lead Mechanices</option>
                                    <option value="Mechanices" >Mechanices</option>
                                    <option value="Logistic" >Logistic</option>
                                    {{-- <option value="MEMBER" >MEMBER</option> --}}
                                    </select>
                                    @error('role')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                                <div class="form-group d-flex align-items-center py-5">
                                    <div>
                                        <p class="fw-bold fs-3 text-black">Upload Photo</p>
                                        <label for="photo" id="labelImg"
                                        class="font-weight-bold text-black m-0 border p-5" style="background-image: url(/assets/media/icons/system-icon/outline/Camera.svg);  background-repeat: no-repeat;
                                        background-size: cover;
                                        width: 100px;
                                        height:100px;
                                        position: absolute;">
                                        </label>
                                        <img class="img-preview img-fluid mb-3 col-sm-5 d-block w-75" src="" alt="">
                                        <input type="file" src="/assets/media/icons/system-icon/outline/Edit Square.svg" class="form-control-file"
                                        id="photo" name="photo" style="display: none" multiple onchange="previewImage()" onclick="document.getElementById('labelImg').style.opacity = 0">
                                    </div>
                                     <div class="h-50">
                                        <div class="fw-bolder fs-3" id="list_file"></div>
                                        <div id="size_file"></div>
                                     </div>

                                    @error('photo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-20 mt-10" style="flex-wrap: nowrap;">
                    <div class="col-md-6 text-center">
                        <button class="btn shadow btn-danger text-3 rounded-8 w-100 p-md-3 h-100" type="submit"
                            id="downloadWp" name="downloadWp">Submit</button>
                    </div>
                    <div class="col-md-6 text-center">
                        <button type="reset" class="btn shadow border border-danger text-danger text-3 rounded-8 w-100 p-md-3 h-100 close-share" data-dismiss="modal" aria-label="Close"
                            id="downloadWp" name="downloadWp">Cancel</button>
                    </div>
                </div>
        </form>
    </div>
</div>
