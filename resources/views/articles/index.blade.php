@extends('layouts.website')
@section('title','PT. Tigapilar Profindo Mitra')
@section('meta_description','Home')
{{-- @section('meta_logo',url('assets/6_sustainability_reporting.webp') ) --}}

@section('content')
<main class="main">

    <!-- Section Artikel -->
    <section class="artikel-popular py-5">
        <div class="container">
            <!-- Judul Section -->
            <div class="row text-center flex flex-row justify-content-center mb-5">
                <div class="div">
                    <h2 class="fw-bold">Artikel </h2>
                    <p class="text-muted">Temukan Artikel yang sesuai dengan kebutuhanmu</p>
                </div>
            </div>
            <style>
                .sticky-top-filter {
                    position: sticky;
                    top: 5em; /* Jarak dari atas halaman */
                    z-index: 1020; /* Supaya tetap di atas elemen lain */
                }

            </style>
            <!-- Layout dengan Sidebar -->
            <div class="row g-4">
                <!-- Sidebar Kiri -->
                <div class="col-md-3">
                    <div class="sidebar sticky-top-filter">
                        <div class="mb-4">
                            <h5 class="fw-bold">Pencarian</h5>
                            <form action="{{ url('') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Cari artikel..." value="{{ request('q') }}">
                                    <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <div>
                            <h5 class="fw-bold">Kategori</h5>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="{{ url('articles') }}" class="text-decoration-none">Semua Kategori</a>
                                </li>
                                @foreach ($category as $item)
                                    <li class="list-group-item"
                                        style="background-color: {{ request('category') == $item->slug ? '#f0e6e6' : 'transparent' }};">
                                        <a href="{{ url('articles?category=' . $item->slug) }}"
                                        class="text-decoration-none"
                                        style="color: {{ request('category') == $item->slug ? '#d9534f' : 'black' }};">
                                        {{$item->name}}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>


                <!-- Grid Artikel -->
                <div class="col-md-9">
                    <div class="row g-4">
                        @foreach ($data as $item)
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{url($item->image)}}" class="card-img-top" alt="Artikel Image">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="{{url('assets/user.png')}}" class="rounded-circle me-2" style="width:2.5em;" alt="Profile">
                                        <div>
                                            <h6 class="mb-0">{{$item->author}}</h6>
                                            <small class="text-muted">Publisher</small>
                                        </div>
                                    </div>
                                    <span class="badge bg-warning text-dark mb-2">{{$item->category->name ?? ''}}</span>
                                    <h5 class="card-title" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-overflow: ellipsis; margin: 0;">
                                        <a href="{{ url('articles/'.$item->slug) }}" style="text-decoration: none; color: black;">{{$item->title}}</a>
                                    </h5>
                                    <a href="{{url('articles/'.$item->slug)}}" class="btn btn-outline-primary">Selengkapnya</a>
                                    <div class="text-muted mt-3 d-flex align-items-center">
                                        <i class="bi bi-clock me-1"></i>
                                        <small>{{$item->created_at->diffForHumans()}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Tombol Artikel Lainnya -->
                    <div class="row text-center flex justify-content-center mt-5">
                        <a href="" class="btn btn-outline-primary" style="width: 20%;">Lihat Artikel Lainnya</a>
                    </div>
                    <div style="height: 60em;"></div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
