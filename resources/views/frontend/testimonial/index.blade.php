@extends('layouts.frontend.uikit.isian')

@section('content')
    @foreach ($profiles as $navbar)
    <div class="uk-section-default uk-preserve-color">
            <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-dark; top: 300">
                <nav class="uk-navbar-container">
                    <div class="uk-container uk-container-expand uk-background-warning">
                        <div uk-navbar>
                            <a class="uk-navbar-item uk-logo" href="{{url('/')}}">
                                <img src="{{asset('storage/'.$navbar->logo_usaha)}}" width="150px" height="150px">
                            </a>
                            
                            <div class="uk-navbar-right uk-visible@m">
                                <ul class="uk-navbar-nav">
                                    <li><a href="{{url('/')}}">Beranda</a></li>

                                    <li><a href="{{route('profile')}}">Profile Kami</a></li>

                                    <li><a href="{{route('produk')}}">Produk</a></li>

                                    <li><a href="{{route('blog')}}">Blog</a></li>

                                    <li><a href="{{route('resep')}}">Resep</a></li>

                                    <li><a href="{{route('galeri')}}">Galeri</a></li>

                                    <li class="uk-active">
                                        <a href="{{route('testimonial')}}">Testimonial</a>
                                    </li>

                                    <li><a href="{{url('hubungi-kami')}}">Hubungi Kami</a></li>
                                </ul>
                            </div>

                            <div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas uk-margin-auto">
                                <div class="uk-offcanvas-bar">
                                    <ul class="uk-nav">
                                        <li><a href="{{url('/')}}">Beranda</a></li>
                                        <li><a href="{{route('profile')}}">Profile Kami</a></li>
                                        <li><a href="{{route('produk')}}">Produk</a></li>
                                        <li><a href="{{route('blog')}}">Blog</a></li>
                                        <li><a href="{{route('resep')}}">Resep</a></li>
                                        <li><a href="{{route('galeri')}}">Galeri</a></li>
                                        <li><a href="{{route('testimonial')}}">Testimonial</a></li>
                                        <li><a href="{{route('hubungi-kami')}}">Hubungi Kami</a></li>
                                    </ul>
                                </div>
                            </div>
                        
                            <a class="uk-navbar-toggle uk-navbar-right uk-hidden@m" uk-toggle="target: #sidenav" uk-navbar-toggle-icon></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    @endforeach

    <div class="uk-height-large uk-background-cover uk-flex uk-flex-center uk-flex-middle uk-light" 
            data-src="https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200" 
            data-srcset="https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200,
                        https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200,
                        https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200" 
            sizes="(min-width: 1200px) 1200px, 100vw" uk-img="" 
            style="background-image: url(https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200);">
        <div class="uk-h2 uk-text-bolder uk-text-center">{{$title}}</div>
    </div>

    <div class="uk-section uk-section-medium">
        <div class="uk-container uk-container-medium">
            <div class="uk-grid uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@l uk-child-width-expand@m" data-uk-grid="" data-uk-scrollspy="cls: uk-animation-scale-up; target: > div > div; delay: 100">
                <div class="uk-first-column">
                    <div class="uk-h4 uk-flex uk-flex-center uk-text-middle uk-text-light">
                        So how did the classical Latin become so incoherent? According to McClintock, a 15th century typesetter likely scrambled part of Cicero's De Finibus in order to provide placeholder text to mockup various fonts for a type specimen book.
                        It's difficult to find examples of lorem ipsum in use before Letraset made it popular as a dummy text in the 1960s, although McClintock says he remembers coming across the lorem ipsum passage in a book of old metal type samples. So far he hasn't relocated where he once saw the passage, but the popularity of Cicero in the 15th century supports the theory that the filler text has been used for centuries.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section uk-section-muted">
        <div class="uk-container uk-container-medium">
            <div class="uk-child-width-1-1@s uk-child-width-1-3@m uk-child-width-1-3@l uk-margin-large-bottom uk-grid" uk-grid="" uk-scrollspy="cls: uk-animation-slide-bottom; target: div > div; delay: 100; repeat: true">
                @foreach ($testimonials as $testimoni)
                    <div>
                        <div class="uk-card uk-card-small uk-card-default">
                            <div class="uk-card-media-top">
                                <div class="uk-flex uk-flex-middle">
                                    <img class="uk-border-rounded" src="{{asset('storage/'.$testimoni->image_testi)}}" height="200px" alt="Border circle">
                                </div>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">{{$testimoni->nama_testi}}</h3>
                                <span class="uk-article-meta">Pada {{$testimoni->updated_at->format('d-m-Y h:m:s' )}}</span>
                                <hr>
                                <div>
                                    <span class="uk-text-lighter uk-text uk-text-secondary">{!! $testimoni->deskripsi_testi !!}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection