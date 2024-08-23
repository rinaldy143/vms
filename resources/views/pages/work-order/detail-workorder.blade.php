@extends('layouts.master')

@section('content')
<div class="content">

    <div class="container">


            <div class="heading-4 position-absolute">
                <a class="text-dark" href="/workorder">< Back</a>
            </div>

            <div class=" py-20">
                <h1 class="">Detail Maintenance</h1>
            </div>
            <div class="card w-100 my-4">
                {{-- @foreach ($maintenance as $item) --}}

                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <img src="/img/image 1.png" alt="">
                        <div class="ms-5">
                            <h1 style="font-size: 16px;margin-bottom: 0;">{{$maintenance->vehicle->plat_number}}</h1>
                            {{-- <p class="text-primary" style="font-size: 14px;margin-bottom: 0;">T-01, T-02</p> --}}
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3>Maintenance</h3>
                        <div class="text-dark">
                            <div class="d-flex">
                                <div class="col-lg-6">
                                    <div class="d-flex row">
                                        <div class="col-lg-6">
                                            <p>Start BD Date</p>
                                            {{-- <p>Breakdown Type</p> --}}
                                            <p>Unit Condition</p>
                                            <p>Created by</p>
                                            <p>Dampak</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: {{$maintenance->created_at}}</p>
                                            {{-- <p>: {{$maintenance->breakdown_type}}</p> --}}
                                            <p>: {{$maintenance->unit_condition}}</p>
                                            <p>: {{$maintenance->report_by}}</p>
                                            <p>: {{$maintenance->dampak}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex row">
                                        <div class="col-lg-6">
                                            <p>KM Unit</p>
                                            <p>HM Unit</p>
                                            <p>Activity Maintenance</p>
                                            <p>Priority</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>: {{$maintenance->km_Unit}} KM</p>
                                            <p>: {{$maintenance->hm_Unit}} HM</p>
                                            <p>: {{$maintenance->activity_maintenance}}</p>
                                            <p>: {{$maintenance->priority}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-10">
                                <div class="col-lg-3">
                                    <p>Problem Description</p>
                                </div>
                                <div class="col-lg-9">
                                    <p>: {{$maintenance->report_problem}}</p>
                                </div>
                            </div>
                            <h3>Approval Doc</h3>
                            <div class="d-flex mt-10">
                                <div class="col-lg-3">
                                    <p>Approved By</p>
                                    <p>Analysist</p>
                                </div>
                                <div class="col-lg-9">
                                    <p>: {{$maintenance->aprove_by}}</p>
                                    <p>: {{$maintenance->analysist}}</p>
                                </div>
                            </div>
                            <h2>Maintainer</h2>
                            {{-- <form action="{{route('workorder.store')}}" method="post"enctype="multipart/form-data">
                                @csrf --}}
                                <div class="d-flex mt-10">
                                    <div class="col-lg-3">
                                        <p>Assign By</p>
                                    </div>
                                    <div class="col-lg-9">
                                        @if ($maintenance->workorder !== null)
                                        : {{$maintenance->workorder->assign_by}}
                                        @else
                                        :
                                    @endif
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center py-5">
                                    @if ($maintenance->workorder !== null)
                                    @foreach ($maintenance->WorkOrder->User as $user)
                                    <div class="px-5">
                                        @if($user->photo == null)
                                        <img class="pt-3" width="50px" src="/img/Ellipse 44.png" alt="dawda">
                                        @else
                                        <img class="pt-3" width="50px" src="/img/users/{{ $user->photo }}" alt="dawda">
                                        @endif
                                    </div>
                                    <div class="h-50">
                                        <h2>{{ $user->name }}</h2>

                                        {{-- <h2>{{ $maintenance->WorkOrder()->latest()->first()->User()->name }}</h2> --}}
                                        <span class="fw-lighter">{{ $user->role }}</span>
                                    </div>
                                    @endforeach
                                     @else
                                     @endif
                                </div>
                                <div class="row pt-5 pb-5">
                                    @if ($maintenance->workorder !== null)
                                    {{-- <span class="disabled-link btn btn-danger me-3 font-weight-bolder py-2 w-25" style="border-radius: 8px;" data-toggle="modal"
                                    href="javascript:void(0)" title="Maintainer">
                                    <img class="pt-2" src="/img/Plus.png" alt="">
                                    Add Maintain
                                </span> --}}
                                    @else
                                    @can('viewAny', App\Models\Entity\WorkOrder::class)

                                        <a class="btn btn-danger me-3 font-weight-bolder py-2 w-25" style="border-radius: 8px;" data-toggle="modal"
                                        href="#modalMaintain" title="Maintainer">
                                        <img class="pt-2" src="/img/Plus.png" alt="">
                                        Add Maintain
                                        </a>
                                    @endcan
                                    @endif
                                        <!-- Tambahkan checkbox lainnya sesuai kebutuhan -->
                                        <div id="previewContainer" class="pt-10 preview-container d-flex flex-wrap"></div>


                                </div>
                                {{-- <input class="btn shadow btn-danger text-3 rounded-8 w-200px p-md-3 h-100" type="submit" value="Start Breakdown"> --}}
                            {{-- </form> --}}

                            {{-- @if ($maintenance->workorder->analysist == null) --}}
                            @if (isset($maintenance->workorder) && $maintenance->workorder->analysist == null)
                            @can('view', App\Models\Entity\WorkOrder::class)
                            <form id="maintenance" action="{{route('workorder.update', ($maintenance->workorder->id))}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="pt-5">
                                    <h2>Breakdown Doc</h2>
                                    <div class="form-group mt-4 w-100 me-10">
                                        <label for="jobsite_location"
                                        class="fw-bold text-black subtitle-1">{{__('Jobsite Location')}} <span
                                            class="text-danger">*</span></label>
                                        <input type="text" id="jobsite_location" name="jobsite_location" class="form-control mt-2"
                                            placeholder="Ex. Jl. Kebon Sirih Barat" maxlength="200" value={{old('jobsite_location')}}>
                                        @error('jobsite_location')
                                        <div class="invalid-feedback d-flex">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="row mb-10">
                                        <div class="form-group mt-4 w-75">
                                            <label for="damage_component"
                                            class="fw-bold text-black subtitle-1">{{__('Damaged Component')}} <span
                                                class="text-danger">*</span></label>
                                            <input type="text" id="damage_component" name="damage_component" class="form-control mt-2"
                                                placeholder="Ex Kopling" maxlength="200" value={{old('damage_component')}}>
                                            @error('damage_component')
                                            <div class="invalid-feedback d-flex">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-4 w-25">
                                            <label for="damaged_level" class="subtitle-1">Damage Level<span class="text-danger">*</span></label>
                                            <select name="damaged_level" id="damaged_level" class="form-select mt-2">
                                                <option value="" disabled selected class="fw-bolder">{{ __('Select Level') }}</option>
                                                <option value="High" {{ old('damaged_level') === 'High' ? 'selected' : '' }}>&#160;&#160;&#160;&#160;High</option>
                                                <option value="Medium" {{ old('damaged_level') === 'Medium' ? 'selected' : '' }}>&#160;&#160;&#160;&#160;Medium</option>
                                                <option value="Low" {{ old('damaged_level') === 'Low' ? 'selected' : '' }}>&#160;&#160;&#160;&#160;Low</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <div class="form-group mt-4 w-w-100">
                                            <label for="analysist" class="fw-bold text-black subtitle-1">{{__('Analysis')}} <span class="text-danger">*</span></label>
                                            <textarea type="text" id="analysist" name="analysist" class="form-control mt-2"
                                                placeholder="Write your analysist" maxlength="200" rows="4" cols="50">{{old('analysist')}}</textarea>
                                            @error('analysist')
                                            <div class="invalid-feedback d-flex">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button id="addSparepartButton" type="button" class="my-3 btn btn-outline-danger text-3 rounded-8 w-200px p-md-3 h-100">Request Sparepart</button>
                                    <div class="row py-3" id="form-container" style="display: none">
                                        <h2>Request Sparepart</h2>
                                        <div class="col-md-4">
                                            <select class="form-control" name="sparepart_id[]">
                                                <option value="" disabled selected>{{__('Pilih Sparepart')}}</option>
                                                @foreach ($sparepart as $index => $item)
                                                <option value="{{ $item->id }}" data-count="{{ $item->count - 3 }}" {{ old('sparepart_id.' . $index) == $item->id ? 'selected' : '' }}>{{ $item->name }} : {{ $item->brand }}</option>
                                                @endforeach
                                                </select>
                                                @error('sparepart_id.*')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" class="form-control" name="jumlah[]" max="" placeholder="Jumlah">
                                                @error('jumlah.*')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        <div class="col-md-2">
                                            <button id="deleteSparepartButton" type="reset" class="btn btn-danger remove-first">Hapus</button>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn  btn-outline-danger text-3 rounded-8 w-200px p-md-3 h-100" id="add-field" style="display: none;">Tambah Sparepart</button>
                                            <input  class="btn shadow btn-danger text-3 rounded-8 w-200px p-md-3 h-100" type="submit" value="End Breakdown">
                                        </div>
                                    </div>
                                    {{-- <button class="btn border border-danger text-danger text-3 rounded-8 w-200px p-md-3 h-100">Cancel</button> --}}
                                </div>
                            </form>
                            @endcan
                            @elseif (isset($maintenance->workorder) && $maintenance->workorder->analysist !== null)
                            <div class="col-lg-6">
                                <div class="d-flex row">
                                    <div class="col-lg-6">
                                        <p>Jobsite Location</p>
                                        <p>Damaged Component</p>
                                        <p>Damage Level</p>
                                        <p>Analysis</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p>: {{$maintenance->workorder->jobsite_location}}</p>
                                        <p>: {{$maintenance->workorder->damage_component}}</p>
                                        <p>: {{$maintenance->workorder->damaged_level}}</p>
                                        <p>: {{$maintenance->workorder->analysist}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="my-4">
                                <h2 class="pt-3">Request Sparepart</h2>

                                <div class="form-group d-flex align-items-center py-5">
                                    @if ($maintenance->workorder->Spareparts->isEmpty())
                                    <p class="text-success">No sparepart requested</p>
                                    @else
                                        @foreach ($maintenance->workorder->Spareparts as $sparepart)
                                        <div class="px-5">
                                            @if ($sparepart->photo == null)
                                                <img src="/img/Mask group.png" alt="" style="width: 48px; border-radius: 20px">
                                            @else
                                                <img class="pt-3" width="50px" src="/img/sparepart/{{ $sparepart->photo }}" alt="dawda">
                                            @endif
                                        </div>
                                        <div class="h-50">
                                            <h2>{{ $sparepart->name }}</h2>
                                            {{-- <h2>{{ $maintenance->WorkOrder()->latest()->first()->User()->name }}</h2> --}}
                                            <span class="fw-lighter">{{ $sparepart->pivot->jumlah }}</span>
                                        </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>

                            @else

                            @endif
                        </div>
                    </div>


                    @if (isset($maintenance->workorder) && $maintenance->workorder->analysist !== null)
                    @can('view', App\Models\Entity\WorkOrder::class)
                        <div class="my-4">
                            <h2 class="pt-3">Maintenance Proof</h2>
                            <form action="{{route('workorder.update', ($maintenance->workorder->id))}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group d-flex align-items-center py-5">
                                    <div>
                                        <p class="fw-bold fs-3 text-black">Upload Photo</p>
                                        <input type="hidden" name="jobsite_location" value="{{ $maintenance->workorder->jobsite_location }}">
                                        <input type="hidden" name="damage_component" value="{{ $maintenance->workorder->damage_component }}">
                                        <input type="hidden" name="damaged_level" value="{{ $maintenance->workorder->damaged_level }}">
                                        <input type="hidden" name="analysist" value="{{ $maintenance->workorder->analysist }}">
                                        <label for="photo" id="labelImg"
                                        class="font-weight-bold text-black m-0 border p-5" style="background-image: url(/assets/media/icons/system-icon/outline/Camera.svg);  background-repeat: no-repeat;
                                        background-size: cover;
                                        width: 100px;
                                        height:100px;
                                        position: absolute;">
                                        </label>
                                        <img class="img-preview img-fluid mb-3 col-sm-5 d-block w-50" src="" alt="">
                                        <input type="file" src="/assets/media/icons/system-icon/outline/Edit Square.svg" class="form-control-file"
                                        id="photo" name="photo" style="display: none" multiple onchange="previewImage()" onclick="document.getElementById('labelImg').style.opacity = 0">
                                    </div>

                                </div>
                                <div class="border-0 pt-20 mt-10 row">
                                    <div class="col-md-3 text-right">
                                        <input class="btn shadow btn-danger text-3 rounded-8 w-200px p-md-3 h-100" type="submit" value="Finish">

                                    </div>
                                </div>
                            </form>
                        </div>
                        @endcan
                    @endif


                </div>
            </div>
    </div>
</div>
@if ($maintenance->workorder !== null)

@else
@include('modal.modalMaintain')
@endif

<style>
    .preview-item {
    display: flex;
    align-items: center;
    margin-right: 10px;
    margin-bottom: 10px;
    }

    .preview-item img {
    width: 50px;
    height: 50px;
    object-fit: cover;
    margin-right: 10px;
    }

    .preview-item .preview-content {
    display: flex;
    flex-direction: column;
    }

    .preview-item .preview-content p {
    margin: 0;
    }

    .disabled-link {
    color: gray;
    cursor: not-allowed;
    }

</style>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>

var fileInput = document.getElementById('photo');
        var listFile = document.getElementById('list_file');
        var sizeFile = document.getElementById('size_file');

        function formatBytes(bytes,decimals) {
            if(bytes == 0) return '0 Bytes';
            var k = 1024,
                dm = decimals || 0,
                sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
                i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
        }


        fileInput.onchange = function () {

        const photo= document.querySelector('#photo');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(photo.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
        }
</script>
<script>
    // Tambahkan event listener ke tombol "Request Sparepart"
    document.getElementById('addSparepartButton').addEventListener('click', function() {
        // Tampilkan kolom form
        document.getElementById('form-container').style.display = 'flex';
        document.getElementById('add-field').style.display = 'initial';
    });
    document.getElementById('deleteSparepartButton').addEventListener('click', function() {
    // Mengubah tampilan elemen form-container dan addSparepartButton menjadi none
    document.getElementById('form-container').style.display = 'none';
    document.getElementById('add-field').style.display = 'none';
});

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var selectElement = document.querySelector('select[name="sparepart_id[]"]');
        var inputElement = document.querySelector('input[name="jumlah[]"]');

        selectElement.addEventListener('change', function() {
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            var maxCount = selectedOption.getAttribute('data-count');
            inputElement.max = maxCount;
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const addFieldButton = document.getElementById('add-field');
  const formContainer = document.getElementById('form-container');

  addFieldButton.addEventListener('click', function() {
    const fieldRow = document.createElement('div');
    fieldRow.classList.add('row', 'py-3');

    const sparepartSelect = document.createElement('select');
    sparepartSelect.classList.add('form-control');
    sparepartSelect.setAttribute('name', 'sparepart_id[]');
    sparepartSelect.setAttribute('required', '');

    const defaultOption = document.createElement('option');
    defaultOption.setAttribute('value', '');
    defaultOption.setAttribute('disabled', '');
    defaultOption.setAttribute('selected', '');
    // sparepartSelect.appendChild(defaultOption);

// Membuat objek Set untuk menyimpan opsi yang sudah ada
const existingOptions = new Set();

// Mengklon opsi dari elemen select yang ada dan menambahkannya ke sparepartSelect
    const allOptions = formContainer.querySelectorAll('select[name="sparepart_id[]"] option');
    allOptions.forEach(function(option) {
    const optionValue = option.getAttribute('value');
    if (!existingOptions.has(optionValue)) {
        existingOptions.add(optionValue);
        const clonedOption = option.cloneNode(true);
        sparepartSelect.appendChild(clonedOption);
    }
    });

    const jumlahInput = document.createElement('input');
    jumlahInput.setAttribute('type', 'number');
    jumlahInput.setAttribute('class', 'form-control');
    jumlahInput.setAttribute('name', 'jumlah[]');
    jumlahInput.setAttribute('placeholder', 'Jumlah');
    jumlahInput.setAttribute('required', '');

    sparepartSelect.addEventListener('change', function() {
    var selectedOption = sparepartSelect.options[sparepartSelect.selectedIndex];
    var maxCount = selectedOption.getAttribute('data-count');
    jumlahInput.setAttribute('max', maxCount);
    });
        // Append sparepartSelect and jumlahInput to the form container
    formContainer.appendChild(sparepartSelect);
    formContainer.appendChild(jumlahInput);

    const removeButton = document.createElement('button');
    removeButton.classList.add('btn', 'btn-danger', 'remove-field');
    removeButton.textContent = 'Hapus';

    fieldRow.appendChild(createColumnDiv(sparepartSelect, 'col-md-4'));
    fieldRow.appendChild(createColumnDiv(jumlahInput, 'col-md-2'));
    fieldRow.appendChild(createColumnDiv(removeButton, 'col-md-2'));

    formContainer.appendChild(fieldRow);

    addFieldButton.disabled = formContainer.children.length >= 11; // Disable add field button if maximum limit is reached
  });

  formContainer.addEventListener('click', function(event) {
    if (event.target.classList.contains('remove-field')) {
      event.target.closest('.row.py-3').remove();
      addFieldButton.disabled = false; // Enable add field button after removing a field
    }
  });

  function createColumnDiv(content, className) {
    const colDiv = document.createElement('div');
    colDiv.classList.add(className);
    colDiv.appendChild(content);
    return colDiv;
  }

  document.getElementById('maintenance').addEventListener('submit', function(event) {
    const selectElements = formContainer.querySelectorAll('select[name="sparepart_id[]"]');
    const selectedOptions = Array.from(selectElements).map(select => select.value);
    const jumlahElements = formContainer.querySelectorAll('input[name="jumlah[]"]');

    if (hasDuplicates(selectedOptions)) {
      event.preventDefault(); // Prevent form submission
      alert('Tidak boleh memilih sparepart yang sama pada setiap opsi.'); // Display error message
    }
  });

  function hasDuplicates(array) {
    return (new Set(array)).size !== array.length;
  }
});
</script>

@endsection
