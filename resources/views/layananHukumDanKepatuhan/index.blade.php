@extends('layouts.website')
@section('title', 'Layanan Hukum dan Kepatuhan ')
@section('meta_description', 'Layanan Hukum dan Kepatuhan ')
{{-- @section('meta_logo', '') --}}

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('') }}">HOME</a></li>
                    <li class="current text-uppercase">{{ __('services.layanan_hukum_dan_kepatuhan') }}  </li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Page Title -->


    @include('components.services.jasa-konsultasi-hukum')

    @include('components.services.jasa-pemeriksaan-dan-kepatuhan')

    @include('components.services.layanan-pengelolaan-risiko')


     <!-- Tema 1 -->

    <!-- End Tema 1 -->
    @include('components.share')
</main>
@endsection
