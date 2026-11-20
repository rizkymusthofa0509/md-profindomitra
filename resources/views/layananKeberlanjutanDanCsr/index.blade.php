@extends('layouts.website')
@section('title', 'Environment, Social, and Governance (ESG)')
@section('meta_description', 'Environment, Social, and Governance (ESG)')
{{-- @section('meta_logo', '') --}}

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('') }}">HOME</a></li>
                    <li class="current text-uppercase">{{ __('services.esg') }}</li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Page Title -->


    @include('components.services.konsultasi-emisi-karbon')

    @include('components.services.jasa-pendampingan-csr')

    @include('components.share')
</main>
@endsection
