

@extends('layouts.main')

  @section('container')
          
    <!-- Banner -->
    <section class="showcase">
        <video src="images/pantai.mp4" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
          <h2>WisataDsea</h2>
          <h3>Explore The Buniwangi</h3>
          <p>
            Objek wisata yang di dominasi oleh perairan seperti muara dan pantai
          </p>
          <a href="#up">Lets Go!!!</a>
        </div>
      </section>
        
      <!-- Main Container Info Panel -->
      <div class="container">
        <!-- Container Info Panel -->
        <div class="col-lg-12 info-panel pb-4 pt-2 pr-4 pl-4">
          <!-- Container Content Info Panel -->
          <div class="row workingspace" id="up">
            <!-- Heading Info Panel -->
            <h1 class="text-center mb-0 pb-4 pt-2">Buniwangi</h1>
            <!-- Content 1 Info Panel -->
            <div class="col-lg-4">
              <img src="images/book.png" alt="" class="mx-auto d-block" />
              <p class="fw-lighter">
                Desa Buniwangi merupakan desa pemekaran yang sebelumnya merupakan bagian dari Wilayah Desa Pasiripis. Seiring dengan perkembangan waktu, jumlah penduduk semakin bertambah, supaya lebih efektif dan maksimal dalam menjalankan roda pemerintahan maka atas dasar itulah para tokoh masyarakat berinisiatif untuk memekarkan Desa menjadi dua yaitu Desa Asal (Desa Pasiripis) dan Desa Pemekaran (Desa Buniwangi).
              </p>
            </div>
            <!-- Content 2 Info Panel -->
            <div class="col-lg-4">
              <img src="images/location.png" alt="" class="mx-auto d-block" />
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="rounded d-inline"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31654.31917241471!2d106.52277790601454!3d-7.377429148891508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e680206af40ddd3%3A0xe09efe8bec6ad2e3!2sBuniwangi%2C%20Kec.%20Surade%2C%20Kabupaten%20Sukabumi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1650185212905!5m2!1sid!2sid"
                width="100%" height="80%" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
              </iframe>
              </div>
            </div>
            <!-- Content 3 Info Panel -->
            <div class="col-lg-4">
              <img src="images/tree.png" alt="" class="mx-auto d-block" />
              <p class="fw-lighter">
                Buniwangi adalah salah satu kelurahan di Kecamatan Surade, Kabupaten Sukabumi, Provinsi Jawa Barat, Indonesia. Kelurahan ini terletak sekitar 5-6 km di selatan pantai Minanjaya melalui jalan raya Cibungur-Minajaya.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Image List -->
      <div class="conta">
        <div class="containerDestinasi" id="destinasi">
          <h1 class="name">Destination list</h1>
          <div class="isiPilihanDestinasi mt-5 owl-carousel ">
            
            <!-- Item Card -->
            @foreach ($post as $post)
            <div class="item">
              <div class="card-list">
                <img src="{{ asset('storage/'.$post -> image1) }}" alt="" />
                <div class="info">
                  <h1>{{ $post -> name }}</h1>
                  <div class="descript">
                    <p>{{ $post -> excert }}</p>
                  </div>
                  <a href="listdestinations/{{ $post -> slug }}" class="btn-card">Read More</a>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>
        </div>
        <a class="position-absolute top-100 start-50 translate-middle" href="/listDestinations">Explore</a>
      </div>
    <!-- Footer -->
    @endsection

