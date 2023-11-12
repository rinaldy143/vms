@extends('layouts.master')

@section('content')
<div class="content">

    <div class="container">


            <div class="heading-4 position-absolute">
                <a class="text-dark" href="/history">< Back</a>
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
                            <p class="text-primary" style="font-size: 14px;margin-bottom: 0;">T-01, T-02</p>
                        </div>
                        <div class="status" style="margin-left: auto;">
                            @if(empty($maintenance->workorder->assign_by))
                                Waiting Start Breakdown
                            @elseif($maintenance->workorder->analysist !== null && $maintenance->workorder->photo !== null)
                                Finish
                            @elseif($maintenance->workorder->analysist !== null)
                                On Maintenance
                            @else
                                Waiting End Breakdown
                            @endif
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
                                        : {{$maintenance->workorder->assign_by}}
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center py-5">
                                    @foreach ($maintenance->WorkOrder->User as $user)
                                    <div class="px-5">
                                        @if( $user->photo == null)
                                            <img src="/img/Ellipse 44.png" alt="" style="width: 48px; border-radius: 20px">
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
                                </div>
                            <div class="col-lg-6 py-5">
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
                                        <img class="pt-3" width="50px" src="/img/users/{{ $sparepart->photo }}" alt="dawda">
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

                        <div class="my-4">
                            <h2 class="pt-3">Maintenance Proof</h2>
                            <div class="px-5">
                                    <img class="pt-3" width="25%" src="/img/workorder/{{ $maintenance->workorder->photo }}" alt="Photo">
                            </div>
                        </div>
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
