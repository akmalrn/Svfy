<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $konfigurasi->nama_title }}</title>
    <meta name="author" content="Rakar">
    @if(Route::is('blogs.show'))
    <meta name="description" content="{{ $blog->meta_descriptions }}">
    <meta name="keywords" content="{{ $blog->meta_keywords }}">
@endif
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/x-icon" href="{{ asset($konfigurasi->logo_title) }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset($konfigurasi->logo_title) }}">
    <meta name="theme-color" content="#ffffff">

    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ $konfigurasi->logo_title }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
    Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">

    <!--==============================
    All CSS File
    ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>


<body>

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--********************************
   Code Start From Here
 ******************************** -->

    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader ">
        <button class="th-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="color-scheme">
        <button class="switchIcon"><i class="fa-solid fa-palette"></i></button>
        <h4 class="color-scheme-title"><i class="far fa-palette"></i> Color Switcher</h4>
        <p class="color-scheme-text">Check template with your color</p>
        <div class="color-switch-btns">
            <button data-color="#2A07F9"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#068FFF"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#044DBC"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#FFAF00"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#F80000"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#231E7A"><i class="fa-solid fa-droplet"></i></button>
        </div>
        <p class="color-scheme-text">Or custom color..</p>
        <input type="color" id="thcolorpicker" value="#2A07F9">
    </div>
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="home-handyman.html"><img src="assets/img/logo.svg" alt="Rakar"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="home-handyman.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="home-handyman.html">Home Handyman</a></li>
                            <li><a href="home-office-repair.html">Home Office Repair</a></li>
                            <li><a href="home-electrician.html">Home Electrician</a></li>
                            <li><a href="home-air-condition.html">Home Air Condition</a></li>
                            <li><a href="home-carpentry.html">Home Carpentry</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Our Services</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Our Services</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-details.html">Shop Details</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="pricing.html">Price Plan</a></li>
                            <li><a href="testimonial.html">Testimonials</a></li>
                            <li><a href="{{ route('faq') }}">Faq Page</a></li>
                            <li><a href="error.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Project</a>
                        <ul class="sub-menu">
                            <li><a href="project.html">Project</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--==============================
 Header Area
==============================-->
    <header class="th-header header-layout2 ">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="fas fa-location-dot"></i> {{ $contact->address }}</li>
                                <li><i class="fas fa-clock"></i> {{ $konfigurasi->timetable }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li class="d-none d-md-inline-block"><i class="fas fa-messages"></i> <a
                                        href="{{ route('faq') }}">FAQ</a></li>
                                <li><i class="fas fa-headset"></i> <a href="{{ route('contact') }}">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="sticky-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="home-handyman.html"><img src="{{ asset($konfigurasi->logo) }}" alt="Rakar"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="menu-area">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li>
                                            <a href="{{ route('index') }}">Beranda</a>
                                        </li>
                                        <li><a href="{{ route('about') }}">{{ $aboutus->nav }}</a></li>
                                        <li>
                                            <a href="{{ route('services') }}">{{ $konfigurasiservice->nav }}</a>
                                        </li>
                                        {{-- <li class="menu-item-has-children">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="#">Shop</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="shop-details.html">Shop Details</a></li>
                                                        <li><a href="cart.html">Cart Page</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="pricing.html">Price Plan</a></li>
                                                <li><a href="testimonial.html">Testimonials</a></li>
                                                <li><a href="faq.html">Faq Page</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                            </ul>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('blog') }}">Blog</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact') }}">{{ $contact->nav }}</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="header-button">
                                    {{-- <form action="#" class="header-search">
                                        <input type="text" placeholder="Search Services...">
                                        <button type="button" class="icon-btn"><i
                                                class="fal fa-search"></i></button>
                                    </form>
                                    <button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                            class="far fa-bars"></i></button> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xxl-block">
                            <a href="{{ route('contact') }}" class="th-btn style3">Dapatkan Penawaran<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets/img/bg/footer_bg_1.jpg') }}">
        <div class="shape-mockup spin" data-top="14%" data-left="4%"><img src="{{ asset('assets/img/shape/dots_1.svg') }}"
                alt="shape"></div>
        <div class="shape-mockup spin" data-bottom="18%" data-right="7%"><img src="{{ asset('assets/img/shape/dots_1.svg') }}"
                alt="shape"></div>
        <div class="footer-contact-area">
            <div class="container">
                <div class="footer-contact-wrap">
                    <div class="footer-contact">
                        <div class="box-icon">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <p class="box-text">{{ $contact->address }}</p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="footer-contact">
                        <div class="box-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">Hubungi Kami:</h3>
                            <p class="box-text"><a href="https://wa.me/{{ $contact->telephon }}"
                                    target="blank">{{ $contact->telephone }}</a></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="footer-contact">
                        <div class="box-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">Email Us:</h3>
                            <p class="box-text"><a href="{{ $contact->email_address }}"
                                    target="blank">{{ $contact->email_address }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="home-handyman.html"><img src="{{ asset($konfigurasi->logo) }}"
                                            alt="Rakar"></a>
                                </div>
                                <p class="about-text">{{ $konfigurasi->description_footer }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title"><img src="{{ asset('assets/img/icon/footer_title.svg') }}" alt="icon">
                                Tautan Berguna</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="{{ route('index') }}">Beranda</a></li>
                                    <li><a href="{{ route('about') }}">{{ $aboutus->nav }}</a></li>
                                    <li><a href="{{ route('index') }}#pricing">Paket Harga</a></li>
                                    <li><a href="{{ route('services') }}">{{ $konfigurasiservice->nav }}</a></li>
                                    <li><a href="{{ route('contact') }}">Janji temu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title"><img src="{{ asset('assets/img/icon/footer_title.svg') }}"
                                    alt="icon">{{ $konfigurasiservice->nav }}</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    @foreach ($kategoriservice as $kategori)     
                                    <li>
                                        <a href="#"> {{ $kategori->category }}</a>
                                        {{-- <span>(10)</span> --}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget newsletter-widget footer-widget">
                            <h3 class="widget_title"><img src="{{ asset('assets/img/icon/footer_title.svg') }}" alt="icon">
                                Sosial Media</h3>
                            <div class="th-social">
                                <a href="{{ $konfigurasi->link_facebook }}" target="blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="{{ $konfigurasi->link_twitter }}" target="blank"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="{{ $konfigurasi->link_instagram }}" target="blank"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="{{ $konfigurasi->link_linkedin }}" target="blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> <a
                                href="home-handyman.html">{{ $konfigurasi->footer }} </a></p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-links">
                            <ul>
                                <li><a href="about.html">Terms of service</a></li>
                                <li><a href="about.html">Privacy policy</a></li>
                                <li><a href="about.html">Cookies</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--********************************
   Code End  Here
 ******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <!-- jQuery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <!-- Swiper Js -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Tilt -->
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
