@extends('layouts.main')
  
  @section('container')
    
    <!-- Image List -->
    <div class="conta">
      <div class="containerDestinasi" id="destinasi">
        <h1 class="name">Destination list</h1>
        <div class="isiPilihanDestinasi mt-5">
          
          @foreach ($posts as $post)
          <div class="item">
            <div class="card-list-page">
              <img src="{{ asset('storage/'. $post -> image1) }}" alt="{{ $post -> name }}" />
              <div class="info-destinasi">
                <h1>{{ $post -> name }}</h1>
                <div class="descript-list">
                  <p>{{ $post -> excert }}</p>
                </div>
                <a href="listdestinations/{{ $post -> slug }}" class="btn-card">Read More</a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
    <div class="container">
      <div class="d-flex justify-content-center">
        {{ $posts -> links() }}
      </div>
    </div>


  @endsection
