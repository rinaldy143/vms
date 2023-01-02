<div class="modal fade" id="modaleditUser{{$model->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    {{-- <div class="modal-dialog modal-dialog-centered modal-md-contact" role="document"> --}}
    <div class="modal-dialog modal-dialog-centered " role="document">
        <form action="{{route('users.update', ($model->id))}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-content m-lg-10 p-3 p-3 ">
                <div class="modal-header">
                    <h4 class="text-color-dark font-weight-semibold text-transform-none text-5 m-0"
                        id="exampleModalLongTitle">Edit model</h4>
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
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Isi Nama" value='{{$model->name}}'
                                @isset($value)
                                value="{{old($name) ? old($name) : $value}}"
                                @else value="{{old($model->name)}}" @endisset
                                >

                                @error($model->name)
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Isi Nama" value='{{$model->email}}'
                                @isset($value)
                                value="{{old($email) ? old($email) : $value}}"
                                @else value="{{old($model->email)}}" @endisset
                                >

                                @error($model->email)
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group py-5">
                                <div class="input-group mb-0 border rounded">
                                    <div class="input-group-prepend">
                                        <select class="btn dropdown-toggle" type="button"
                                             data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" id="country_codes"
                                            name="country_codes">
                                            <option value="+62" selected>+62</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control border-0" id="phone_number"
                                        placeholder="89xxxxxxx" name="phone_number"
                                        aria-label="Text input with dropdown button"
                                        placeholder="89xx-xxxx-xxxx" maxlength="15" value={{$model->phone_number}}>
                                </div>
                                @error('country_codes')
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

                            <div class="field-input">
                                <select class="form-control" aria-label="role" id="role"
                                    name="role" >
                                    <option value="" disabled selected>{{__('Select role of user')}}</option>
                                    <option value="ADMIN" >ADMIN</option>
                                    <option value="MEMBER" >MEMBER</option>
                                    </select>
                                    @error('role')
                                    <div class="invalid-feedback d-flex">
                                        {{ $message }}
                                    </div>
                                    @enderror
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

