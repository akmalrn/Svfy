@extends('servify.layouts')
@section('content')
    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $aboutus->nav }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="#">Beranda</a></li>
                    <li>{{ $aboutus->nav }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    About Area
    ==============================-->
    <div class="overflow-hidden space" data-bg-src="assets/img/bg/pattern_bg_5.png" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 text-center text-xl-start">
                    <div class="title-area mb-37">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon2.svg" alt="shape">{{ $aboutus->nav }}</span>
                        <h2 class="sec-title">{{ $aboutus->title }}</h2>
                        <p class="sec-text">{{ $aboutus->description }} </p>
                    </div>
                    <div class="checklist mb-45">
                        <ul>
                            @foreach ($keunggulanaboutus as $keunggulan)
                            <li>{{ $keunggulan->superiority }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="btn-group justify-content-center btn-mr">
                        <a href="https://wa.me/{{ $konfigurasi->telepon }}" target="blank" class="th-btn style4">Hubungi Kami<i class="far fa-arrow-right ms-2"></i></a>
                        <div class="call-btn">
                            <div class="play-btn">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <p class="box-label">Hubungi Kami 24/7</p>
                                <h6 class="box-link"><a href="https://wa.me/{{ $konfigurasi->telepon }}" target="blank"></a>{{ $konfigurasi->telepon }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 my-5 my-xl-0">
                    <div class="rounded-img1">
                        <img class="w-100" src="{{ asset($aboutus->path) }}" alt="About">
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="contact-process-wrap no-bg">
                        <div class="contact-process">
                            <div class="box-number">01</div>
                            <div class="media-body">
                                <h3 class="box-title text-title">{{ $aboutus->title_include }}</h3>
                                <p class="box-text text-body">{{ $aboutus->include }}</p>
                            </div>
                        </div>
                        <div class="contact-process">
                            <div class="box-number">02</div>
                            <div class="media-body">
                                <h3 class="box-title text-title">{{ $aboutus->title_include2 }}</h3>
                                <p class="box-text text-body">{{ $aboutus->include2 }}</p>
                            </div>
                        </div>
                        <div class="contact-process">
                            <div class="box-number">03</div>
                            <div class="media-body">
                                <h3 class="box-title text-title">{{ $aboutus->title_include3 }}</h3>
                                <p class="box-text text-body">{{ $aboutus->include3 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
    ==============================-->
    <section class="overflow-hidden bg-white space" id="service-sec">
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
    Team Area
    ==============================-->
    <section class="space">
        <div class="container z-index-common">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <div class="title-area text-center text-md-start">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">{{ $konfigurasiteam->nav }}</span>
                        <h2 class="sec-title">{{ $konfigurasiteam->overview }}</h2>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="sec-btn mt-n3 mt-md-0">
                        <a href="team.html" class="th-btn style4">{{ $konfigurasiteam->title }}<i class="far fa-arrow-right ms-2"></i></a>
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
    Brand Area
    ==============================-->
    <div class="bg-title space-extra" data-bg-src="assets/img/bg/brand_bg_1.png">
        <div class="container">
            <h2 class="sec-title text-white text-center mb-35">Klien</h2>
            <div class="swiper th-slider" id="brandSlider2"
                data-slider-options='{"spaceBetween":45,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"},"1300":{"slidesPerView":"5"},"1500":{"slidesPerView":"6"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($mitras as $mitra)
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="{{ asset($mitra->path) }}" alt="Brand Logo">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> 
@endsection
