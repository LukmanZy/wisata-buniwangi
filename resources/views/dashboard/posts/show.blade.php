@extends('dashboard.layouts.main')


@section('container')
<a href="/dashboard/posts" class="btn btn-success my-3 border-0"><span data-feather="arrow-left"></span> Back</a>
<a href="/dashboard/posts/{{ $post -> slug }}/edit" class="btn btn-warning my-3"><span data-feather="edit"></span> Edit</a>

<form action="/dashboard/posts/{{ $post -> slug }}" method="post" class="d-inline">
  @method('delete')
  @csrf
  <button class="btn btn-danger border-0 my-3" onclick="return confirm('Yakin mau hapus data?')"><span data-feather="x-circle"></span>Delete</button>
</form>

    <!-- Main Container Info Panel -->
    <div class="container mt-lg-3">
      <!-- Info Panel -->
      <div class="col-lg-12 info-panel pb-4 pt-2 pr-4 pl-4">
        <!-- Content Info Panel -->
        <div class="row workingspace">
          <h1 class="text-center mb-0 pb-4 pt-2">{{ $post -> name }}</h1>
          <div class="col-lg-4">
            <img src="/images/tree.png" alt="" class="mx-auto d-block" />
            <p class="fw-lighter">
              {{ $post -> excert }}
            </p>
          </div>
          <div class="col-lg-4">
            <img src="/images/location.png" alt="" class="mx-auto d-block" />
            {!! $post->loc !!}
          </div>
          <!-- Content 3 -->
          <div class="col-lg-4">
            <img src="/images/money.png" alt="" class="mx-auto d-block" />
            <p class="fw-lighter">
              {{ $post -> tiket }}
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Container Descriptions -->
    <div class="container-fluid mt-5 conIsi">
      <!-- Content Descriptions -->
      <div class="isiDestinasi">
        <h1 class="px-lg-3"> {{ $post -> name }} </h1>
        {{-- <p class="pl-lg-4 mt-lg-2">
          {{ $post -> desc }}
        </p> --}}
        <p class="pl-lg-4 mt-lg-2">
          {!! $post -> desc !!}
        </p>
      </div>

      <!-- Imgae Gallery -->
      <div class="container">
        <div class="title">
          <h3>Photo Gallery</h3>
        </div>
        <div class="image-gallery">  
          <a href="{{ asset('storage/'. $post -> image1) }}" data-lightbox="images">
            <img src="{{ asset('storage/'. $post -> image1) }}" alt="name" width="200"/>
          </a>

          <a href="{{ asset('storage/'. $post -> image2) }}" data-lightbox="images">
            <img src="{{ asset('storage/'. $post -> image2) }}" alt="name">
          </a>

          <a href="{{ asset('storage/'. $post -> image3) }}" data-lightbox="images">
            <img src="{{ asset('storage/'. $post -> image3) }}" alt="name" />
          </a>

          <a href="{{ asset('storage/'. $post -> image4) }}" data-lightbox="images">
            <img src="{{ asset('storage/'. $post -> image4) }}" alt="name" />
          </a>

          <a href="{{ asset('storage/'. $post -> image5) }}" data-lightbox="images">
            <img src="{{ asset('storage/'. $post -> image5) }}" alt="name">
          </a>

        </div>
      </div>
    </div>
@endsection