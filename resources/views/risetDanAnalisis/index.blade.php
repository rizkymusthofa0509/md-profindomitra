@extends('layouts.website')
@section('title', ' Riset dan Analisis')
@section('meta_description', ' Riset dan Analisis ')
{{-- @section('meta_logo', '') --}}

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('') }}">HOME</a></li>
                    <li class="current text-uppercase">{{ __('services.riset_dan_analisis') }} </li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Page Title -->

    <!-- Tema 1 -->
    @include('components.services.layanan-riset-dan-analisis-sosial')
    <!-- End Tema 1 -->

@include('components.share')

</main>
@endsection
