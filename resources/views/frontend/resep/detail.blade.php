@extends('layouts.frontend.uikit.isian')

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
                                    <li class="uk-active">
                                        <a href="{{route('resep')}}">Resep</a>
                                    </li>
                                    <li><a href="{{route('galeri')}}">Galeri</a></li>
                                    <li><a href="{{route('testimonial')}}">Testimonial</a></li>
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

@section('content')
    <div class="uk-height-large uk-background-cover uk-flex uk-flex-center uk-flex-middle uk-light" 
            data-src="https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200" 
            data-srcset="https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200,
                        https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200,
                        https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200" 
            sizes="(min-width: 1200px) 1200px, 100vw" uk-img="" 
            style="background-image: url(https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200);">
        <div class="uk-h2 uk-text-bolder uk-text-center">{{$title}}</div>
    </div>

    <div class="uk-margin-small uk-margin-large-bottom uk-margin">
        <div class="uk-container">

            <div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-2-3@l uk-text-justify uk-grid" uk-grid uk-lightbox="animation: scale">
                <article class="uk-article">

                    <img class="uk-margin-large-top" src="{{asset('storage/'.$resepdetail->image_resep)}}" alt="">

                    <h1 class="uk-article-title uk-text-bolder"><span class="uk-link-reset">{{$resepdetail->judul_resep}}</span></h1>

                    <p class="uk-article-meta">Oleh {{ $resepdetail->created_by }} pada {{$resepdetail->created_at->format('d-m-Y')}} dilihat {{ visits($resepdetail)->count() }} kali </p>

                    <span class="uk-text-lead uk-text-light">
                        {!! $resepdetail->deskripsi_resep !!}
                    </span>
                    
                    <div class="uk-grid-small uk-grid uk-margin-large" uk-grid="">
                        <div class="uk-first-column">
                            {{-- <a class="uk-button uk-button-text" href="#">Share Button</a> --}}
                            <a href="https://api.whatsapp.com/send?text=Bagikan%20Link%20Ini {{$resepdetail->slug_resep}} {{url('resep/read', $resepdetail->slug_resep)}}" title="Share on Whatsapp" rel="external"  target="_blank" class="uk-icon-link uk-margin-small-top" uk-icon="icon: whatsapp; ratio: 1.0"></a>
                            <a href="https://www.facebook.com/share.php?u={{url('resep/read', $resepdetail->slug_resep)}}" target="_blank" title="Share on Facebook" rel="external" class="uk-icon-link uk-margin-small-top" uk-icon="icon: facebook; ratio: 1.0"></a>
                            <a href="mailto:?Subject={{$resepdetail->judul_resep}}&Body={{$resepdetail->judul_resep}}! {{url('resep/read', $resepdetail->slug_resep)}}" class="uk-icon-link uk-margin-small-top" uk-icon="icon: mail; ratio: 1.0"></a>
                        </div>
                    </div>

                </article>
            </div>
        </div>
    </div>
@endsection