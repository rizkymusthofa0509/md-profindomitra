@extends('layouts.website')
@php
    $titles = [
        'PT. Tigapilar Profindo Mitra - Laporan Tahunan & Keberlanjutan',
        'PT. Tigapilar Profindo Mitra - Jasa Pemeriksaan & Manajemen Risiko',
        'PT. Tigapilar Profindo Mitra - Keuangan, Akuntansi & Pajak',
        'PT. Tigapilar Profindo Mitra - Layanan Digital & Teknologi',
        'PT. Tigapilar Profindo Mitra - Solusi Bisnis Berkualitas Tinggi',
    ];

    $descriptions = [
        'Layanan kami meliputi Laporan Tahunan & Laporan Keberlanjutan dengan kualitas terbaik.',
        'Jasa Pemeriksaan & Manajemen Risiko untuk mendukung transparansi dan akurasi.',
        'Keuangan, Akuntansi & Pajak yang mendukung pertumbuhan bisnis Anda.',
        'Layanan Digital & Teknologi untuk transformasi digital yang optimal.',
        'Beragam layanan lainnya dengan kualitas terbaik untuk kebutuhan bisnis Anda.',
    ];

    $currentTitle = $titles[array_rand($titles)];
    $currentDescription = $descriptions[array_rand($descriptions)];
@endphp

@section('title', $currentTitle)
@section('meta_description', $currentDescription)

@section('meta_logo',url('assets/logo.png') )

@section('content')

<main class="main">

    <style>
        .hero {
              position: relative;
              overflow: hidden;
              background-color: #f5f7f9; /* Warna latar belakang utama */
          }

          /* Lingkaran di pojok kanan atas */
          .hero::before {
              content: "";
              position: absolute;
              top: -150px;
              right: -150px;
              width: 400px;
              height: 400px;
              background-color: rgb(25, 119, 204); /* Warna biru */
              border-radius: 50%;
              z-index: 2; /* Pastikan lingkaran tetap di atas garis */
          }

          /* Garis lebar dari kiri ke kanan */
          /* Mobile HP */
          .hero::after {
              content: "";
              position: absolute;
              top: 70px; /* Sesuaikan posisi */
              left: 180px;
              width: 100vw; /* Pastikan selebar layar */
              height: 150px; /* Lebih lebar */
              background: linear-gradient(to right, white 5%, rgb(25, 119, 204) 14%, rgb(25, 119, 204));
              z-index: 1; /* Tetap di belakang elemen lain */
              border-radius: 0px; /* Bisa disesuaikan jika ingin lebih lembut */
          }


      /* Lingkaran di pojok kiri atas */
      .hero-circle {
          position: absolute;
          top: -25px;
          left: 10px;
          width: 350px; /* Ukuran lingkaran default */
          height: 750px;
          z-index: 2;
          display: flex;
          justify-content: center;
          align-items: flex-start;
          padding-top: 0px;
      }

      /* Gambar di dalam lingkaran */
      .hero-icon {
          width: 80%; /* Ukuran gambar mengikuti lingkaran */
          max-width: 100%;
          height: auto;
          z-index: 3;
      }

      .hero-right {
          position: absolute;
          top: 30px;
          right: 150px;
          width: 250px; /* Ukuran lingkaran default */
          height: 220px;
          z-index: 2;
          display: flex;
          justify-content: center;
          align-items: flex-start;
          padding-top: 0px;
      }

      /* Gambar di dalam lingkaran */
      .hero-icon-right {
          width: 80%; /* Ukuran gambar mengikuti lingkaran */
          max-width: 100%;
          height: auto;
          z-index: 3;
      }



      .welcome {
          position: relative;
          left:200px;
      }
      .card-welcome {
          margin-left:170px;
      }

      /* Ukuran lebih kecil di mobile */
      @media (max-width: 767px) {
          .hero-circle {
              top: 10px;
              width: 150px; /* Lingkaran lebih kecil di mobile */
              height: 350px;
          }

          .hero-icon {
              width: 30%; /* Gambar lebih kecil di mobile */
          }
          .welcome {
              position: relative;
              left:0px;
          }

          .hero-right {
              display: none;
          }
          .card-welcome {
              margin-left:0px;
          }


      }





          /* Untuk Tablet */
          @media (min-width: 768px) {
              .hero::before {
                  width: 400px;
                  height: 400px;
                  top: -180px;
                  right: -180px;
              }

              .hero::after {
                  height: 100px;
                  top: 100px;
              }
          }

          /* Kalau dilaptop */
          @media (min-width: 1024px) {
              .hero::before {
                  width: 600px;
                  height: 600px;
                  top: -200px;
                  right: -200px;
              }

              .hero::after {
                  height: 150px;
                  top: 80px;
              }
          }


      </style>
      <style>
        @media (max-width: 768px) {
            .welcome h2, .welcome p {
                color: black !important;
            }
        }
    </style>

    <section id="hero"  class="hero section">

        <div class="hero-circle">
            <img src="{{url('ilus/profindoWEB_office.webp')}}" alt="Gambar di dalam lingkaran" class="hero-icon">
        </div>
        <div class="hero-right">
            <img src="{{url('ilus/profind0_ilust_11.png')}}" style="" alt="Gambar di dalam lingkaran" class="hero-right">
        </div>
        <!-- Konten Utama -->
        <div class="container position-relative" style="z-index: 2;">
            <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                <h2 class="text-white">Profindo Mitra</h2>
                <p class="text-white">{{ __('messages.hero_section.welcome_text') }}</p>
            </div>

            <div class="content row gy-4 card-welcome">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                        <h3>{{ __('messages.hero_section.sinergi_title') }}</h3>
                        <p>{{ __('messages.hero_section.sinergi_content') }}</p>
                        <div class="text-center">
                            <a href="{{ url('tentang-kami') }}" class="more-btn">
                                <span>{{ __('messages.hero_section.more_info_link') }}</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="row gy-4">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h4>{{ __('messages.hero_section.services_title') }}</h4>
                                    <p>{{ __('messages.hero_section.services_content') }}</p>
                                </div>
                            </div>

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                    <i class="bi bi-gem"></i>
                                    <h4>{{ __('messages.hero_section.expertise_title') }}</h4>
                                    <p>{{ __('messages.hero_section.expertise_content') }}</p>
                                </div>
                            </div>

                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>{{ __('messages.hero_section.innovation_title') }}</h4>
                                    <p>{{ __('messages.hero_section.innovation_content') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="position-relative py-5 bg-light"
    style="background-image: url('{{ url('ilus/Indonesian_cities_and_regencies.svg') }}');
           background-size: contain;
           background-position: center;
           background-repeat: no-repeat;">

    <!-- Gambar Ilustrasi sebagai Background -->
    <img src="{{ url('ilus/profind0_ilust_15.png') }}"
         class="illustration-bg"
         alt="Ilustrasi">

    <!-- Konten Utama -->
    <div class="container position-relative">
        <div class="row gy-4 align-items-center">
            <!-- Konten Teks -->
            <div class="col-lg-8 order-lg-2" data-aos="fade-left">
                <div class="bg-white bg-opacity-50 p-4 p-lg-5 rounded-3 shadow">
                    <h3 class="fw-bold mb-3 text-dark">
                        {{ __('messages.about_section.commitment_title') }}
                    </h3>
                    <p class="fs-5 text-muted">
                        {{ __('messages.about_section.commitment_content') }}
                    </p>
                    <p class="fs-5 text-muted">
                        {{ __('messages.about_section.commitment_content_more') }}
                    </p>
                </div>
            </div>
            <!-- Gambar Ilustrasi Konten -->
            <div class="col-lg-4 order-lg-1 text-center" data-aos="fade-up" data-aos-delay="200">
                {{-- <img src="{{ url('ilus/profind0_ilust_15.png') }}"
                     class="img-fluid"
                     alt="Ilustrasi"> --}}
            </div>
        </div>
    </div>
</section>

<style>
    #about {
        position: relative;
    }

    .illustration-bg {
        position: absolute;
        top: 50%;
        left:20%;
        transform: translate(-50%, -50%);
        width: 40%; /* Sesuaikan ukuran */
        opacity: 0.3; /* Sesuaikan transparansi */
        z-index: 1;
    }

    #about .container {
        position: relative;
        z-index: 2; /* Agar konten tetap di atas ilustrasi */
    }
</style>






     <!-- Tema 1 -->
    <section id="services_section" class="py-5">
        <div class="container" data-aos="fade-up">
            <h2 class="fw-bold mb-3" style="font-size: 2.5rem;">{{ __('messages.services_section.title') }}</h2>

            <div class="row">

                <div class="col-md-9">
                   <div class="row">
                    @foreach(__('messages.services_section.services_list') as $service)
                    <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                        <div class="card shadow-lg h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><a href="{{ url($service['url']) }}">{{ $service['title'] }}</a></h5>
                                <p class="card-text">
                                    {{ $service['description'] }}
                                    <a href="{{ url($service['url']) }}" class="text-primary">{{ $service['link'] }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   </div>
                </div>
                <div class="col-lg-3 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{url('ilus/profind0_ilust_8.png')}}" style="border-radius: 50px;" width="100%" class="img-fluid" alt="">
                  </div>
            </div>

        </div>
    </section>
    <!-- Section Artikel -->
    <section class="artikel-popular py-5">
        <div class="container">
        <!-- Judul Section -->
        <div class="row text-center flex flex-row justify-content-center mb-5">
            <div class="div">
                <h2 class="fw-bold">{{ __('messages.artikel_section.title') }} <span class="text-primary" style="position: relative;">{{ __('messages.artikel_section.title_second') }}<span style="position: absolute; bottom: 0; left: 0; height: 5px; width: 100%; background-color: #FFCD00; z-index: -1;"></span></span></h2>
                <p class="text-muted">{{ __('messages.artikel_section.description') }}</p>
            </div>
        </div>

        <!-- Grid Artikel -->
        <div class="row g-4">
            @foreach ($dataArtikelAll as $item)
            <!-- Card Artikel 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{url($item->image)}}" class="card-img-top" alt="Artikel Image">
                    <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{url('assets/user.png')}}" class="rounded-circle me-2" style="width:2.5em;" alt="Profile">
                        <div>
                        <h6 class="mb-0">{{$item->author}}</h6>
                        <small class="text-muted">Publisher</small>
                        </div>
                    </div>
                        <span class="badge bg-warning text-dark mb-2">{{$item->category->name ?? ''}}</span>
                        <h5 class="card-title" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-overflow: ellipsis; margin: 0;">
                            <a href="{{ url('articles/'.$item->slug) }}" style="text-decoration: none; color: black;">{{$item->title}}</a>
                        </h5>
                        <a href="{{url('articles/'.$item->slug)}}" class="btn btn-outline-primary">Selengkapnya</a>
                        <div class="text-muted mt-3 d-flex align-items-center">
                            <i class="bi bi-clock me-1"></i>
                            <small>{{$item->created_at->diffForHumans()}}</small>
                        </div>
                    </div>
                </div>
                </div>
            @endforeach



        </div>
        <div class="row text-center flex justify-content-center mt-5">
            <a href="{{url('articles')}}" class="btn btn-outline-primary" style="width: 20%;">{{ __('messages.artikel_section.button') }}</a>
        </div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="janji_kami" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('messages.janji_kami.title') }}</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4" style="margin-top:-5em;">
                @foreach(__('messages.janji_kami.promise_list') as $key => $promise)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="{{ $promise['icon'] }}"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>{{ $promise['title'] }}</h3>
                            </a>
                            <p>{{ $promise['description'] }}</p>
                        </div>
                    </div><!-- End Service Item -->
                @endforeach
            </div>
        </div>
    </section>




  </main>

@endsection
