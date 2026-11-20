@extends('layouts.website')
@section('title','Berkarir Bersama Kami')
@section('meta_description','Berkarir Bersama Kami')
{{-- @section('meta_logo','' ) --}}

@section('content')
<main class="main">
<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{url('')}}">HOME</a></li>
          <li class="current text-uppercase">{{ __('career.page_title') }}</li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Page Title -->

  <!-- Career Introduction Section -->
  <section id="career-introduction" class="py-5">
      <div class="container" data-aos="fade-up">
          <h2 class="fw-bold mb-4 text-ucfirst" style="font-size: 2.5rem;">{{ __('career.career_intro.judul') }}</h2>
          <p style="font-size: 1.1rem; color: #6c757d;">

              <div class="row">
                <div class="col-md-9">
                    {{ __('career.career_intro.deskripsi') }}
                </div>
                <div class="col-md-3">
                    <div style="height: 100%; width: 100%; border-radius: 10px; overflow: hidden;">
                        <img src="{{url('ilus/profind0_ilust_19.png')}}"
                             style="height: 100%; width: 100%; object-fit: cover;"
                             alt="Architecture Design">
                    </div>
                </div>
              </div>
          </p>
      </div>
  </section>
  <!-- End Career Introduction Section -->

  <!-- Why Join Us Section -->
  <section id="why-join-us" class="py-5 bg-light">
      <div class="container" data-aos="fade-up">
          <h3 class="fw-bold mb-4 text-ucfirst">{{ __('career.why_join_us.judul') }}</h3>
          <div class="row">
              <div class="col-md-4 text-center">
                  <i class="bi bi-people" style="font-size: 2rem; color: #0d6efd;"></i>
                  <h5 class="fw-bold mt-3">{{ __('career.why_join_us.tim_kolaboratif.judul') }}</h5>
                  <p style="color: #6c757d;">{{ __('career.why_join_us.tim_kolaboratif.deskripsi') }}</p>
              </div>
              <div class="col-md-4 text-center">
                  <i class="bi bi-lightbulb" style="font-size: 2rem; color: #0d6efd;"></i>
                  <h5 class="fw-bold mt-3">{{ __('career.why_join_us.peluang_pengembangan.judul') }}</h5>
                  <p style="color: #6c757d;">{{ __('career.why_join_us.peluang_pengembangan.deskripsi') }}</p>
              </div>
              <div class="col-md-4 text-center">
                  <i class="bi bi-award" style="font-size: 2rem; color: #0d6efd;"></i>
                  <h5 class="fw-bold mt-3">{{ __('career.why_join_us.budaya_penghargaan.judul') }}</h5>
                  <p style="color: #6c757d;">{{ __('career.why_join_us.budaya_penghargaan.deskripsi') }}</p>
              </div>
          </div>
      </div>
  </section>
  <!-- End Why Join Us Section -->

  <!-- Open Positions Section -->
  <section id="open-positions" class="py-5">
      <div class="container" data-aos="fade-up">
          <h3 class="fw-bold mb-4">{{ __('career.open_positions.judul') }}</h3>
          <div class="row">
              <!-- Add open positions here -->

          </div>
      </div>
  </section>
  <!-- End Open Positions Section -->

  <!-- Call to Action Section -->
  <section id="cta" class="py-5 bg-primary text-white">
      <div class="container text-center" data-aos="fade-up">
          <h3 class="fw-bold mb-3" style="color:white;">{{ __('career.cta.judul') }}</h3>
          <p class="mb-4">{{ __('career.cta.deskripsi') }}</p>
          <a href="mailto:hrd@profindomitra.co.id" class="btn btn-light btn-lg">{{ __('career.cta.tombol') }}</a>
      </div>
  </section>
  <!-- End Call to Action Section -->

</main>
@endsection
