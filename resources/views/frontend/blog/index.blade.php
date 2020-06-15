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

                                    <li class="uk-active">
                                        <a href="{{route('blog')}}">Blog</a>
                                    </li>

                                    <li><a href="{{route('resep')}}">Resep</a></li>
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
    <div class="uk-section uk-section-default uk-margin-small uk-margin">
        <div class="uk-container">
            
            <div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-3@l uk-grid-match" uk-grid>
                @foreach ($blog as $item)
                <div class="uk-first-column">
                    <div class="uk-card uk-card-default uk-card-hover">
                        <div class="uk-card-media-top">
                            <img src="{{asset('storage/'.$item->image_blog)}}" alt="">
                        </div>
                        <div class="uk-card-body">
                            <article class="uk-article">
                                <h6 class="uk-article-title">
                                    <a class="uk-link-reset" href="{{url('blog/read', $item->slug_blog)}}">{{ $item->judul_blog }}</a>
                                </h6>
                                <p class="uk-article-meta">Oleh {{ $item->created_by }} pada {{$item->created_at->format('d-m-Y h:m:s')}} </p>
                                <span class="uk-text-lighter" style="color: #000;">
                                    {!! $item->deskripsi_blog !!}
                                </span>
                                <br><hr>
                                <div class="uk-grid-small uk-grid" uk-grid="">
                                    <div class="uk-first-column">
                                        <a class="uk-button uk-button-text" href="{{url('blog/read', $item->slug_blog)}}"><strong>Selengkapnya</strong></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection