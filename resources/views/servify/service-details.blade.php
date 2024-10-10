@extends('servify.layouts')
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $konfigurasilayanandetail->nav }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-handyman.html">Beranda</a></li>
                    <li>{{ $konfigurasilayanandetail->nav }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="page-single mb-30">
                        <div class="page-img">
                            <img src="{{ asset($service->path) }}" alt="Service Image">
                        </div>
                        <div class="page-content">
                            <div class="service-meta">
                                <a href="service.html">{{ $service->category->category }}</a>
                                <span><i class="fa-sharp fas fa-star"></i>4.8</span>
                            </div>
                            <h2 class="h3 sec-title page-title">{{ $service->title }}</h2>
                            <p class="">{!! $service->description !!}</p>

                            <h4 class="mt-40 mb-4">{{ $konfigurasigallery->nav }}</h4>
                            <div class="mb-30">
                                <div class="service-gallery-wrapper">
                                    @foreach ($gallery as $galeri)
                                        <div class="service-gallery_1">
                                            <a href="{{ asset($galeri->path) }}" class="popup-image box-btn">
                                                <i class="fa-light fa-magnifying-glass-plus"></i>
                                            </a>
                                            <img class="rounded-10 w-100" src="{{ asset($galeri->path) }}" alt="service">
                                        </div>
                                    @endforeach
                                </div>                                
                            </div>

                            <h4 class="mt-40 mb-4">{{ $konfigurasilayanandetail->title_feature }}
                            </h4>
                            <div class="checklist">
                                <ul>
                                    @foreach ($keunggulanlayanandetail as $keunggulan)
                                    <li class="fw-normal">{{ $keunggulan->superiority }}</li>
                                    @endforeach
                                </ul>
                            </div>

                            <h4 class="mt-40 mb-4">{{ $konfigurasifaq->title }}</h4>
                            <div class="accordion mt-40" id="faqAccordion">
                                @foreach($faq as $item)
                                <div class="accordion-card">
                                    <div class="accordion-header" id="collapse-item-{{ $item->number }}">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $item->number }}" aria-expanded="true" aria-controls="collapse-{{ $item->number }}">{{ $item->title }}</button>
                                    </div>
                                    <div id="collapse-{{ $item->number }}" class="accordion-collapse collapse show" aria-labelledby="collapse-item-{{ $item->number }}" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">{{ $item->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Kategori</h3>
                            <ul>
                                @foreach ($kategoriservice as $kategori)     
                                <li>{{ $kategori->category }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">
                                Postingan Terbaru</h3>
                            <div class="recent-post-wrap">
                                @foreach ($allservice as $service)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('service.show', $service->id) }}">
                                            <img src="{{ asset($service->path) }}" alt="Blog Image">
                                        </a>                                        
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="{{ route('service.show', $service->id) }}">{{ $service->title }}</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="{{ route('service.show', $service->id) }}"><i class="far fa-calendar"></i>{{ $service->created_at }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget widget_banner  " data-bg-src="{{ asset($konfigurasi->path_aside) }}">
                            <div class="widget-banner">
                                <h3 class="box-title">{{ $konfigurasi->aside }}</h3>
                                <div class="logo"><img src="{{ asset($konfigurasi->logo) }}" alt="Logo"></div>
                                <p class="box-text">{{ $konfigurasi->aside2 }}</p>
                                <h3 class="box-link"><a href="https://wa.me/{{ $contact->telephone }}" target="blank">{{ $contact->telephone }}</a></h3>
                                <a href="{{ route('contact') }}" class="th-btn style2">Dapatkan Penawaran<i class="far fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    @endsection