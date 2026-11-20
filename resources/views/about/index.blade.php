@extends('layouts.website')
@section('title','About Us')
@section('meta_description','Tentang Profinfo Mitra - Entitas usaha di sektor jasa dengan fokus pada keberlanjutan dan solusi strategis.')
{{-- @section('meta_logo','' ) --}}

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{url('')}}">HOME</a></li>
            <li class="current text-uppercase"> {{ __('about.menu') }}</li>
          </ol>
        </div>
      </nav>
    </div>
    <!-- End Page Title -->

    <!-- About Section -->
    <section id="about-us" class="py-5">
        <div class="container" data-aos="fade-up">
            <h2 class="fw-bold mb-4 text-ucfirst" style="font-size: 2.5rem;">{{ __('about.section_title') }}</h2>
            <div class="row">
                <div class="col-md-9">
                    <p style="font-size: 1.1rem; color: #6c757d;">
                        {{ __('about.description') }}
                    </p>
                </div>
                <div class="col-md-3">
                    <div style=" border-radius: 10px; overflow: hidden;">
                        <img src="{{url('ilus/profind0_ilust_20.png')}}"
                             style="height: 50%; width: 50%; object-fit: cover;"
                             alt="Architecture Design">
                    </div>
                </div>
            </div>

            <h3 class="fw-bold mt-5">{{ __('about.vision_title') }}</h3>
            <p style="color: #6c757d;">{{ __('about.vision') }}</p>

            <h3 class="fw-bold mt-5">{{ __('about.mission_title') }}</h3>
            <ul style="color: #6c757d;">
                @foreach(__('about.mission_list') as $mission)
                    <li>{{ $mission }}</li>
                @endforeach
            </ul>

            <h3 class="fw-bold mt-5">{{ __('about.contact_title') }}</h3>
            <ul style="color: #6c757d; list-style: none; padding: 0;">
                <li><strong>{{ __('about.contact_details.company') }}</strong></li>
                <li><strong>{{ __('about.contact_details.address') }}</strong></li>
                <li><strong>E-mail :</strong> <a href="mailto:{{ __('about.contact_details.email') }}">{{ __('about.contact_details.email') }}</a></li>
            </ul>
        </div>
    </section>

    <!-- End About Section -->
    @include('components.share')
</main>
@endsection
