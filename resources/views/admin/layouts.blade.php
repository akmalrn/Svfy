<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Backend - Servify</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('gambar/logograha.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(135deg, #3498db, #8e44ad);">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span style="color: white">{{ $user->name }}</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" onclick="return confirmLogout()" class="dropdown-item">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion"
                style="background :linear-gradient(135deg, #3498db, #8e44ad)">
                <img src="{{ asset('gambar/logograha.png') }}" alt="" width="50%"
                    style="margin: -20% 100px 0 50px"><a class="navbar-brand ps-3" href="index.html"></a></img>
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">NavBar</div>
                        <a class="nav-link d-flex align-items-center" href="{{ route('dashboard') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            <span>Dashboard</span>
                        </a>
                        <div class="sb-sidenav-menu-heading">View</div>

                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center {{ request()->routeIs('konfigurasi.index') ? 'active' : '' }}"
                                href="{{ route('konfigurasi.index') }}">
                                <span>Konfigurasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center {{ request()->routeIs('slider.index') ? 'active' : '' }}"
                                href="{{ route('slider.index') }}">
                                <span>Slider</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>About Us</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('aboutus.index') }}">About Us
                                        Konfigurasi</a></li>
                                <li><a class="dropdown-item" href="{{ route('keunggulanaboutus.index') }}">Keunggulan
                                        About Us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Layanan</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('service.index') }}">Layanan</a></li>
                                <li><a class="dropdown-item" href="{{ route('categoryservice.index') }}">Kategori
                                        Layanan</a></li>
                                <li><a class="dropdown-item" href="{{ route('konfigurasiservice.index') }}">Layanan Konfigurasi</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('konfigurasilayanandetail.index') }}">Layanan Detail Konfigurasi</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('keunggulanlayanandetail.index') }}">Keunggulan Layanan
                                        Detail</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Why Us</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('whyus.index') }}">Why Us Konfigurasi</a></li>
                                <li><a class="dropdown-item" href="{{ route('superioritywhyus.index') }}">Keunggulan
                                        Why Us</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Team</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('team.index') }}">Tim Kami</a></li>
                                <li><a class="dropdown-item" href="{{ route('teamkonfigurasi.index') }}">Tim Konfigurasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Galery</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('galery.index') }}">Galeri</a></li>
                                <li><a class="dropdown-item" href="{{ route('konfigurasigallery.index') }}">
                                        Galeri Konfigurasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Blog</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('blogs.index') }}">Blog</a></li>
                                <li><a class="dropdown-item" href="{{ route('konfigurasiblog.index') }}">
                                        Blog Konfigurasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Penetapan Harga</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('pricing.index') }}">Harga</a></li>
                                <li><a class="dropdown-item" href="{{ route('konfigurasipricing.index') }}">
                                        Harga Konfigurasi</a></li>
                            </ul>
                        </li>
                        <a class="nav-link d-flex align-items-center" href="{{ route('categoryservice.index') }}">Kategori
                            </a>
                        <a class="nav-link d-flex align-items-center" href="{{ route('mitra.index') }}">
                            <span>Mitra</span>
                        </a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>Penawaran</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('offer.index') }}">Penawaran</a></li>
                                <li><a class="dropdown-item" href="{{ route('konfigurasioffer.index') }}">
                                    Penawaran Konfigurasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span>FAQ</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('faqss.index') }}">FAQ</a></li>
                                <li><a class="dropdown-item" href="{{ route('konfigurasifaq.index') }}">
                                    FAQ Konfigurasi</a></li>
                            </ul>
                        </li>
                        <a class="nav-link d-flex align-items-center" href="{{ route('contact.index') }}">
                            <span>Contact</span>
                        </a>
                        <!-- Dropdown Menu for User -->

                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main style="margin: -8% 0px 0px 0px ">
                <div class="container-fluid px-4">
                    <h1 class="mt-4"
                        style="font-size: 32px; color: #4b0082; /* Warna ungu gelap */ margin-bottom: 20px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; background: -webkit-linear-gradient(#6f42c1, #007bff); /* Gradien ungu ke biru */ -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                        @yield('title')</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">@yield('title2')</li>
                    </ol>
                    @yield('Konten')
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Graha Teknologi 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
</body>

</html>
