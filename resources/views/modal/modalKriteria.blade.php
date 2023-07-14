<div class="modal fade" id="modalKriteria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="{{route('weightproduct.store')}}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="modal-content p-3 w-611px">
                <div class="modal-header">
                    <div class="heading-3" id="exampleModalLongTitle">
                        Add Kriteria
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
                            <label for="kriteria" class="subtitle-1">
                                {{__('Kriteria')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="field-input pt-2 pb-6">
                                <input type="text" id="kriteria" name="kriteria" class="form-control" placeholder="Ex. ol-01" maxlength="200" value={{old('kriteria')}}>
                                @error('kriteria')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <label for="status" class="subtitle-1">
                                {{__('status')}}
                                <span class="text-danger">*</span>
                            </label>
                            <div class="field-input pt-2 pb-6">
                                <input type="text" id="status" name="status" class="form-control" placeholder="Ex. ol-01" maxlength="200" value={{old('status')}}>
                                @error('status')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 mb-lg-0 col-lg-6">
                            <label for="nilai_bobot" class="subtitle-1">
                                Nilai Bobot
                                <span class="text-danger">*</span>
                            </label>
                            <div class="field-input pt-2 pb-6">
                                <input type="text" id="nilai_bobot" name="nilai_bobot" class="form-control"
                                   placeholder="Ex. Castrol" maxlength="200" value={{old('nilai_bobot')}}>
                                @error('nilai_bobot')
                                <div class="invalid-feedback d-flex">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <input type="text" name="prioritas" id="prioritas"> --}}

                        {{-- <input type="hidden" name="prioritas" value="">
                        <input type="hidden" name="bobot" value=""> --}}
                    </div>
                </div>
                <div class="modal-footer border-0" style="flex-wrap: nowrap">
                        <div class="col-md-5">
                            <button class="btn btn-danger rounded-8 w-200px" type="submit" id="downloadWp" name="downloadWp">
                                Add Kriteria
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

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('form').submit(function(event) {
      event.preventDefault(); // Menghentikan proses submit form

      var nilai_bobot = parseInt($('#nilai_bobot').val()) || 0; // Mendapatkan nilai dari input "n7"

      // Menggunakan AJAX untuk mendapatkan total dari kolom "n7"
      $.ajax({
        url: '/get-total', // Ganti dengan URL yang sesuai untuk mendapatkan total nilai dari kolom "n7"
        method: 'GET',
        success: function(response) {
          var total = parseInt(response.total) || 0;

          // Melakukan perhitungan hasil
          var hasilValue = nilai_bobot / total;

          // Mengisi nilai hasil ke input "hasil"
          $('#prioritas').val(hasilValue);

          // Melanjutkan proses submit form
          $('form').off('submit').submit();
        },
        error: function(xhr, status, error) {
          console.log(error); // Menampilkan pesan error jika terjadi kesalahan pada AJAX
        }
      });
    });
  });
</script> --}}
