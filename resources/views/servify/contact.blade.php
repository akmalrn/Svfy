@extends('servify.layouts')
@section('content')
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $contact->nav }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Beranda</a></li>
                    <li>{{ $contact->nav }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Contact Info Area
==============================-->
    <div class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">{{ $contact->nav }}</span>
                <h2 class="sec-title">{{ $contact->title }}</h2>
            </div>
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">Alamat Kita</h5>
                            <p class="box-text">{{ $contact->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="team-contact">
                        <div class="icon-btn">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title">Nomot Telepon</h5>
                            <p class="box-text">
                                <a href="https://wa.me/{{ $contact->telephone }}">{{ $contact->telephone }}</a>
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
                                <a href="{{ $contact->email_address }}">{{ $contact->email_address }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--==============================
Contact Area
==============================-->
    <div class="space" data-bg-src="{{ asset('assets/img/cleaning.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 text-center text-xl-start">
                    <form action="{{ route('submit.forms') }}" method="POST" class="contact-form">
                        @csrf
                        <h2 class="sec-title">{{ $konfigurasioffer->title }}</h2>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Nama Kamu">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email_address" id="email_address" placeholder="Alamat Email">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="phone_number" id="phone_number" placeholder="Nomor Telepon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="subject" id="subject" class="form-select">
                                    <option value="" disabled selected hidden>Pilih Subjek</option>
                                    <option value="Pertanyaan Umum">Pertanyaan Umum</option>
                                    <option value="Bantuan Dukungan">Bantuan Dukungan</option>
                                    <option value="Dukungan Penjualan">Dukungan Penjualan</option>
                                </select>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="description" id="description" cols="30" rows="3" class="form-control" placeholder="Pesan Kamu"></textarea>
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
                        document.querySelector('.contact-form').addEventListener('submit', function(event) {
                            var recaptchaResponse = grecaptcha.getResponse();
                            if (recaptchaResponse.length === 0) {
                                event.preventDefault(); // Cegah pengiriman form jika reCAPTCHA belum terisi
                                alert('Silakan verifikasi reCAPTCHA sebelum mengirim.');
                            }
                        });
                    </script>
                </div>
                <div class="col-xl-6 mt-5 mt-xl-0">
                    <div class="text-center">
                        <a href="https://www.youtube.com/watch?v={{ $contact->link_youtube }}" class="play-btn style4 popup-video">
                            <i class="fa-sharp fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-map">
        <iframe src="{{ $contact->map }}" allowfullscreen="" loading="lazy"></iframe>
    </div>
@endsection
