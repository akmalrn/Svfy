@extends('servify.layouts')
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $konfigurasiservice->nav }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Beranda</a></li>
                    <li>{{ $konfigurasiservice->nav }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Service Area
    ==============================-->
    <section class="overflow-hidden space" id="service-sec">
        <div class="shape-mockup spin" data-top="0%" data-right="0%"><img src="assets/img/shape/lines_1.png" alt="shape">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10">
                    <div class="title-area text-center">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg"
                                alt="Icon">{{ $konfigurasiservice->nav }}</span>
                        <h2 class="sec-title">{{ $konfigurasiservice->title }}</h2>
                        <p class="sec-text">{{ $konfigurasiservice->description }}.</p>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                @foreach ($services as $service)
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="box-number">{{ $service->id }}</div>
                            <div class="box-icon">
                                <img src="{{ asset($service->path) }}" alt="Icon">
                            </div>
                            <p class="box-subtitle">{{ $service->category->category }}</p>
                            <h3 class="box-title"><a href="service-details.html">{{ $service->title }}</a></h3>
                            <p class="box-text">{{ $service->overview }}</p>
                            <form action="{{ route('service.show', ['service' => $service->id]) }}" method="GET"
                                style="display: inline;">
                                <button type="submit" class="th-btn btn-sm">
                                    Baca selengkapnya <i class="far fa-arrow-right ms-2"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!--==============================
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
                                    <h3 class="box-title">{{ $konfigurasioffer->title_include }}</h3>
                                    <p class="box-text">{{ $konfigurasioffer->include }}</p>
                                </div>
                            </div>
                            <div class="contact-process">
                                <div class="box-number">02</div>
                                <div class="media-body">
                                    <h3 class="box-title">{{ $konfigurasioffer->title_include2 }}</h3>
                                    <p class="box-text">{{ $konfigurasioffer->include2 }}</p>
                                </div>
                            </div>
                            <div class="contact-process">
                                <div class="box-number">03</div>
                                <div class="media-body">
                                    <h3 class="box-title">{{ $konfigurasioffer->title_include3 }}</h3>
                                    <p class="box-text">{{ $konfigurasioffer->include3 }}</p>
                                </div>
                            </div>
                            <div class="contact-process">
                                <div class="box-number">04</div>
                                <div class="media-body">
                                    <h3 class="box-title">{{ $konfigurasioffer->title_include4 }}</h3>
                                    <p class="box-text">{{ $konfigurasioffer->include4 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center text-xl-start align-self-center space-extra">
                    <div class="title-area">
                        <span class="sub-title"><img src="{{ asset('assets/img/theme-img/title_icon.svg') }}"
                                alt="shape">{{ $konfigurasioffer->nav }}ment</span>
                        <h2 class="sec-title">{{ $konfigurasioffer->title }}</h2>
                    </div>
                    <form action="{{ route('submit.form') }}" method="POST" id="myForm">
                        @csrf
                        <div class="row">
                            <!-- Input fields sama seperti sebelumnya -->
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="username" id="username"
                                    placeholder="Nama Kamu" required>
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email_address" id="email_address"
                                    placeholder="Alamat Email" required>
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="phone_number" id="phone_number"
                                    placeholder="Nomor Telepon" required>
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
                                <textarea name="description" id="description" cols="30" rows="3" class="form-control"
                                    placeholder="Pesan Kamu" required></textarea>
                                <i class="fal fa-pencil"></i>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LcgYFMqAAAAAKEdfhBqFFdRxLk9_07L-Vea_hMd"></div>
                            <br>
                            <div class="form-btn col-12">
                                <button class="th-btn" type="submit">Kirim<i
                                        class="far fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>

                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                    <script>
                        document.getElementById('myForm').addEventListener('submit', function(event) {
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
                <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg"
                        alt="Icon">{{ $konfigurasigallery->nav }}</span>
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
    Price Area
    ==============================-->
    <section class="space" data-bg-src="assets/img/bg/pattern_bg_2.jpg">
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
                @foreach ($pricingplan as $harga)
                    <div class="hover-item  col-xl-3 col-md-6">
                        <div class="price-card">
                            <div class="box-shape">
                                <img src="{{ asset('assets/img/shape/lines_3.png') }}" alt="shape">
                            </div>
                            <h3 class="box-title">{{ $harga->title }}</h3>
                            <p class="box-price">{{ $harga->price }}<span class="duration">/Bulan</span></p>
                            <div class="box-list">
                                <ul>
                                    {!! $harga->superiority !!}
                                </ul>
                            </div>
                            <div class="box-footer">
                                <a href="https://wa.me/{{ $contact->telephone }}" target="blank"
                                    class="th-btn">Memulai<i class="far fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--==============================
    Testimonial Area
    ==============================-->
    {{-- <section class="space" id="testi-sec" data-bg-src="assets/img/bg/pattern_bg_1.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <div class="title-area text-center text-md-start">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">Testimonial</span>
                        <h2 class="sec-title">What our client say</h2>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="sec-btn mt-n3 mt-md-0">
                        <a href="testimonial.html" class="th-btn style4">View All Reviews<i class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="testiSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-img">
                                    <img src="assets/img/testimonial/testi_b_1.jpg" alt="Image">
                                </div>
                                <div class="box-content">
                                    <div class="box-review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">Rakar has most quality services by subtle craftmens, Diam id semper tellus. Est aliquam sit est ac. Felis diam nunc nibh blandit risus ndrerit sed consectetur quis leo on the  praesent scelerisque.</p>
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
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">The most quality services by subtle craftmens, Diam id semper tellus. Est aliquam sit est ac. Felis diam nunc nibh blandit risus ndrerit sed consectetur quis leo on the  praesent in Rakar.</p>
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
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">Rakar has most quality services by subtle craftmens, Diam id semper tellus. Est aliquam sit est ac. Felis diam nunc nibh blandit risus ndrerit sed consectetur quis leo on the  praesent scelerisque.</p>
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
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                    </div>
                                    <p class="box-text">The most quality services by subtle craftmens, Diam id semper tellus. Est aliquam sit est ac. Felis diam nunc nibh blandit risus ndrerit sed consectetur quis leo on the  praesent in Rakar.</p>
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
@endsection
