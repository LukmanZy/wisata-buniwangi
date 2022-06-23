@extends('layouts.main')

  @section('container')
    
    <!-- Banner Slider -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('storage/'. $post -> image1) }}" class="d-block w-100" alt="nama" />
          </div>
          <div class="carousel-item">
            <img src="{{ asset('storage/'. $post -> image2 )}}" class="d-block w-100" alt="nama" />
          </div>
          <div class="carousel-item">
            <img src="{{ asset('storage/'. $post -> image3) }}" class="d-block w-100" alt="nama" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
  
      <!-- Main Container Info Panel -->
      <div class="container">
        <!-- Info Panel -->
        <div class="col-lg-12 info-panel pb-4 pt-2 pr-4 pl-4">
          <!-- Content Info Panel -->
          <div class="row workingspace">
            <h1 class="text-center mb-0 pb-4 pt-2">{{ $post -> name }}</h1>
            <div class="col-lg-4">
              <img src="../images/tree.png" alt="" class="mx-auto d-block" />
              <p class="fw-lighter">
                {{ $post -> excert }}
              </p>
            </div>
            <div class="col-lg-4">
              <img src="../images/location.png" alt="" class="mx-auto d-block" />
              <div class="embed-responsive embed-responsive-16by9">
                {!! $post->loc !!}
              </div>
            </div>
            <!-- Content 3 -->
            <div class="col-lg-4">
              <img src="../images/money.png" alt="" class="mx-auto d-block" />
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
          <h1 class="pl-lg-3"> {{ $post -> name }} </h1>
          {!! $post -> desc !!}
        </div>
  
        <!-- Imgae Gallery -->
        <div class="container">
          <div class="title">
            <h3>Photo Gallery</h3>
          </div>
          <div class="image-gallery">

            <a href="{{ asset('storage/'. $post -> image1) }}" data-lightbox="images">
              <img src="{{ asset('storage/'. $post -> image1) }}" alt="{{ $post -> name }}" width="200"/>
            </a>

            <a href="{{ asset('storage/'.$post -> image2) }}" data-lightbox="images">
              <img src="{{ asset('storage/'.$post -> image2) }}" alt="{{ $post -> name }}">
            </a>

            <a href="{{ asset('storage/'.$post -> image3) }}" data-lightbox="images">
              <img src="{{ asset('storage/'.$post -> image3) }}" alt="{{ $post -> name }}" />
            </a>

            <a href="{{ asset('storage/'.$post -> image4) }}" data-lightbox="images">
              <img src="{{ asset('storage/'.$post -> image4) }}" alt="{{ $post -> name }}" />
            </a>

            <a href="{{ asset('storage/'.$post -> image5) }}" data-lightbox="images">
              <img src="{{ asset('storage/'.$post -> image5) }}" alt="{{ $post -> name }}">
            </a>

          </div>
        </div>

      </div>
      
  @endsection