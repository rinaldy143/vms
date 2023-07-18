<div class="modal fade" id="modalMaintain" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('workorder.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content m-lg-10 p-3 p-3">
                <div class="modal-header">
                    <h4 class="text-color-dark font-weight-semibold text-transform-none text-5 m-0"
                        id="exampleModalLongTitle">Add Maintainer</h4>
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
                                <label for="maintain"
                                    class="font-weight-bold text-black mt-4">{{__('Maintainer')}} <span
                                    class="text-danger">*</span></label>
                                </label>
                                <input type="hidden" name="rm_id" value="{{ $maintenance->id }}">

                                <div class="field-input">
                                    {{-- <select class="form-control" aria-label="maintain" id="maintain"
                                        name="user_id[]" multiple>

                                        <option value="" disabled selected>{{__('add maintainer')}}</option>
                                            @foreach ($user as $users)
                                            <option value="{{ $users->id }}" data-telepon="{{ $user->phone_number }}">{{$users->name}}</option>
                                            @endforeach
                                    </select> --}}
                                    <div id="warningMessage" style="display: none; color: red;">
                                        Anda hanya bisa memilih dua opsi.
                                    </div>

                                    <select class="form-control" aria-label="maintain" id="maintain" name="user_id[]" multiple="multiple" size="4" onchange="limitSelection(this);">
                                        <option value="" disabled selected>{{__('add maintainer')}}</option>
                                        @foreach ($user as $item)
                                        @if ($item->role == 'Mechanices')
                                          <option value="{{ $item->id }}" data-phone="{{ $item->phone_number }}" data-image="{{ $item->photo }}">{{ $item->name }}</option>
                                          @endif
                                        @endforeach
                                      </select>


                                      {{-- <div id="previewContainer" class="preview-container"></div> --}}

                                        @error('maintain')
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
                            <input class="btn shadow btn-danger text-3 rounded-8 w-200px p-md-3 h-100" type="submit" value="Start Breakdown">
                    </div>
                    <div class="col-md-6 text-center">
                        <button type="reset" class="btn border border-danger text-danger text-3 rounded-8 w-75 p-md-3 h-100 close-share" data-dismiss="modal" aria-label="Close"
                            id="cancelButton" type="button">Cancel</button>


                    </div>
                </div>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
const selectElement = document.getElementById('maintain');
const previewContainer = document.getElementById('previewContainer');
const cancelButton = document.getElementById('cancelButton');

selectElement.addEventListener('change', function() {
  previewContainer.innerHTML = ''; // Bersihkan preview sebelum membangun ulang

  const selectedOptions = Array.from(this.selectedOptions);
  selectedOptions.forEach(option => {
    const name = option.textContent;
    const phone = option.getAttribute('data-phone');
    const image = option.getAttribute('data-image');

    const previewItem = document.createElement('div');
    previewItem.classList.add('preview-item');

    const imageElement = document.createElement('img');
    imageElement.src = '../img/users/' + image;

    const contentContainer = document.createElement('div');
    contentContainer.classList.add('preview-content');

    const nameElement = document.createElement('p');
    nameElement.textContent = name;

    const phoneElement = document.createElement('p');
    phoneElement.textContent = phone;

    contentContainer.appendChild(nameElement);
    contentContainer.appendChild(phoneElement);

    previewItem.appendChild(imageElement);
    previewItem.appendChild(contentContainer);
    previewContainer.appendChild(previewItem);
  });
});


    cancelButton.addEventListener('click', function() {
    selectElement.selectedIndex = -1; // Menghilangkan pilihan yang terpilih
    previewContainer.innerHTML = ''; // Menghapus preview
    });

    function limitSelection(selectElement) {
        // Ambil semua opsi yang dipilih dalam elemen select
        const selectedOptions = Array.from(selectElement.selectedOptions);

        // Jika jumlah opsi yang dipilih melebihi dua, batasi ke dua
        if (selectedOptions.length > 2) {
            // Tampilkan pesan peringatan
            document.getElementById('warningMessage').style.display = 'block';

            // Batasi pilihan ke dua opsi pertama
            for (let i = 0; i < selectedOptions.length; i++) {
                if (i >= 2) {
                    selectedOptions[i].selected = false;
                }
            }
        } else {
            // Sembunyikan pesan peringatan jika jumlah pilihan valid
            document.getElementById('warningMessage').style.display = 'none';
        }
    }
</script>
