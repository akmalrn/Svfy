@extends('servify.layouts')
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $konfigurasigallery->nav }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Beranda</a></li>
                    <li>{{ $konfigurasigallery->nav }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Gallery Area  
==============================-->
<div class="overflow-hidden space">
    <div class="container text-center">
        <div class="title-area text-center">
            <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">{{ $konfigurasigallery->nav }}</span>
            <h2 class="sec-title">{{ $konfigurasigallery->title }}</h2>
        </div>
        <div class="">
            <div class="container-gallery">
                @foreach ($gallery as $galeri)
                    <div class="filter-item">
                        <div class="gallery">
                            <a class="box-img popup-image" href="{{ asset($galeri->path) }}">
                                <img src="{{ asset($galeri->path) }}" alt="gallery image">
                                <div class="box-content">
                                    <span class="box-btn"><i class="fal fa-plus"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>                
        </div>
    </div>
</div>
 @endsection