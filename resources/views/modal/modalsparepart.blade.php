<div class="modal fade" id="modalSparepart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="{{route('spareparts.store')}}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-content p-3 w-611px">
                <div class="modal-header">
                    <div class="heading-3" id="exampleModalLongTitle">
                        Add Sparepart
                    </div>
                    <button type="button" class="close-share border-0" style="background-color: transparent" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-lg-0 col-lg-6">
                            <label for="id_sparepart" class="subtitle-1">
                                {{__('Identity Sparepart')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="field-input pt-2 pb-6">
                                <input type="text" id="id_sparepart" name="id_sparepart" class="form-control" placeholder="Ex. ol-01" maxlength="200" value={{old('Identity_Sparepart')}}>
                                @error('id_sparepart')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <label for="Name_Sparepart" class="subtitle-1">
                                Name Sparepart
                                <span class="text-danger">*</span>
                            </label>
                            <div class="field-input pt-2 pb-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Ex. Oli" maxlength="200" value={{old('Name_Sparepart')}}>
                                @error('name')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group d-flex align-items-center">
                                <div>
                                    <p class="subtitle-1">Upload Photo</p>
                                    <div class="pb-9">
                                        <label for="image" id="labelImg" class="font-weight-bold text-black m-0 border"
                                            style="
                                                background-image: url(/assets/media/icons/system-icon/outline/Camera.svg);
                                                background-repeat: no-repeat;
                                                background-size: cover;
                                                width: 100px;
                                                height:100px;
                                                position: absolute;">
                                        </label>
                                        <img class="img-preview img-fluid col-sm-5 d-block w-75 pt-2 pb-9" src="" alt="">
                                        <input type="file" id="image" name="photo" style="display: none" class="form-control-file" src="/assets/media/icons/system-icon/outline/Edit Square.svg" multiple onchange="previewImage()" onclick="document.getElementById('labelImg').style.opacity = 0">
                                    </div>
                                </div>
                                <div class="h-50">
                                   <div class="subtitle-1" id="list_file"></div>
                                   <div id="size_file"></div>
                                </div>
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 mb-lg-0 col-lg-6">
                            <label for="brand" class="subtitle-1">
                                Brand
                                <span class="text-danger">*</span>
                            </label>
                            <div class="field-input pt-2 pb-6">
                                <input type="text" id="brand" name="brand" class="form-control"
                                   placeholder="Ex. Castrol" maxlength="200" value={{old('Brand')}}>
                                @error('brand')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <label for="Stock" class="subtitle-1">
                                Stock
                                <span class="text-danger">*</span>
                            </label>
                            <div class="field-input pt-2 pb-6">
                                <div class="number-input">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                                    <input class="quantity" min="0" name="count" value="1" type="number" value={{old('Stock')}}>
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0" style="flex-wrap: nowrap">
                        <div class="col-md-5">
                            <button class="btn btn-danger rounded-8 w-200px" type="submit" id="downloadWp" name="downloadWp">
                                Add Sparepart
                            </button>
                        </div>
                        <div class="col-md" style="margin-left: -1.5em">
                            <button type="reset" class="btn border border-danger text-danger rounded-8 w-200px close-share" data-dismiss="modal" aria-label="Close" id="downloadWp" name="downloadWp">
                                Cancel
                            </button>
                        </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
