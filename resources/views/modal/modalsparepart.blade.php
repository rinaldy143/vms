<div class="modal fade" id="modalSparepart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    {{-- <div class="modal-dialog modal-dialog-centered modal-md-contact" role="document"> --}}
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="{{route('spareparts.store')}}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-content m-lg-10 p-3 p-3">
                <div class="modal-header">
                    <h4 class="text-color-dark font-weight-semibold text-transform-none text-5 m-0"
                        id="exampleModalLongTitle">Add Sparepart</h4>
                    <button type="button" class="close-share border-0" style="background-color: transparent" data-dismiss="modal" aria-label="Close">
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
                            <div class="sparepart1 col-md-6 mb-3 mb-lg-0 col-lg-6">
                                <label for="id_sparepart"
                                    class="fw-bold text-black mt-4">{{__('Identity Sparepart')}} <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="field-input py-5">
                                    <input type="text" id="id_sparepart" name="id_sparepart" class="form-control"
                                        placeholder="Your Name" maxlength="200" value={{old('id_sparepart')}}>
                                    @error('id_sparepart')
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
                                <label for="Name_Sparepart"
                                    class="fw-bold text-black mt-4">Name Sparepart <span
                                    class="text-danger">*</span></label>
                                <div class="field-input py-5">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Name Sparepart" maxlength="200" value={{old('name')}}>
                                    @error('name')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group d-flex align-items-center py-5">
                                    <div>
                                        <p class="fw-bold fs-3 text-black">Upload Photo</p>
                                        <label for="image" id="labelImg"
                                        class="font-weight-bold text-black m-0 border p-5" style="background-image: url(/assets/media/icons/system-icon/outline/Camera.svg);  background-repeat: no-repeat;
                                        background-size: cover;
                                        width: 100px;
                                        height:100px;
                                        position: absolute;">
                                        {{-- <img class="py-5 px-10" src="/assets/media/icons/system-icon/outline/Camera.svg" width="120px"> --}}
                                        {{-- <p class="fs-3">Upload Photo</p> --}}
                                        </label>
                                        <img class="img-preview img-fluid mb-3 col-sm-5 d-block w-75" src="" alt="">
                                        <input type="file" src="/assets/media/icons/system-icon/outline/Edit Square.svg" class="form-control-file"
                                        id="image" name="photo" style="display: none" multiple onchange="previewImage()" onclick="document.getElementById('labelImg').style.opacity = 0">
                                    </div>
                                     <div class="h-50">
                                        <div class="fw-bolder fs-3" id="list_file"></div>
                                        <div id="size_file"></div>
                                     </div>

                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="sparepart2 col-md-6 mb-3 mb-lg-0 col-lg-6">
                                <label for="brand"
                                    class="fw-bold text-black mt-4">Brand
                                    <span class="text-danger">*</span></label>
                                <div class="field-input py-5">
                                    <input type="text" id="brand" name="brand" class="form-control"
                                        placeholder="Your Brand" maxlength="200" value={{old('brand')}}>
                                    @error('brand')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <label for="Stock"
                                class="fw-bold text-black mt-4 pb-5">Stock<span
                                class="text-danger">*</span></label><br>
                                <div class="number-input">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                                    <input class="quantity" min="0" name="count" value="1" type="number" value={{old('Stock')}}>
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer border-0 pt-20" style="flex-wrap: nowrap;">
                    <div class="col-md-6 text-center">
                        {{-- <button class="btn btn-danger text-3 rounded-8 w-50 p-md-3 h-100" type="submit" id="downloadWp" name="downloadWp">
                            Submit
                        </button> --}}
                        <input class="btn shadow btn-danger text-3 rounded-8 w-100 p-md-3 h-100" type="submit" value="Submit">
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

