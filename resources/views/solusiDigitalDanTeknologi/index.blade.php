@extends('layouts.website')
@section('title', 'Solusi Digital dan Teknologi')
@section('meta_description', 'Solusi Digital dan Teknologi ')
{{-- @section('meta_logo', '') --}}

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('') }}">HOME</a></li>
                    <li class="current text-uppercase">{{ __('services.solusi_informasi_dan_teknologi') }} </li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Page Title -->

    @include('components.services.solusi-digital-dan-teknologi')

    @include('components.services.layanan-digital-marketing')

    @include('components.services.jasa-desain-grafis-dan-cetakan')


    @include('components.share')
</main>
@endsection
