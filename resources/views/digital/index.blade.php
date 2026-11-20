@extends('layouts.website')
@section('title','Layanan Digital Services')
@section('meta_description','Layanan Digital Services kami mencakup pengembangan software, web, mobile apps, hingga layanan digital marketing untuk mendukung transformasi digital bisnis Anda.')
{{-- @section('meta_logo','' ) --}}

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{url('')}}">HOME</a></li>
            <li class="current text-uppercase">{{ __('services.layanan_digital') }}</li>
          </ol>
        </div>
      </nav>
    </div>
    <!-- End Page Title -->
    <section id="tema-1" class="py-5">
        <div class="container" data-aos="fade-up">
            <h2 class="fw-bold mb-3 text-ucfirst" style="font-size: 2.5rem;">
                {{ __('top_solusi_digital_dan_teknologi.judul') }}
            </h2>
            <p class="mb-4">{{ __('top_solusi_digital_dan_teknologi.subjudul') }}</p>

            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ __('top_solusi_digital_dan_teknologi.pengembangan_sistem_dan_aplikasi.judul') }}</h5>
                                    <p class="card-text">{{ __('top_solusi_digital_dan_teknologi.pengembangan_sistem_dan_aplikasi.deskripsi') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ __('top_solusi_digital_dan_teknologi.konsultasi_transformasi_digital.judul') }}</h5>
                                    <p class="card-text">{{ __('top_solusi_digital_dan_teknologi.konsultasi_transformasi_digital.deskripsi') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ __('top_solusi_digital_dan_teknologi.layanan_manajemen_jaringan_dan_infrastruktur_it.judul') }}</h5>
                                    <p class="card-text">{{ __('top_solusi_digital_dan_teknologi.layanan_manajemen_jaringan_dan_infrastruktur_it.deskripsi') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ __('top_solusi_digital_dan_teknologi.layanan_keamanan_siber.judul') }}</h5>
                                    <p class="card-text">{{ __('top_solusi_digital_dan_teknologi.layanan_keamanan_siber.deskripsi') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div style="height: 100%; width: 100%; border-radius: 10px; overflow: hidden;">
                        <img src="{{url('ilus/profind0_ilust_15.png')}}"
                             style="height: 100%; width: 100%; object-fit: cover;"
                             alt="Annual Report Sustainability">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Digital Services Section -->

    <!-- End Digital Services Section -->
    @include('components.share')
</main>
@endsection
