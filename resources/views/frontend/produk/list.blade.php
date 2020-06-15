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

                                <li class="uk-active">
                                    <a href="{{route('produk')}}">Produk</a>
                                </li>

                                <li><a href="{{route('blog')}}">Blog</a></li>
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

    <div class="uk-height-large uk-background-cover uk-flex uk-flex-center uk-flex-middle uk-light" 
            data-src="https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200" 
            data-srcset="https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200,
                        https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200,
                        https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200" 
            sizes="(min-width: 1200px) 1200px, 100vw" uk-img="" 
            style="background-image: url(https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200);">
        {{-- <h1>Background Image</h1> --}}
        <div class="uk-h2 uk-text-bolder uk-text-center">{{$title}}</div>
    </div>

    <div class="uk-margin-medium uk-margin-large-bottom uk-margin">
        <div class="uk-container">
            {{-- <div class="uk-h2 uk-text-center uk-text-bolder">{{$title}}</div> --}}
            
            {{-- <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid uk-flex-top uk-flex-wrap-top" uk-grid="masonry: true; parallax: 150" style="padding-bottom: 80px; height: 850px;">
                @foreach ($produks as $produk)
                <div class="uk-first-column" style="transform: translateY(3.16247px);">
                    <div class="uk-panel">
                        <img src="{{asset('storage/'.$produk->image)}}" alt="Image Produk">
                    </div>
                </div>
                @endforeach
            </div> --}}

            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid uk-flex-top uk-flex-wrap-top" uk-grid="masonry: true" style="height: 700px;">
                @foreach ($produklist as $produk)
                <div class="uk-first-column" style="transform: translateY(0px);">
                    <div class="uk-panel">
                        <a class="uk-inline uk-panel uk-link-muted uk-text-center" style="text-decoration:none" href="{{url('produk/read', $produk->slug_produk)}}">
                            {{-- <img src="{{asset('storage/'.$produk->image)}}" alt="Image Produk"> --}}
                            <figure>
                                <img src="{{asset('storage/'.$produk->image)}}" width="400" alt="{{$produk->nama_produk}}">
                                <figcaption class="uk-margin-small-top uk-text-light uk-h4">{{$produk->nama_produk}}</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <ul class="uk-pagination uk-flex-center" uk-margin>
                {{-- <li><a href="#"><span uk-pagination-previous></span></a></li> --}}
                <li><a href={!! $produklist->render() !!}></a></li>
                {{-- <li>{{$produklist->links()}}></li> --}}
                {{-- <li><a href="#"><span uk-pagination-next></span></a></li> --}}
            </ul>

            {{-- <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid uk-flex-top uk-flex-wrap-top">
                <ul class="uk-pagination uk-flex-center" uk-margin>
                    {!! $produklist->render() !!}
                </ul>
    
                <ul class="uk-pagination uk-flex-center">
                    <li><a href="#">
                        <span uk-pagination-previous="" class="uk-icon uk-pagination-previous">
                            <svg width="7" height="12" viewBox="0 0 7 12" xmlns="http://www.w3.org/2000/svg" data-svg="pagination-previous"><polyline fill="none" stroke="#000" stroke-width="1.2" points="6 1 1 6 6 11"></polyline></svg>
                        </span> Previous</a>
                    </li>
                    <li>{!! $produklist->render() !!}</li>
                    <li><a href="#">Next <span uk-pagination-next="" class="uk-icon uk-pagination-next"><svg width="7" height="12" viewBox="0 0 7 12" xmlns="http://www.w3.org/2000/svg" data-svg="pagination-next"><polyline fill="none" stroke="#000" stroke-width="1.2" points="1 1 6 6 1 11"></polyline></svg></span></a></li>
                </ul>
            
            </div> --}}
            

        </div>
    </div>
@endsection


{{-- @extends('layouts.frontend.content')
@extends('layouts.frontend.uikit.isi')

@section('content')
    <div class="blog section section py-5">
        <div class="container">
            <div class="py-2">
                <div class="row">
                    <h3>{{$title}}</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($produklist as $produklist)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{asset('storage/'.$produklist->image)}}" style="max-height:200px;max-width:100%;margin-top:0px;">
                        <div class="card-body">
                            <h4 class="category text-info">{{$produklist->nama_produk}}</h4>
                            <hr>
                            <h6 class="card-title text-warning">Rp. {{$produklist->harga}},-</h6>
                            <p class="card-text">{!! substr($produklist->description, 0, 180) !!} </p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-warning btn-square" href={{url('produk',$produklist->id)}}>Baca Selengkapnya &rarr;</a> 
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection --}}