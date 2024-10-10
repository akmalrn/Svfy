@extends('servify.layouts')
@section('content')
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $konfigurasiblog->nav }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('index') }}">Beranda</a></li>
                    <li>{{ $konfigurasiblog->nav }}</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
            Blog Area
        ==============================-->
    <section class="th-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single">
                        <div>
                            <img src="{{ asset($blog->path) }}" alt="Blog Image" style="max-width: 100%">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="{{ route('blog') }}"><i
                                        class="fal fa-user"></i>{{ $konfigurasi->nama_website }}</a>
                                <a href="{{ route('blog') }}"><i class="fal fa-clock"></i>17 Jan, 2024</a>
                                <a href="{{ route('blog') }}"><img src="{{ asset('assets/img/icon/cat_1.svg') }}"
                                        alt="icon"> Servify</a>
                            </div>
                            <h2 class="blog-title">{{ $blog->title }}</h2>
                            <p>{!! $blog->description !!}</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search  ">
                            {{-- <form class="search-form">
                                <input type="text" placeholder="Enter Keyword">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form> --}}
                        </div>
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Kategori</h3>
                            <ul>
                                @foreach ($kategoriservice as $kategori)    
                                <li>
                                    <a>{{ $kategori->category }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                           
                        <div class="widget  ">
                            <h3 class="widget_title">Postingan Terbaru</h3>
                            <div class="recent-post-wrap">
                                @foreach ($allblog as $blog)    
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('blogs.show', $blog->id) }}"><img src="{{ asset($blog->path) }}"
                                                alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="far fa-calendar"></i>{{ $blog->created_at }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="widget widget_tag_cloud  ">
                            <h3 class="widget_title">Tag Populer</h3>
                            <div class="tagcloud">
                                @if($blog->meta_keywords)
                                    @foreach(explode(',', $blog->meta_keywords) as $keyword)
                                        <a>{{ trim($keyword) }}</a>
                                    @endforeach
                                @endif
                            </div>
                            
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
