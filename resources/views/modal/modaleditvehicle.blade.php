<div class="modal fade " id="modaleditvehicle" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered " role="document">
        <form action="#" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-content m-lg-10 p-3 p-3 ">
                <div class="modal-header">
                    <h4 class="text-color-dark font-weight-semibold text-transform-none text-5 m-0"
                        id="exampleModalLongTitle">Edit Vehicle</h4>
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
                                    {{-- <input type="text" id="plat_number" name="plat_number" class="form-control" required
                                        placeholder="Ex. D 1234 ABC" maxlength="200" value='{{$vehicles->plat_number}}'
                                        @isset($value)
                                        value="{{old($plat_number) ? old($plat_number) : $value}}"
                                        @else value="{{old($vehicles->plat_number)}}" @endisset>
                                    @error($vehicles->plat_number)
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror --}}
                                </div>
                        {{-- <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div> --}}
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
    </div>
</div>
