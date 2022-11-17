<div class="modal fade" id="modalRestock" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content m-lg-10 p-3 p-3">
                <div class="modal-header">
                    <h4 class="text-color-dark font-weight-semibold text-transform-none text-5 m-0"
                        id="exampleModalLongTitle">Restock Sparepart</h4>
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
                            <div class="col-md-12 mb-3 mb-lg-0 col-lg-12">
                            <label for="Sparepart"
                                class="font-weight-bold text-black mt-4">{{__('Sparepart')}} <span
                                class="text-danger">*</span></label>
                            </label>
                            <div class="field-input">
                                <select class="form-control" aria-label="Sparepart" id="Sparepart"
                                    name="Sparepart">

                                    <option value="" disabled>{{__('Search Sparepart or brand')}}</option>

                                    <option value="Accretia" >Oli</option>
                                    <option value="Bellato" >Bellato</option>
                                    <option value="Cora" >Cora</option>
                                    {{-- <select class="form-select " aria-label="select location"
                                        id="inputLocations" name="locations" required>
                                        <option selected>{{__('contact-form.selectLocation')}}</option>
                                        @foreach ($locations as $location)
                                        <option value="{{ $location->id }}">{{$location->nama}}</option>
                                        @endforeach --}}
                                    </select>
                                    @error('Sparepart')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
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
                        <button type="reset" class="btn border border-danger text-danger text-3 rounded-8 w-75 p-md-3 h-100 close-share" data-dismiss="modal" aria-label="Close"
                            id="downloadWp" name="downloadWp">Cancel</button>
                    </div>
                </div>
        </form>
    </div>
</div>
