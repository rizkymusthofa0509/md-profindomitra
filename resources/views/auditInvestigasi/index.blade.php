@extends('layouts.website')
@section('title','Layanan Audit dan Investigasi')
@section('meta_description','Layanan Audit dan Investigasi membantu perusahaan dalam memastikan kepatuhan, mengelola risiko, dan menyelidiki masalah operasional.')
{{-- @section('meta_logo','' ) --}}

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{url('')}}">HOME</a></li>
            <li class="current text-uppercase">{{ __('services.jasa_pemeriksaan_dan_manajemen_risiko') }} </li>
          </ol>
        </div>
      </nav>
    </div>
    <!-- End Page Title -->
    <section id="tema-1" class="py-5">
        <div class="container" data-aos="fade-up">
            <h2 class="fw-bold mb-0 text-ucfirst" style="font-size: 2.5rem;">
                {{ __('top_jasa_pemeriksaan_dan_kepatuhan.judul') }}
            </h2>
            <p class="fw-bold mb-4">
                {{ __('top_jasa_pemeriksaan_dan_kepatuhan.subjudul') }}
            </p>

            <div class="row">
                <div class="col-md-3">
                    <div style="height: 100%; width: 100%; border-radius: 10px; overflow: hidden;">
                        <img src="{{url('ilus/profind0_ilust_1.png')}}"
                             style="height: 100%; width: 100%; object-fit: cover;"
                             alt="Annual Report Sustainability">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_jasa_pemeriksaan_dan_kepatuhan.audit_laporan_keuangan.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_jasa_pemeriksaan_dan_kepatuhan.audit_laporan_keuangan.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_jasa_pemeriksaan_dan_kepatuhan.audit_operasional.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_jasa_pemeriksaan_dan_kepatuhan.audit_operasional.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_jasa_pemeriksaan_dan_kepatuhan.audit_kepatuhan.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_jasa_pemeriksaan_dan_kepatuhan.audit_kepatuhan.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_jasa_pemeriksaan_dan_kepatuhan.audit_investigasi.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_jasa_pemeriksaan_dan_kepatuhan.audit_investigasi.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tema-2" class="py-5">
        <div class="container" data-aos="fade-up">
            <h2 class="fw-bold mb-0 text-ucfirst" style="font-size: 2.5rem;">
                {{ __('top_layanan_pengelolaan_risiko.judul') }}
            </h2>
            <p class="fw-bold mb-4">
                {{ __('top_layanan_pengelolaan_risiko.subjudul') }}
            </p>

            <div class="row">

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_layanan_pengelolaan_risiko.konsultasi_manajemen_risiko_perusahaan.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_layanan_pengelolaan_risiko.konsultasi_manajemen_risiko_perusahaan.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_layanan_pengelolaan_risiko.evaluasi_dan_mitigasi_risiko_operasional.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_layanan_pengelolaan_risiko.evaluasi_dan_mitigasi_risiko_operasional.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_layanan_pengelolaan_risiko.pengembangan_kebijakan_dan_sistem_manajemen_risiko.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_layanan_pengelolaan_risiko.pengembangan_kebijakan_dan_sistem_manajemen_risiko.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_layanan_pengelolaan_risiko.pelatihan_manajemen_risiko.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_layanan_pengelolaan_risiko.pelatihan_manajemen_risiko.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div style="height: 100%; width: 100%; border-radius: 10px; overflow: hidden;">
                        <img src="{{url('ilus/profind0_ilust_11.png')}}"
                             style="height: 100%; width: 100%; object-fit: cover;"
                             alt="Annual Report Sustainability">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Audit and Investigation Services Section -->
    @include('components.share')
</main>
@endsection
