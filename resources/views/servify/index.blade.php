@extends('servify.layouts')
@section('content')
    <div class="th-hero-wrapper hero-1 slider-area" id="hero" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="shape-mockup spin" data-top="35%" data-right="8%"><img src="assets/img/shape/dots_1.svg" alt="shape">
        </div>
        <div class="shape-mockup spin" data-bottom="28%" data-right="48%"><img src="assets/img/shape/dots_1.svg"
                alt="shape"></div>
        <div class="swiper th-slider" id="heroSlide1" data-slider-options='{"effect":"fade","autoHeight":true}'>
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="container">
                            <div class="hero-style1">
                                <div class="hero-arrow" data-ani="slideinright" data-ani-delay="0.4s">
                                    <img src="assets/img/hero/hero_arrow.svg" alt="Arrow">
                                </div>
                                <h1 class="hero-title">
                                    <span class="title1" data-ani="slideinup" data-ani-delay="0.2s">{{ $slider->title }}</span>
                                    <span class="title2" data-ani="slideinup" data-ani-delay="0.4s">{{ $slider->title2 }}</span>
                                    <span class="title3" data-ani="slideinup" data-ani-delay="0.6s"><span class="text-theme">{{ $slider->title3 }}</span></span>
                                </h1>
                                <p class="hero-text" data-ani="slideinup" data-ani-delay="0.8s">{{ $slider->description }}</p>
                                <a href="{{ route('services') }}" class="th-btn style3" data-ani="slideinup" data-ani-delay="1s">Semua Layanan Kami<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                        <div class="hero-img" data-ani="slideinright" data-ani-delay="0.2s">
                            <div class="shape1">
                                <img src="assets/img/hero/hero_shape_1_1.svg" alt="shape">
                            </div>
                            <img src="{{ $slider->path }}" alt="Image">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><i
                class="far fa-arrow-left"></i></button>
        <button data-slider-next="#heroSlide1" class="slider-arrow slider-next"><i
                class="far fa-arrow-right"></i></button>
    </div>
    <!--======== / Hero Section ========-->
    <!--==============================
    Brand Area
    ==============================-->
    <div class="brand-sec1">
        <div class="top-shape"><img src="assets/img/shape/triangle_shape_1.svg" alt="shape"></div>
        <div class="brand-list-area">
            <div class="brand-list-wrap">
                @foreach($mitras->take(3) as $index => $mitra) <!-- Batasi hanya 3 item -->
                @if($mitra->path) <!-- Periksa apakah 'path' ada -->
                    <div id="brand-list-{{ $index + 1 }}" class="brand-list">
                        <img src="{{ asset($mitra->path) }}" alt="Brand Logo {{ $mitra->title }}">
                    </div>
                @endif
                @endforeach
            </div>
            <div class="arrow-down">
                <div class="shape">
                    <img src="assets/img/shape/scroll_text2.svg" alt="shape">
                </div>
                <a class="link" href="#service-sec">
                    <span class="icon">
                        <svg width="9" height="29" viewBox="0 0 9 29" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.20423 28.3571C4.11543 28.3571 4.02654 28.3232 3.95875 28.2554L0.486523 24.7832C0.350846 24.6475 0.350846 24.4278 0.486523 24.2922C0.622201 24.1566 0.841905 24.1565 0.977496 24.2922L4.20423 27.5189L7.43097 24.2922C7.56665 24.1565 7.78635 24.1565 7.92194 24.2922C8.05753 24.4279 8.05762 24.6476 7.92194 24.7832L4.44972 28.2554C4.38192 28.3232 4.29303 28.3571 4.20423 28.3571Z"
                                fill="var(--theme-color)" />
                            <path d="M4.2041 0.995117V22.384" stroke="var(--theme-color)" stroke-width="1.53"
                                stroke-linecap="round" stroke-dasharray="2 2" />
                        </svg>
                    </span>
                </a>
            </div>
            <div class="brand-list-wrap">
                @foreach($mitras->slice(3, 3) as $index => $mitra)
                    @if($mitra->path)
                        <div id="mitra-{{ $index + 4 }}" class="brand-list">
                            <img src="{{ asset($mitra->path) }}" alt="Brand Logo {{ $index + 4 }}">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
    ==============================-->
    <section class="overflow-hidden space" id="service-sec">
        <div class="shape-mockup spin" data-bottom="0%" data-left="0%"><img src="assets/img/shape/lines_1.png"
                alt="shape"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10">
                    <div class="title-area text-center">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">{{ $konfigurasiservice->nav }}</span>
                        <h2 class="sec-title">{{ $konfigurasiservice->title }}</h2>
                        <p class="sec-text">{{ $konfigurasiservice->description }}</p>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="serviceSlider1"
                    data-slider-options='{"loop":false,"slidesPerGroup":"2","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        @foreach ($services as $service)
                            @if ($service->category->id === 1)
                                <div class="swiper-slide">
                                    <div class="service-card">
                                        <div class="box-number">01</div>
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_card_1.svg" alt="Icon">
                                        </div>
                                        <p class="box-subtitle">{{ $service->category->category }}</p>
                                        <h3 class="box-title"><a href="#">{{ $service->title }}</a></h3>
                                        <p class="box-text">{{ $service->overview }}</p>
                                        <form action="{{ route('service.show', ['service' => $service->id]) }}" method="GET" style="display: inline;">
                                            <button type="submit" class="th-btn btn-sm">
                                                Baca selengkapnya <i class="far fa-arrow-right ms-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @elseif ($service->category->id === 2)
                                <div class="swiper-slide">
                                    <div class="service-card">
                                        <div class="box-number">02</div>
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_card_2.svg" alt="Icon">
                                        </div>
                                        <p class="box-subtitle">{{ $service->category->category }}</p>
                                        <h3 class="box-title"><a href="service-details.html">{{ $service->title }}</a></h3>
                                        <p class="box-text">{{ $service->overview }}</p>
                                       <form action="{{ route('service.show', ['service' => $service->id]) }}" method="GET" style="display: inline;">
                                            <button type="submit" class="th-btn btn-sm">
                                                Baca selengkapnya <i class="far fa-arrow-right ms-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @elseif ($service->category->id === 3)
                                <div class="swiper-slide">
                                    <div class="service-card">
                                        <div class="box-number">03</div>
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_card_3.svg" alt="Icon">
                                        </div>
                                        <p class="box-subtitle">{{ $service->category->category }}</p>
                                        <h3 class="box-title"><a href="service-details.html">{{ $service->title }}</a></h3>
                                        <p class="box-text">{{ $service->overview }}</p>
                                       <form action="{{ route('service.show', ['service' => $service->id]) }}" method="GET" style="display: inline;">
                                            <button type="submit" class="th-btn btn-sm">
                                                Baca selengkapnya <i class="far fa-arrow-right ms-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @elseif ($service->category->id === 4)
                                <div class="swiper-slide">
                                    <div class="service-card">
                                        <div class="box-number">04</div>
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_card_4.svg" alt="Icon">
                                        </div>
                                        <p class="box-subtitle">{{ $service->category->category }}</p>
                                        <h3 class="box-title"><a href="service-details.html">{{ $service->title }}</a></h3>
                                        <p class="box-text">{{ $service->overview }}</p>
                                       <form action="{{ route('service.show', ['service' => $service->id]) }}" method="GET" style="display: inline;">
                                            <button type="submit" class="th-btn btn-sm">
                                                Baca selengkapnya <i class="far fa-arrow-right ms-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @elseif ($service->category->id === 5)
                                <div class="swiper-slide">
                                    <div class="service-card">
                                        <div class="box-number">05</div>
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_card_5.svg" alt="Icon">
                                        </div>
                                        <p class="box-subtitle">{{ $service->category->category }}</p>
                                        <h3 class="box-title"><a href="service-details.html">{{ $service->title }}</a></h3>
                                        <p class="box-text">{{ $service->overview }}</p>
                                       <form action="{{ route('service.show', ['service' => $service->id]) }}" method="GET" style="display: inline;">
                                            <button type="submit" class="th-btn btn-sm">
                                                Baca selengkapnya <i class="far fa-arrow-right ms-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @elseif ($service->category->id === 6)
                                <div class="swiper-slide">
                                    <div class="service-card">
                                        <div class="box-number">06</div>
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_card_6.svg" alt="Icon">
                                        </div>
                                        <p class="box-subtitle">{{ $service->category->category }}</p>
                                        <h3 class="box-title"><a href="service-details.html">{{ $service->title }}</a></h3>
                                        <p class="box-text">{{ $service->overview }}</p>
                                       <form action="{{ route('service.show', ['service' => $service->id]) }}" method="GET" style="display: inline;">
                                            <button type="submit" class="th-btn btn-sm">
                                                Baca selengkapnya <i class="far fa-arrow-right ms-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @elseif ($service->category->id === 7)
                                <div class="swiper-slide">
                                    <div class="service-card">
                                        <div class="box-number">07</div>
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_card_7.svg" alt="Icon">
                                        </div>
                                        <p class="box-subtitle">{{ $service->category->category }}</p>
                                        <h3 class="box-title"><a href="service-details.html">{{ $service->title }}</a></h3>
                                        <p class="box-text">{{ $service->overview }}</p>
                                       <form action="{{ route('service.show', ['service' => $service->id]) }}" method="GET" style="display: inline;">
                                            <button type="submit" class="th-btn btn-sm">
                                                Baca selengkapnya <i class="far fa-arrow-right ms-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @elseif ($service->category->id === 8)
                                <div class="swiper-slide">
                                    <div class="service-card">
                                        <div class="box-number">08</div>
                                        <div class="box-icon">
                                            <img src="assets/img/icon/service_card_8.svg" alt="Icon">
                                        </div>
                                        <p class="box-subtitle">{{ $service->category->category }}</p>
                                        <h3 class="box-title"><a href="service-details.html">{{ $service->title }}</a></h3>
                                        <p class="box-text">{{ $service->overview }}</p>
                                       <form action="{{ route('service.show', ['service' => $service->id]) }}" method="GET" style="display: inline;">
                                            <button type="submit" class="th-btn btn-sm">
                                                Baca selengkapnya <i class="far fa-arrow-right ms-2"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>


    <!--==============================
    About Area
    ==============================-->
    <div class="overflow-hidden space" data-bg-color="#101840" id="about-sec">
        <div class="shape-mockup spin" data-top="6%" data-left="3%"><img src="assets/img/shape/dots_1.svg"
                alt="shape"></div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="3%" data-right="0%"><img
                src="assets/img/shape/lines_2.png" alt="shape"></div>

        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-xl-6 mb-35 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="{{ $aboutus->path }}" alt="About">
                        </div>
                        <div class="box-badge">
                            <div class="spin-text">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px"
                                    height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                                    xml:space="preserve">
                                    <defs>
                                        <path id="circlePath"
                                            d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                    </defs>
                                    <circle cx="150" cy="100" r="75" fill="none" />
                                    <g>
                                        <use xlink:href="#circlePath" fill="none" />
                                        <text fill="#fff">
                                            <textPath xlink:href="#circlePath">Servify Penyedia Layanan Terbaik
                                            </textPath>
                                        </text>
                                    </g>
                                </svg>
                            </div>
                            <div class="box-icon">
                                <img src="assets/img/icon/about_badge.svg" alt="icon">
                            </div>
                        </div>
                        <img src="assets/img/shape/dots_1.svg" alt="icon" class="dot-shape">
                    </div>
                </div>
                <div class="col-xl-6 text-center text-xl-start">
                    <div class="title-area mb-30 pe-xxl-5">
                        <span class="sub-title shape-white"><img src="assets/img/theme-img/title_icon_white.svg" alt="shape">{{ $aboutus->nav }}</span>
                        <h2 class="sec-title text-white">{{ $aboutus->title }}</h2>

                    </div>
                    <p class="ff-title fs-18 fw-medium text-white">{{ $aboutus->overview }}</p>
                    <p class="mb-42 text-light">{{ $aboutus->description }}</p>
                    <div class="about-feature-wrap">
                        @foreach ($keunggulanaboutus as $keunggulan)
                        <div class="about-feature">
                            <div class="box-icon">
                                <img src="assets/img/icon/about_feature_1.svg" alt="Icon">
                            </div>
                            <h3 class="box-title">{{ $keunggulan->superiority }}</h3>
                        </div>
                        @endforeach
                    </div>
                    <div class="btn-group justify-content-center">
                        <a href="{{ route('about') }}" class="th-btn style3">Temukan Lebih Banyak
                            <i
                                class="far fa-arrow-right ms-2"></i></a>
                        <div class="call-btn">
                            <div class="play-btn">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <p class="box-label">Hubungi Kami 24/7</p>
                                <h6 class="box-link text-white"><a href="https://wa.me/{{ $konfigurasi->telepon }}" target="blank">{{ $konfigurasi->telepon }}</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
    Project Area
    ==============================-->
    {{-- <section class="overflow-hidden space">
        <div class="shape-mockup spin" data-top="5%" data-left="0%"><img src="assets/img/shape/lines_1.png"
                alt="shape"></div>
        <div class="shape-mockup spin" data-bottom="5%" data-right="4%"><img src="assets/img/shape/dots_2.svg"
                alt="shape"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <div class="title-area text-center text-md-start">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">Our
                            Projects</span>
                        <h2 class="sec-title">Our Recent Projects</h2>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="sec-btn mt-n3 mt-md-0">
                        <a href="project.html" class="th-btn style4">View All Projects<i
                                class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="project-card">
                        <div class="box-img">
                            <img src="assets/img/gallery/project_1_1.jpg" alt="project image">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="project-details.html">Furniture Assembly</a></h3>
                            <a href="project-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="project-card">
                        <div class="box-img">
                            <img src="assets/img/gallery/project_1_2.jpg" alt="project image">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="project-details.html">Renovation of Roof</a></h3>
                            <a href="project-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="project-card">
                        <div class="box-img">
                            <img src="assets/img/gallery/project_1_3.jpg" alt="project image">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="project-details.html">AC Repairing</a></h3>
                            <a href="project-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="project-card">
                        <div class="box-img">
                            <img src="assets/img/gallery/project_1_4.jpg" alt="project image">
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="project-details.html">Bathroom Plumbing</a></h3>
                            <a href="project-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
    <!--==============================
    Feature Area
    ==============================-->
    <div class="overflow-hidden bg-white">
        <div class="shape-mockup spin" data-top="5%" data-right="0%"><img src="assets/img/shape/lines_1.png"
                alt="shape"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="img-box2">
                        <div class="img1">
                            <img src="{{ $whyus->path }}" alt="Why">
                        </div>
                        <a href="https://www.youtube.com/watch?v={{ $whyus->link_youtube }}" class="play-btn popup-video"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-xl-7 text-center text-xl-start align-self-center space-extra">
                    <div class="ps-xl-5 pb-30 pb-lg-0">
                        <div class="title-area">
                            <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">
                                {{ $whyus->nav }}</span>
                            <h2 class="sec-title"> {{ $whyus->title }}</h2>
                            <p class="sec-text pe-xl-5 me-xxl-5"> {{ $whyus->overview }}</p>
                        </div>
                        <div class="choose-feature-wrap">
                            @foreach ($superioritywhyus as $keunggulan)
                            <div class="choose-feature">
                                <div class="box-icon">
                                    <img src="{{ asset($keunggulan->path) }}" alt="Icon">
                                </div>
                                <h3 class="box-title">{{ $keunggulan->superiority }}</h3>
                            </div>
                            @endforeach
                        </div>
                        <a href="{{ route('contact') }}" class="th-btn style4">Janji Temu Sekarang<i
                                class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Team Area
    ==============================-->
    <section class="space">
        <div class="container z-index-common">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <div class="title-area text-center text-md-start">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">{{ $konfigurasiteam->title }}</span>
                        <h2 class="sec-title">{{ $konfigurasiteam->overview }}</h2>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="sec-btn mt-n3 mt-md-0">
                        <a href="team.html" class="th-btn style4">Semua Anggota<i class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="teamSlider1"
                    data-slider-options='{"paginationType":"progressbar","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        @foreach ($team as $tim)
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="box-img">
                                    <img src="{{ asset($tim->path) }}" alt="Team">
                                </div>
                                <div class="box-content">
                                    <div class="box-social">
                                        <div class="box-btn"><i class="far fa-plus"></i></div>
                                        <div class="th-social">
                                            <a target="_blank" href="{{ ($tim->link_facebook) }}"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="{{ ($tim->link_twitter) }}"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="{{ ($tim->link_instagram) }}"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a target="_blank" href="{{ ($tim->link_linkedin) }}"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <h3 class="box-title"><a href="{{ route('team.show', $tim->id) }}">{{ $tim->username }}</a>
                                    </h3>
                                    <p class="box-desig">{{ ($tim->position) }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Counter Area
    ==============================-->
    <div class="space-bottom">
        <div class="container">
            <div class="counter-card-wrap">
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="assets/img/icon/counter_card_1.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">1250</span>+</h2>
                        <p class="box-text">Completed Projects</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="assets/img/icon/counter_card_2.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">180</span>+</h2>
                        <p class="box-text">Happy Clients</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="assets/img/icon/counter_card_3.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">85</span>+</h2>
                        <p class="box-text">Expert Team</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="assets/img/icon/counter_card_4.svg" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number">158</span>+</h2>
                        <p class="box-text">Awards Won</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div><!--==============================
    Contact Area
    ==============================-->
    <div class="overflow-hidden bg-white">
        <div class="shape-mockup moving d-none d-xxl-block" data-bottom="0%" data-right="0%"><img
                src="assets/img/shape/man_shape_1.png" alt="shape"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box3">
                        <div class="img1">
                            <img src="{{ asset($konfigurasioffer->path) }}" alt="Image">
                        </div>
                        <div class="contact-process-wrap">
                            <div class="contact-process">
                                <div class="box-number">01</div>
                                <div class="media-body">
                                    <h3 class="box-title">{{ ($konfigurasioffer->title_include) }}</h3>
                                    <p class="box-text">{{ ($konfigurasioffer->include) }}</p>
                                </div>
                            </div>
                            <div class="contact-process">
                                <div class="box-number">02</div>
                                <div class="media-body">
                                    <h3 class="box-title">{{ ($konfigurasioffer->title_include2) }}</h3>
                                    <p class="box-text">{{ ($konfigurasioffer->include2) }}</p>
                                </div>
                            </div>
                            <div class="contact-process">
                                <div class="box-number">03</div>
                                <div class="media-body">
                                    <h3 class="box-title">{{ ($konfigurasioffer->title_include3) }}</h3>
                                    <p class="box-text">{{ ($konfigurasioffer->include3) }}</p>
                                </div>
                            </div>
                            <div class="contact-process">
                                <div class="box-number">04</div>
                                <div class="media-body">
                                    <h3 class="box-title">{{ ($konfigurasioffer->title_include4) }}</h3>
                                    <p class="box-text">{{ ($konfigurasioffer->include4) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center text-xl-start align-self-center space-extra">
                    <div class="title-area">
                        <span class="sub-title"><img src="{{ asset('assets/img/theme-img/title_icon.svg') }}" alt="shape">{{ $konfigurasioffer->nav }}</span>
                        <h2 class="sec-title">{{ $konfigurasioffer->title }}</h2>
                    </div>
                    <form action="{{ route('submit.form') }}" method="POST" id="myForm">
                        @csrf
                        <div class="row">
                            <!-- Input fields sama seperti sebelumnya -->
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Nama Kamu" required>
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email_address" id="email_address" placeholder="Alamat Email" required>
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="phone_number" id="phone_number" placeholder="Nomor Telepon" required>
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="subject" id="subject" class="form-select" required>
                                    <option value="" disabled selected hidden>Pilih Subjek</option>
                                    <option value="Pertanyaan Umum">Pertanyaan Umum</option>
                                    <option value="Bantuan Dukungan">Bantuan Dukungan</option>
                                    <option value="Dukungan Penjualan">Dukungan Penjualan</option>
                                </select>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="description" id="description" cols="30" rows="3" class="form-control" placeholder="Pesan Kamu" required></textarea>
                                <i class="fal fa-pencil"></i>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LcgYFMqAAAAAKEdfhBqFFdRxLk9_07L-Vea_hMd"></div>
                            <br>
                            <div class="form-btn col-12">
                                <button class="th-btn" type="submit">Kirim<i class="far fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>

                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                    <script>
                        document.getElementById('myForm').addEventListener('submit', function (event) {
                            var recaptchaResponse = grecaptcha.getResponse();
                            if (recaptchaResponse.length === 0) {
                                event.preventDefault(); // Mencegah pengiriman form
                                alert('Silakan verifikasi bahwa Anda bukan robot.'); // Notifikasi untuk pengguna
                            }
                        });
                    </script>
                </div>
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
            <a href="{{ route('gallery') }}">
            <button class="th-btn load-more-btn">Load More</button>
        </a>
        </div>
    </div>
    <!--==============================
    Testimonial Area
    ==============================-->
    {{-- <section class="space" id="testi-sec" data-bg-src="assets/img/bg/pattern_bg_1.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <div class="title-area text-center text-md-start">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg"
                                alt="shape">Testimonial</span>
                        <h2 class="sec-title">What our client say</h2>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="sec-btn mt-n3 mt-md-0">
                        <a href="testimonial.html" class="th-btn style4">View All Reviews<i
                                class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="testiSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-img">
                                    <img src="assets/img/testimonial/testi_b_1.jpg" alt="Image">
                                </div>
                                <div class="box-content">
                                    <div class="box-review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">Rakar has most quality services by subtle craftmens, Diam id semper
                                        tellus. Est aliquam sit est ac. Felis diam nunc nibh blandit risus ndrerit sed
                                        consectetur quis leo on the  praesent scelerisque.</p>
                                    <div class="box-profile">
                                        <div class="box-avater">
                                            <img src="assets/img/testimonial/testi_1_1.jpg" alt="Avater">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="box-title">Sumaiya Zara</h3>
                                            <p class="box-desig">CEO Of Company</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-img">
                                    <img src="assets/img/testimonial/testi_b_2.jpg" alt="Image">
                                </div>
                                <div class="box-content">
                                    <div class="box-review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">The most quality services by subtle craftmens, Diam id semper
                                        tellus. Est aliquam sit est ac. Felis diam nunc nibh blandit risus ndrerit sed
                                        consectetur quis leo on the  praesent in Rakar.</p>
                                    <div class="box-profile">
                                        <div class="box-avater">
                                            <img src="assets/img/testimonial/testi_1_2.jpg" alt="Avater">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="box-title">Alex Simon</h3>
                                            <p class="box-desig">Managing Director</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-img">
                                    <img src="assets/img/testimonial/testi_b_1.jpg" alt="Image">
                                </div>
                                <div class="box-content">
                                    <div class="box-review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">Rakar has most quality services by subtle craftmens, Diam id
                                        semper tellus. Est aliquam sit est ac. Felis diam nunc nibh blandit risus ndrerit
                                        sed consectetur quis leo on the  praesent scelerisque.</p>
                                    <div class="box-profile">
                                        <div class="box-avater">
                                            <img src="assets/img/testimonial/testi_1_1.jpg" alt="Avater">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="box-title">Agelina Margret</h3>
                                            <p class="box-desig">CEO Of Company</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-img">
                                    <img src="assets/img/testimonial/testi_b_2.jpg" alt="Image">
                                </div>
                                <div class="box-content">
                                    <div class="box-review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i><i
                                            class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">The most quality services by subtle craftmens, Diam id semper
                                        tellus. Est aliquam sit est ac. Felis diam nunc nibh blandit risus ndrerit sed
                                        consectetur quis leo on the  praesent in Rakar.</p>
                                    <div class="box-profile">
                                        <div class="box-avater">
                                            <img src="assets/img/testimonial/testi_1_2.jpg" alt="Avater">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="box-title">Robert Danials</h3>
                                            <p class="box-desig">Managing Director</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--==============================
    Price Area
    ==============================-->
    <section class="space" data-bg-src="assets/img/bg/pattern_bg_2.jpg" id="pricing">
        <div class="shape-mockup spin" data-top="15%" data-right="6%"><img src="assets/img/shape/dots_1.svg"
                alt="shape"></div>
        <div class="shape-mockup spin" data-bottom="6%" data-left="4%"><img src="assets/img/shape/dots_1.svg"
                alt="shape"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <span class="sub-title shape-white"><img src="assets/img/theme-img/title_icon_white.svg"
                                alt="Icon">{{ $konfigurasipricing->nav }}</span>
                        <h2 class="sec-title text-white">{{ $konfigurasipricing->title }}</h2>
                        <p class="sec-text text-light">{{ $konfigurasipricing->overview }}</p>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                @foreach($pricingplan as $harga)
                <div class="hover-item  col-xl-3 col-md-6">
                    <div class="price-card">
                        <div class="box-shape">
                            <img src="{{ asset('assets/img/shape/lines_3.png') }}" alt="shape">
                        </div>
                        <h3 class="box-title">{{ $harga->title }}</h3>
                        <p class="box-price">Rp {{ number_format($harga->price, 0, ',', '.') }}<span class="duration">/Bulan</span></p>
                        <div class="box-list">
                            <ul>
                                {!! $harga->superiority !!}
                            </ul>
                        </div>
                        <div class="box-footer">
                            <a href="https://wa.me/{{ $contact->telephone }}" target="blank" class="th-btn">Memulai<i
                                    class="far fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--==============================
    Blog Area
    ==============================-->
    <section class="space" id="blog-sec">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-4 col-lg-5 col-md-7">
                    <div class="title-area text-center text-md-start">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">{{$konfigurasiblog->nav}}</span>
                        <h2 class="sec-title">{{ $konfigurasiblog->title }}</h2>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="sec-btn mt-n3 mt-md-0">
                        <a href="blog.html" class="th-btn style4">{{ route('blog') }}<i
                                class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                @foreach($blog as $item)
                <div class="col-xl-4 col-md-6">
                    <div class="blog-card">
                        <a href="{{ route('blogs.show', $item->id) }}" class="blog-img">
                            <img src="{{ asset($item->path) }}" alt="blog image" style="width: 500px">
                        </a>
                        <span class="box-date">{{ $item->created_at }}</span>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>{{ $konfigurasi->nama_website }}</a>
                                <a href="blog.html"><i class="fas fa-tags"></i>{{ $item->category->category }}</a>
                            </div>
                            <h3 class="box-title"><a href="{{ route('blogs.show', $item->id) }}">{{ $item->title }}</a></h3>
                            <p class="box-text">{{ $item->overview }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
