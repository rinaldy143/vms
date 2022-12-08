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

                                    <option value="" disabled selected>{{__('Search Sparepart or brand')}}</option>

                                    <option value="Oli" >Oli</option>
                                    <option value="Bellato" >Bellato</option>
                                    <option value="Cora" >Cora</option>
                                    {{-- <select class="form-select " aria-label="select location"
                                        id="inputLocations" name="locations" required>
                                        <option selected>{{__('contact-form.selectLocation')}}</option>
                                        @foreach ($locations as $location)
                                        <option value="{{ $location->id }}">{{$location->nama}}</option>
                                        @endforeach --}}
                                    </select>
                                    <div class="form-group d-flex justify-content-between align-items-center py-5">
                                        <div>
                                            <img id="my_imgS" class="pt-3" src="" alt="">
                                        </div>
                                         <div class="h-50">
                                            <h2 id="list_file1"> </h2>
                                            <span class="fw-lighter" id="text_file1"></span>
                                         </div>
                                         <div class="number-input" id="input1" style="display: none;">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number" value={{old('Stock')}}>
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                        </div>
                                    </div>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
     $(function() {
   $('#Sparepart').change( function() {
   restock = $(this).val();
      if (restock == 'Oli') {
          $('#my_imgS').attr("src","img/Mask group.png");
          $('#list_file1').text("Oli Castrol");
          $('#text_file1').text("Castrol");
      }
      if (restock == 'Bellato') {
          $('#my_imgS').attr("src","img/Mask group.png");
          $('#list_file1').text("Oli Castrol");
          $('#text_file1').text("Castrol");

      }
      if (restock == 'Cora') {
          $('#my_imgS').attr("src","img/Mask group.png");
          $('#list_file1').text("Oli Castrol");
          $('#text_file1').text("Castrol");

      }
      var input1 = document.getElementById('input1');
      input1.style.display = 'inline-flex';

  });
});



</script>
<script>
var fullPath = document.getElementById("my_imgS").src;
var filename = fullPath.replace(/^.*[\\\/]/, '');
     // or, try this,
     // var filename = fullPath.split("/").pop();

    document.getElementById("list_file1").value = filename
</script>
