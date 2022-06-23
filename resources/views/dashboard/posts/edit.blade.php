@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>
<div class="col-lg-8">
    <form action="/dashboard/posts/{{ $post -> slug }}" method="post" enctype="multipart/form-data">
      @method('put')  
      @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama tempat wisata</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $post -> name) }}">
          @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post -> slug) }}">
          <div id="slugHelp" class="form-text">* Otomatis akan terisi</div>
          @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="tiket" class="form-label">Tiket</label>
          <input type="text" class="form-control @error('tiket') is-invalid @enderror" id="tiket" name="tiket" required autofocus value="{{ old('tiket', $post -> tiket) }}">
          @error('tiket')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="loc" class="form-label">Lokasi</label>
          <input type="text" class="form-control @error('loc') is-invalid @enderror" id="loc" name="loc" required autofocus value="{{ old('loc', $post -> loc) }}">
          <div id="lokasiHelp" class="form-text text-danger">*CATATAN :</div>
          <div id="lokasiHelp" class="form-text text-danger">*Salin lokasi dari google maps, lalu bagikan, sematkan peta dan salin HTML <br> *Kemudian ubah width nya menjadi 100% dan hapus heigth nya</div>
        </div>
        
        <div class="mb-3">
          <label for="image1" class="form-label">Foto</label>
          <input type="hidden" name="oldImage" value="{{ $post -> image1 }}">
            <img src="{{ asset('storage/'.$post -> image1) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control @error('image1') is-invalid @enderror" type="file" id="image" name="image1" onchange="previewImage()">
          @error ('image1')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="image2" class="form-label">Foto</label>
          <input type="hidden" name="oldImage" value="{{ $post -> image2 }}">
            <img src="{{ asset('storage/'.$post -> image2) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control @error('image2') is-invalid @enderror" type="file" id="image" name="image2" onchange="previewImage()">
          @error ('image2')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="image3" class="form-label">Foto</label>
          <input type="hidden" name="oldImage" value="{{ $post -> image3 }}">
            <img src="{{ asset('storage/'.$post -> image3) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control @error('image3') is-invalid @enderror" type="file" id="image" name="image3" onchange="previewImage()">
          @error ('image3')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="image4" class="form-label">Foto</label>
          <input type="hidden" name="oldImage" value="{{ $post -> image4 }}">
            <img src="{{ asset('storage/'.$post -> image4) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control @error('image4') is-invalid @enderror" type="file" id="image" name="image4" onchange="previewImage()">
          @error ('image4')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="image5" class="form-label">Foto</label>
          <input type="hidden" name="oldImage" value="{{ $post -> image5 }}">
            <img src="{{ asset('storage/'.$post -> image5) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control @error('image5') is-invalid @enderror" type="file" id="image" name="image5" onchange="previewImage()">
          @error ('image5')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="desc" class="form-label">Deskripsi</label>
          @error('desc')
            <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="desc" type="hidden" name="desc" value="{{ old('desc', $post -> desc) }}">
          <trix-editor input="desc"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>

<script>

  const name = document.querySelector("#name");
  const slug = document.querySelector("#slug");

  name.addEventListener("keyup", function() {
    let preslug = name.value;
    preslug = preslug.replace(/ /g,"-");
    slug.value = preslug.toLowerCase();
  });

  document.addEventListener('trix-file-accept', function (e) {
    e.preventDefault();
  });

  function previewImage() {
    const image = document.querySelector('#image')
    const imgPreview = document.querySelector('.img-preview')

    imgPreview.style.display = 'blok';

    const ofReader = new FileReader();
    ofReader.readAsDataURL(image.files[0]);
    
    ofReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
      }
    };

</script>


@endsection