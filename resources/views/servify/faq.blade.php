@extends('servify.layouts')
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $konfigurasifaq->nav }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Beranda</a></li>
                    <li>{{ $konfigurasifaq->nav }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Faq Area
==============================-->
    <div class="space">
        <div class="shape-mockup d-none d-xxl-block" data-bottom="0%" data-right="0%"><img src="assets/img/shape/man_shape_4.png" alt="shape"></div>
        <div class="container">
            <div class="mb-5 pb-3">
                {{-- <form class="faq-search search-form">
                    <input type="text" placeholder="Enter Keyword">
                    <button type="submit"><i class="far fa-search"></i></button>
                </form> --}}
            </div>
            <div class="title-area text-center">
                <h2 class="sec-title">{{ $konfigurasifaq->title }}</h2>
                <p class="sec-text">{{ $konfigurasifaq->overview }}</p>
            </div>
            <div class="row gy-40 justify-content-center">
                <div class="col-xl-10">
                    <div class="accordion-1 accordion load-more-active" id="faqAccordion">

                        @foreach($faq as $item)
                        <div class="accordion-card active ">
                            <div class="accordion-header" id="collapse-item-{{ $item->number }}">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $item->number }}" aria-expanded="true" aria-controls="collapse-{{ $item->number }}">{{ $item->title }}</button>
                            </div>
                            <div id="collapse-{{ $item->number }}" class="accordion-collapse collapse show" aria-labelledby="collapse-item-{{ $item->number }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">{{ $item->description }}.</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                
                    </div>
                    <div class="text-center mt-n4">
                        <button class="th-btn load-more-btn">Load More<i class="fa-duotone fa-spinner ms-2"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
Blog Area  
==============================-->
    <section class="space" id="blog-sec">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-4 col-lg-5 col-md-7">
                    <div class="title-area text-center text-md-start">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg" alt="shape">Blog & Articles</span>
                        <h2 class="sec-title">Every Single Update From Rakar</h2>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="sec-btn mt-n3 mt-md-0">
                        <a href="blog.html" class="th-btn style4">View All Articles<i class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="blog-card">
                        <a href="blog-details.html" class="blog-img">
                            <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                        </a>
                        <span class="box-date">15 Jan, 2024</span>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>By Rakar</a>
                                <a href="blog.html"><i class="fas fa-tags"></i>Repair</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">All in one 5 Signs You Need To Repair Your Home Roof</a></h3>
                            <p class="box-text">There are full service engage company is to provide solution company Loream are full service engage company.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="blog-card">
                        <a href="blog-details.html" class="blog-img">
                            <img src="assets/img/blog/blog_1_2.jpg" alt="blog image">
                        </a>
                        <span class="box-date">16 Jan, 2024</span>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>By Rakar</a>
                                <a href="blog.html"><i class="fas fa-tags"></i>Service</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">Interior renovation in the home using up-to-date tools</a></h3>
                            <p class="box-text">There are full service engage company is to provide solution company Loream are full service engage company.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="blog-card">
                        <a href="blog-details.html" class="blog-img">
                            <img src="assets/img/blog/blog_1_3.jpg" alt="blog image">
                        </a>
                        <span class="box-date">17 Jan, 2024</span>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fas fa-user"></i>By Rakar</a>
                                <a href="blog.html"><i class="fas fa-tags"></i>Repair</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">AC repair in the home using up-to-date equipment</a></h3>
                            <p class="box-text">There are full service engage company is to provide solution company Loream are full service engage company.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
   @endsection