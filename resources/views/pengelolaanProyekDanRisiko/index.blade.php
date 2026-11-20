@extends('layouts.website')
@section('title', 'Jasa Arsitek, Konstruksi dan Interior')
@section('meta_description', 'Jasa arsitek, konstruksi, dan interior profesional untuk hunian, kantor, dan komersial. Desain inovatif, konstruksi berkualitas, serta interior elegan yang sesuai kebutuhan Anda. Hubungi kami untuk solusi terbaik!')
{{-- @section('meta_logo', '') --}}

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('') }}">HOME</a></li>
                    <li class="current text-uppercase">{{ __('services.jasa_arsitek_konstruksi_dan_interior') }}</li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Page Title -->
     <!-- Tema 1 -->
    @include('components.services.jasa-desain-interior')

    @include('components.services.jasa-arsitektur')

    @include('components.services.jasa-konsultasi-dan-proyek-sipil')


    @include('components.share')

</main>
@endsection
