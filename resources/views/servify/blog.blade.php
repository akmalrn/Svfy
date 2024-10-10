@extends('servify.layouts')
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $konfigurasiblog->nav }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Beranda</a></li>
                    <li>{{ $konfigurasiblog->nav }}</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Blog Area
==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    @foreach($blog as $item)
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="{{ route('blogs.show', $item->id) }}"><img src="{{ asset($item->path) }}" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fal fa-user"></i>{{ $konfigurasi->nama_website }}</a>
                                <a href="blog.html"><i class="fal fa-clock"></i>{{ $item->created_at }}</a>
                                <a href="blog.html"><img src="assets/img/icon/cat_1.svg" alt="icon"> {{ $item->category_id }}</a>
                            </div>
                            <h2 class="blog-title"><a href="{{ route('blogs.show', $item->id) }}">{{ $item->title }}</a>
                            </h2>
                            <p class="blog-text">{{ $item->overview }}</p>
                            <a href="{{ route('blogs.show', $item->id) }}" class="th-btn">Baca Selengkapnya<i class="far fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    @endforeach

                    <div class="th-pagination">
                        <ul>
                            <!-- Sebelumnya menampilkan tombol pagination menggunakan Laravel -->
                            @if($blog->onFirstPage())
                                <li class="disabled"><a href="#">1</a></li>
                            @else
                                <li><a href="{{ $blog->previousPageUrl() }}"> <i class="far fa-arrow-left"></i></a></li>
                            @endif

                            <!-- Menampilkan nomor halaman -->
                            @foreach ($blog->getUrlRange(1, $blog->lastPage()) as $page => $url)
                                <li @if($blog->currentPage() == $page) class="active" @endif>
                                    <a href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            <!-- Jika halaman selanjutnya ada, tampilkan tombol -->
                            @if($blog->hasMorePages())
                                <li><a href="{{ $blog->nextPageUrl() }}"><i class="far fa-arrow-right"></i></a></li>
                            @else
                                <li class="disabled"><a href="#"> <i class="far fa-arrow-right"></i></a></li>
                            @endif
                        </ul>
                    </div>

                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search  ">
                            {{-- <form class="search-form">
                                <input type="text" placeholder="Enter Keyword">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form> --}}
                        </div>
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Kategori</h3>
                            <ul>
                                @foreach($kategoriservice as $kategori)
                                <li>
                                    <a><img src="assets/img/icon/cat_1.svg" alt="icon">{{ $kategori->category }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_banner  " data-bg-src="{{ asset($konfigurasi->path_aside) }}">
                            <div class="widget-banner">
                                <h3 class="box-title">{{ $konfigurasi->aside }}</h3>
                                <div class="logo"><img src="{{ asset($konfigurasi->logo) }}" alt="Logo"></div>
                                <p class="box-text">{{ $konfigurasi->aside2 }}</p>
                                <h3 class="box-link"><a href="https://wa.me/{{ $contact->telephone }}">{{ $contact->telephone }}</a></h3>
                                <a href="{{ route('contact') }}" class="th-btn style2">Dapatkan Penawaran<i class="far fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
   @endsection
