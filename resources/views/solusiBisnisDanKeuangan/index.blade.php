@extends('layouts.website')
@section('title', 'Solusi Bisnis dan Keuangan')
@section('meta_description', 'Solusi Bisnis dan Keuangan')
{{-- @section('meta_logo', '') --}}

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li class="current text-uppercase">{{ __('services.solusi_bisnis_dan_keuangan') }}</li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Page Title -->

    @include('components.services.layanan-keuangan-dan-akuntansi')

    @include('components.services.jasa-konsultasi-pajak')

    @include('components.services.solusi-pendanaan-dan-investasi')


    @include('components.share')
</main>
@endsection
