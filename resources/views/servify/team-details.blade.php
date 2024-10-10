@extends('servify.layouts')
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $konfigurasiteam->nav }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">beranda</a></li>
                    <li>{{ $konfigurasiteam->nav }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Team Area  
==============================-->

<section class="space">
    <div class="container">
        <div class="row gy-40">
            <div class="col-xl-4 col-md-6 position-relative">
                <div class="th-team team-card active">
                    <div class="box-img">
                        <img src="{{ asset($team->path) }} " alt="Team">
                    </div>
                    <div class="box-content">
                        <div class="box-social">
                            <div class="box-btn"><i class="far fa-plus"></i></div>
                            <div class="th-social">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <h3 class="box-title"><a href="team-details.html">{{ $team->username }}</a></h3>
                        <p class="box-desig">{{ $team->position }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-6">
                <div class="about-card">
                    <p>{!! $team->description !!}</p>
                    {{-- <div class="team-counter-wrap">
                        <div class="team-counter">
                            <h5 class="box-title"><span class="counter-number">2000</span>+</h5>
                            <p class="box-text">Total Guide</p>
                        </div>
                        <div class="team-counter">
                            <h5 class="box-title"><span class="counter-number">65</span>+</h5>
                            <p class="box-text">Total Services</p>
                        </div>
                        <div class="team-counter">
                            <h5 class="box-title"><span class="counter-number">279</span>+</h5>
                            <p class="box-text">Award Won</p>
                        </div>
                        <div class="team-counter">
                            <h5 class="box-title"><span class="counter-number">1200</span>+</h5>
                            <p class="box-text">Total Event</p>
                        </div>
                    </div> --}}

                </div>

            </div>
        </div>
        <h4 class="mt-5 pt-xl-2 mb-30">Kontak Dengan Saya</h4>
        <div class="row gy-4">
            <div class="col-xl-4 col-md-6">
                <div class="team-contact">
                    <div class="icon-btn">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="media-body">
                        <h5 class="box-title">Alamat</h5>
                        <p class="box-text">{{ $team->address }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="team-contact">
                    <div class="icon-btn">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h5 class="box-title">Nomor Telepon</h5>
                        <p class="box-text">
                            <a href="https://wa.we/{{ $team->phone_number }}" target="blank">{{ $team->phone_number }}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="team-contact">
                    <div class="icon-btn">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="media-body">
                        <h5 class="box-title">Alamat Email</h5>
                        <p class="box-text">
                            <a href="mailto:{{ $team->email_address }}" target="blank">{{ $team->email_address }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

    <!--==============================
Team Area  
==============================-->
    <section class="bg-top-center space" data-bg-src="{{ asset('assets/img/bg/team_bg_5.jpg') }}">
        <div class="container z-index-common">
            <div class="title-area text-center">
                <span class="sub-title shape-white"><img src="{{ asset('assets/img/theme-img/title_icon_white.svg') }}" alt="shape">{{ $konfigurasiteam->title }}</span>
                <h2 class="sec-title text-white">{{ $konfigurasiteam->overview }}</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="teamSlider1" data-slider-options='{"loop":false,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        @foreach ($allteam as $tim)     
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
    
    @endsection