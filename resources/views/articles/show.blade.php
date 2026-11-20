@extends('layouts.website')
@section('title',$data->title)
@section('meta_description',$data->title)
@section('meta_logo',url($data->image) )

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">

      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{url('')}}">ARTIKEL</a></li>
            <li class="current text-uppercase">{{$data->category->name ?? ''}}</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
    <div class="container" data-aos="fade-up">
        <!-- Judul -->
        <h2 style="font-size: 2rem; font-weight: bold; margin-bottom: 10px;">{{$data->title}}</h2>

        <!-- Kategori -->
        <div style="display: flex; align-items: center; font-size: 1rem; color: #6c757d;">
            <i class="bi bi-tags" style="margin-right: 5px;"></i>
            <span>Categori:</span>
            <a href="{{url('articles?category='.$data->category->slug ?? '')}}" style="text-decoration: none; color: #007bff; margin-left: 5px;">{{$data->category->name ?? ''}}</a>
        </div>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-9">
                @if ($data->image != '')
                <img src="{{url($data->image)}}" alt="" class="mt-3" style="width:50%; border-radius:10px;">
                @endif

                    <div class="mt-5">
                        <?= $data->content ?>
                    </div>
                    <div class="mt-5">
                        <div style="display: flex; align-items: center; font-size: 1rem; color: #6c757d;">
                            <i class="bi bi-tags" style="margin-right: 5px;"></i>
                            <span>Dibuat pada : </span>
                            <a href="#" style="text-decoration: none; color: #007bff; margin-left: 5px;">{{$data->created_at ?? ''}}</a>
                        </div>
                    </div>

            </div>
            <style>
                .sticky-top-filter {
                    position: sticky;
                    top: 5em; /* Jarak dari atas halaman */
                    z-index: 1020; /* Supaya tetap di atas elemen lain */
                }

            </style>
            <div class="col-md-3">
                <div class="sidebar sticky-top-filter">
                    <div class="mb-4">
                        <h5 class="fw-bold">Pencarian Lainnya</h5>
                        <form action="{{ url('') }}" method="GET">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Cari artikel..." value="{{ request('q') }}">
                                <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>

                    <div>
                        <h5 class="fw-bold">Artikel Lainnya</h5>
                        <ul class="list-group">
                            @foreach ($dataAll as $item)
                                <!-- Item 1 -->
                                <li class="list-group-item d-flex align-items-center">
                                    <img src="{{ url($item->image) }}" alt="Kategori Environmental"
                                        style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px; margin-right: 10px;">
                                        <h5 class="card-title" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-overflow: ellipsis; margin: 0;">
                                            <a href="{{ url('articles/'.$item->slug) }}" style="text-decoration: none; color: black;"><font size="2">{{$item->title}}</font></a>
                                        </h5>
                                </li>

                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </div>

    </section><!-- /Starter Section Section -->
    @include('components.share')
  </main>
@endsection
