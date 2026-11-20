@extends('layouts.website')
@section('title','Layanan Finance, Accounting, dan Tax')
@section('meta_description','Layanan Finance, Accounting, dan Tax membantu perusahaan mengelola keuangan, akuntansi, dan pajak secara efektif dan sesuai regulasi.')
{{-- @section('meta_logo','' ) --}}

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{url('')}}">HOME</a></li>
            <li class="current text-uppercase">{{ __('services.layanan_keuangan') }}  </li>
          </ol>
        </div>
      </nav>
    </div>

    <section id="tema-1" class="py-5">
        <div class="container" data-aos="fade-up">
            <h2 class="fw-bold mb-3 text-ucfirst" style="font-size: 2.5rem;">
                {{ __('top_layanan_keuangan_dan_akuntansi.judul') }}
            </h2>
            <p class="fw-bold mb-4">
                {{ __('top_layanan_keuangan_dan_akuntansi.subjudul') }}
            </p>

            <div class="row">
                <div class="col-md-3">
                    <div style="height: 100%; width: 100%; border-radius: 10px; overflow: hidden;">
                        <img src="{{url('ilus/profind0_ilust_9.png')}}"
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
                                        {{ __('top_layanan_keuangan_dan_akuntansi.pembukuan_dan_laporan_keuangan.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_layanan_keuangan_dan_akuntansi.pembukuan_dan_laporan_keuangan.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_layanan_keuangan_dan_akuntansi.konsultasi_akuntansi.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_layanan_keuangan_dan_akuntansi.konsultasi_akuntansi.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_layanan_keuangan_dan_akuntansi.penyusunan_anggaran_perencanaan_keuangan.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_layanan_keuangan_dan_akuntansi.penyusunan_anggaran_perencanaan_keuangan.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_layanan_keuangan_dan_akuntansi.layanan_outsourcing_akuntansi.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_layanan_keuangan_dan_akuntansi.layanan_outsourcing_akuntansi.deskripsi') }}
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
            <h2 class="fw-bold mb-3 text-ucfirst" style="font-size: 2.5rem;">
                {{ __('top_jasa_konsultasi_pajak.judul') }}
            </h2>
            <p class="fw-bold mb-4">
                {{ __('top_jasa_konsultasi_pajak.subjudul') }}
            </p>
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_jasa_konsultasi_pajak.konsultasi_perpajakan.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_jasa_konsultasi_pajak.konsultasi_perpajakan.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_jasa_konsultasi_pajak.kepatuhan_pajak.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_jasa_konsultasi_pajak.kepatuhan_pajak.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_jasa_konsultasi_pajak.perencanaan_pajak.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_jasa_konsultasi_pajak.perencanaan_pajak.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                            <div class="card shadow-lg h-100">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">
                                        {{ __('top_jasa_konsultasi_pajak.pendampingan_pemeriksaan_pajak.judul') }}
                                    </h5>
                                    <p class="card-text">
                                        {{ __('top_jasa_konsultasi_pajak.pendampingan_pemeriksaan_pajak.deskripsi') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div style="height: 100%; width: 100%; border-radius: 10px; overflow: hidden;">
                        <img src="{{url('ilus/profind0_ilust_10.png')}}"
                             style="height: 100%; width: 100%; object-fit: cover;"
                             alt="Annual Report Sustainability">
                    </div>
                </div
            </div>
        </div>
    </section>


    @include('components.share')
</main>
@endsection
