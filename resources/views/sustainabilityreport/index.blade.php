@extends('layouts.website')
@section('title','Layanan Sustainability Report')
@section('meta_description','Layanan Sustainability Report membantu perusahaan dalam menyusun laporan keberlanjutan yang sesuai dengan standar global untuk meningkatkan transparansi dan tanggung jawab.')
{{-- @section('meta_logo','' ) --}}

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{url('')}}">HOME</a></li>
            <li class="current text-uppercase">{{ __('services.layanan_laporan_tahunan_dan_laporan_keberlanjutan') }}</li>
          </ol>
        </div>
      </nav>
    </div>

    <section id="tema-1" class="py-5">
        <div class="container" data-aos="fade-up">
            <h2 class="fw-bold mb-0 text-ucfirst" style="font-size: 2.5rem;">
                {{ __('layanan_laporan_tahunan.title') }}
            </h2>
            <p class="fw-bold mb-4">{{ __('layanan_laporan_tahunan.subtitle') }}</p>

            <div class="row">
                <div class="col-md-3">
                    <div style="height: 100%; width: 100%; border-radius: 10px; overflow: hidden;">
                        <img src="{{url('ilus/profind0_ilust_10.png')}}"
                             style="height: 100%; width: 100%; object-fit: cover;"
                             alt="Annual Report Sustainability">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        @foreach (__('layanan_laporan_tahunan.services') as $service)
                            <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                                <div class="card shadow-lg h-100">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">{{ $service['title'] }}</h5>
                                        <p class="card-text">{{ $service['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="tema-2" class="py-5">
        <div class="container" data-aos="fade-up">
            <h2 class="fw-bold mb-0 text-ucfirst" style="font-size: 2.5rem;">{{ __('layanan_laporan_berkelanjutan.title') }}</h2>
            <p class="fw-bold mb-4">{{ __('layanan_laporan_berkelanjutan.subtitle') }}</p>

            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        @foreach(__('layanan_laporan_berkelanjutan.services') as $service)
                            <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-in">
                                <div class="card shadow-lg h-100">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">{{ $service['title'] }}</h5>
                                        <p class="card-text">{{ $service['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3">
                    <div style="height: 100%; width: 100%; border-radius: 10px; overflow: hidden;">
                        <img src="{{url('ilus/profind0_ilust_21.png')}}"
                             style="height: 100%; width: 100%; object-fit: cover;"
                             alt="Annual Report Sustainability">
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- End Sustainability Report Section -->
    @include('components.share')
</main>
@endsection
