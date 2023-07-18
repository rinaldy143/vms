<div class="modal fade" id="modaleditsparepart{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="{{route('spareparts.update', ($item->id))}}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

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
                            <label for="Name_Sparepart" class="subtitle-1">
                                Identity Sparepart
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="id_sparepart" name="id_sparepart" placeholder="Isi Nama" value='{{$item->id_sparepart}}'
                            @isset($value)
                            value="{{old($id_sparepart) ? old($id_sparepart) : $value}}"
                            @else value="{{old($item->id_sparepart)}}" @endisset>
                            @error($item->id_sparepart)
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <label for="Name_Sparepart" class="subtitle-1">
                                Name Sparepart
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Isi Nama" value='{{$item->name}}'
                            @isset($value)
                            value="{{old($name) ? old($name) : $value}}"
                            @else value="{{old($item->name)}}" @endisset>
                            @error($item->name)
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3 mb-lg-0 col-lg-6">
                            <label for="Brand" class="subtitle-1">
                                Identity Sparepart
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="brand" name="brand" placeholder="Isi Nama" value='{{$item->brand}}'
                            @isset($value)
                            value="{{old($brand) ? old($brand) : $value}}"
                            @else value="{{old($item->brand)}}" @endisset>
                            @error($item->brand)
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <label for="count" class="subtitle-1">
                                count
                                <span class="text-danger">*</span>
                            </label>
                            <div class="field-input pt-2 pb-6">
                                <div class="number-input">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>
                                    <input class="quantity" min="0" name="count" type="number" value="{{ $item->count }}"
                                    @isset($value)
                                    value="{{old($count) ? old($count) : $value}}"
                                    @else value="{{old($item->count)}}" @endisset>
                                    @error($item->count)
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
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

