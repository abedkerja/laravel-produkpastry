{{-- @extends('layouts.frontend.main') --}}
@extends('layouts.frontend.uikit.utama')

@section('content')
    {{-- Section 1 : Selamat Datang | Welcome #ffc02a(warna footer) #ffb400(warna button) --}}
    <div class="uk-section uk-section-muted">
        <div class="uk-container uk-container-medium">
            <div class="uk-grid uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-3@l uk-child-width-expand@m" data-uk-grid="" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; target: > div > div; delay: 200">
                <div class="uk-first-column">
                    <div class="uk-h3 uk-text-bolder uk-text-center">Mudah</div>
                    <div class="uk-flex uk-flex-center">
                        <span uk-icon="icon: happy; ratio: 5"></span>
                    </div>
                    <div class="uk-flex uk-flex-center uk-align-center">
                        <div class="uk-h4 uk-text-middle uk-text-light">
                            Mudah untuk digunakan, Mudah disesuaikan, & Mudah Dibentuk
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-h3 uk-text-bolder uk-text-center">Murah</div>
                    <div class="uk-flex uk-flex-center">
                        <span uk-icon="icon: credit-card; ratio: 5"></span>
                    </div>
                    <div class="uk-flex uk-flex-center uk-align-center">
                        <div class="uk-h4 uk-text-middle uk-text-light">
                            Deskripsi Murah misalnya : Hanya dengan harga Rp. 19000, Anda dapat berkreasi untuk membuat berbagai macam kudapan rumahan berkualitas 
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-h3 uk-text-bolder uk-text-center">Praktis</div>
                    <div class="uk-flex uk-flex-center">
                        <span uk-icon="icon:  lifesaver; ratio: 5"></span>
                    </div>
                    <div class="uk-flex uk-flex-middle uk-align-center">
                    <div class="uk-h4 uk-text-middle uk-text-light">
                        Sangat praktis ketika digunakan, tinggal buka pembatas plastik yang ada diantara adonan pastry. Anda sudah dapat menggunakan
                        kulit pastry sesuai dengan keinginan Anda.
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- Section 2 :  Section Produk..--}}
    <div class="uk-section uk-section-default uk-margin-small uk-margin-small-bottom uk-margin">
        <div class="uk-container">
            <h3 class="uk-text-center uk-text-bold"><span>Produk Kami</span></h3>
            <div class="uk-divider-icon uk-margin-medium"></div>

            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid uk-flex-top uk-flex-wrap-top uk-margin" uk-grid="masonry: true" style="height: 700px;">
                @foreach ($produks as $produk)
                <div class="uk-first-column" style="transform: translateY(0px);">
                    <div>
                        <a class="uk-inline uk-panel uk-link-muted uk-text-center" style="text-decoration:none" href="{{url('produk/read', $produk->slug_produk)}}" data-caption="{{$produk->nama_produk}}">
                            <figure>
                                <img src="{{asset('storage/'.$produk->image)}}" width="400" alt="{{$produk->nama_produk}}">
                                <figcaption class="uk-margin-small-top uk-text-light uk-h4">{{$produk->nama_produk}}</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="uk-container uk-container-medium uk-margin-medium uk-margin">
                <div class="uk-flex uk-flex-center uk-flex-middle">
                    <a class="uk-button uk-button-primary" href="{{url('/produk')}}">Lihat Selengkapnya &raquo;</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3 dan Section 4 : Section Resep dan Section Blog --}}
    <div class="uk-section uk-section-muted uk-margin-small uk-margin-small-bottom uk-margin">
        <div class="uk-container">
            <h3 class="uk-text-center uk-text-bold"><span>Resep</span></h3>
            <div class="uk-divider-icon uk-margin-medium"></div>

            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid uk-flex-top uk-flex-wrap-top uk-margin" uk-grid="masonry: true" style="height: 700px;">
                @foreach ($reseps as $resep)
                <div class="uk-first-column" style="transform: translateY(0px);">
                    <div>
                        <a class="uk-inline uk-panel uk-link-muted uk-text-center" style="text-decoration:none" href="{{url('resep/read', $resep->slug_resep)}}" data-caption="{{$resep->judul_resep}}">
                            <figure>
                                <img src="{{asset('storage/'.$resep->image_resep)}}" width="400" alt="{{$resep->judul_resep}}">
                                <figcaption class="uk-margin-small-top uk-text-light uk-h4">{{$resep->judul_resep}}</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="uk-container uk-container-medium uk-margin-medium uk-margin">
                <div class="uk-flex uk-flex-center uk-flex-middle">
                    <a class="uk-button uk-button-primary" href="{{url('/resep')}}">Lihat Selengkapnya &raquo;</a>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="uk-section uk-section-default">
        <div class="uk-container uk-background-default">
            <div class="uk-container">
                <h3 class="uk-text-center uk-text-bold"><span>Blog</span></h3>
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        @foreach($blogs as $blog)
                            <div class="item">
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <a href="#">
                                            <img src="{{asset('storage/'.$blog->image_blog)}}">
                                        </a>
                                    </div>

                                    <div class="uk-card-body">
                                        <h6 class="uk-text-danger">Oleh {{ $blog->created_by }} pada {{$blog->created_at->format('d-m-Y h:m:s')}}</h6>

                                        <h5 class="uk-card-title">
                                        <b>{{$blog->judul_blog}}</b>
                                        </h5>
                                        <p class="uk-card-description">
                                            {!!substr($blog->deskripsi_blog,0,180)!!}..
                                        </p>
                                        <hr>
                                        <div class="uk-card-footer">
                                            <a href="{{url('blog/read', $blog->slug_blog)}}" class="uk-button uk-button-text">
                                                Selengkapnya &raquo;
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="uk-section uk-section-default">
        <div class="uk-container uk-background-default">
            <h3 class="uk-text-center uk-text-bold"><span>Blog</span></h3>
            <div class="uk-divider-icon uk-margin-medium"></div>
            <div class="uk-child-width-1-1@l uk-child-width-1-1@m uk-child-width-1-1@s" uk-grid>
                <div>
                    <div class="owl-carousel owl-theme">
                        @foreach($blogs as $blog)
                            <div class="item">
                                <div class="uk-card uk-card-small uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="{{asset('storage/'.$blog->image_blog)}}">
                                    </div>
                                    <div class="uk-card-body">
                                        <h6 class="uk-text-danger">Oleh {{ $blog->created_by }} pada {{$blog->created_at->format('d-m-Y h:m:s')}}</h6>
                                        <h5 class="uk-card-title"><b>{{$blog->judul_blog}}</b></h5>
                                        <p> {!!substr($blog->deskripsi_blog,0,180)!!}.. </p>
                                    </div>
                                    <div class="uk-card-footer">
                                        <a href="{{url('blog/read', $blog->slug_blog)}}" class="uk-button uk-button-text">
                                            Selengkapnya &raquo;
                                        </a> 
                                    </div>
                                </div>
                    
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="uk-container uk-container-medium uk-margin-medium uk-margin">
                <div class="uk-flex uk-flex-center uk-flex-middle">
                    <a class="uk-button uk-button-primary" href="{{url('/blog')}}">Lihat Selengkapnya &raquo;</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 5 : Section Galeri --}}
    <div class="uk-section uk-section-muted">
        <div class="uk-container uk-background-muted">
            <div class="uk-container">
                <h3 class="uk-text-center uk-text-bold"><span>Galeri</span></h3>
                <div class="uk-margin-medium"></div>
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="clsActivated: uk-transition-active">

                    <ul class="uk-slider-items uk-grid">
                        @foreach ($galeries as $galeri)
                            <li class="uk-width-1-4">
                                <div class="uk-panel">
                                    <img src="{{asset('storage/'.$galeri->image_galeri)}}" alt="" style="height: 300px">
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                                        <h3 class="uk-margin-remove">{{$galeri->judul_galeri}}</h3>
                                        <p class="uk-margin-remove">{!! $galeri->deskripsi_galeri !!}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                
                </div>
            </div>

            {{-- <div class="uk-container uk-container-medium uk-margin-medium uk-margin">
                <div class="uk-flex uk-flex-center uk-flex-middle">
                    <a class="uk-button uk-button-primary" href="{{url('/testimonial')}}">Lihat Selengkapnya &raquo;</a>
                </div>
            </div> --}}
        </div>
    </div>

    {{-- Section 6 : Section testimonial --}}
    <div class="uk-section uk-section-default">
        <div class="uk-container uk-background-default">
            <div class="uk-container">
                <h3 class="uk-text-center uk-text-bold"><span>Testimonial</span></h3>
                <div class="uk-divider-icon uk-margin-medium"></div>
                <div data-uk-slider="velocity: 0.5" class="uk-slider">

                    <div class="uk-position-relative">
                        <div class="uk-slider-container">
                            <ul class="uk-slider-items uk-child-width-1-2@m uk-grid uk-grid-medium news-slide" style="transform: translate3d(0px, 0px, 0px);">
                                @foreach ($testimonials as $testimoni)
                                <li tabindex="-1" class="uk-active" style="order: -1;">
                                    <div class="uk-card uk-card-default uk-card-body uk-card-small uk-flex uk-flex-middle uk-card-default uk-border-rounded">
                                        <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid="">
                                            <div class="uk-width-1-3@s uk-width-2-5@m uk-height-1-1 uk-first-column">
                                                <img src="{{asset('storage/'.$testimoni->image_testi)}}" alt="">
                                            </div>
                                            <div class="uk-width-2-3@s uk-width-3-5@m">
                                                <h3 class="uk-card-title uk-margin-small-top uk-margin-remove-bottom">
                                                <a class="uk-link-reset" href="#">{{$testimoni->nama_testi}}</a>
                                                </h3>
                                                <span class="uk-article-meta">Pada {{$testimoni->updated_at->format('d-m-Y h:m:s' )}}</span> 
                                                <p class="uk-margin-small">{!! substr($testimoni->deskripsi_testi,0,40) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="uk-hidden@l uk-light">
                            <a class="uk-position-center-left uk-position-small uk-icon uk-slidenav-previous uk-slidenav" href="#" data-uk-slidenav-previous="" data-uk-slider-item="previous"><svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-previous"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline></svg></a>
                            <a class="uk-position-center-right uk-position-small uk-icon uk-slidenav-next uk-slidenav" href="#" data-uk-slidenav-next="" data-uk-slider-item="next"><svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-next"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline></svg></a>
                        </div>
                        <div class="uk-visible@l">
                            <a class="uk-position-center-left-out uk-position-small uk-icon uk-slidenav-previous uk-slidenav" href="#" data-uk-slidenav-previous="" data-uk-slider-item="previous"><svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-previous"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline></svg></a>
                            <a class="uk-position-center-right-out uk-position-small uk-icon uk-slidenav-next uk-slidenav" href="#" data-uk-slidenav-next="" data-uk-slider-item="next"><svg width="14px" height="24px" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-next"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline></svg></a>
                        </div>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"><li uk-slider-item="0" class="uk-active"><a href=""></a></li><li uk-slider-item="1" class=""><a href=""></a></li><li uk-slider-item="2" class=""><a href=""></a></li><li uk-slider-item="3" class=""><a href=""></a></li></ul>
                </div>
            </div>

            <div class="uk-container uk-container-medium uk-margin-medium uk-margin">
                <div class="uk-flex uk-flex-center uk-flex-middle">
                    <a class="uk-button uk-button-primary" href="{{url('/testimonial')}}">Lihat Selengkapnya &raquo;</a>
                </div>
            </div>
        </div>
    </div>

{{-- @foreach ($profiles as $footer)
    <div class="uk-section uk-section-small uk-section-default">
        <div class="uk-container uk-container-small">
            <div class="uk-grid uk-child-width-1-4 uk-child-width-expand@m logos-grid" data-uk-grid="" data-uk-scrollspy="cls: uk-animation-scale-down; target: > div > img; delay: 200">
            <div class="uk-first-column">
                <img src="{{asset('storage/'.$footer->logo_bank_1)}}" data-uk-img="" alt="Image" class="uk-scrollspy-inview uk-animation-scale-down" style="">
            </div>

            <div>
                <img src="{{asset('images/frontend/undraw_ask_me_anything_k8o0.svg')}}" >
            </div>

            <div>
                <img src="{{asset('images/frontend/homepage-wave-bg.svg')}}" alt="">
            </div>

            <div>
                <img src="{{asset('storage/'.$footer->logo_bank_2)}}">
            </div>

            <div class="">
                @foreach ($profiles as $navbar)
                    <img src="{{asset('storage/'.$navbar->logo_usaha)}}" data-src="{{asset('storage/'.$navbar->logo_usaha)}}" data-uk-img="" alt="Image" class="uk-scrollspy-inview uk-animation-scale-down" style="">
                @endforeach
            </div>

            <div>
                <img src="{{asset('storage/'.$footer->logo_bank_2)}}" width="auto" height="auto">
            </div>
            <div class="">
                <img src="https://zzseba78.github.io/Kick-Off/img/logo-7.svg" data-src="img/logo-7.svg" data-uk-img="" alt="Image" class="uk-scrollspy-inview uk-animation-scale-down" style="">
            </div>
            <div class="">
                <img src="https://zzseba78.github.io/Kick-Off/img/logo-8.svg" data-src="img/logo-8.svg" data-uk-img="" alt="Image" class="uk-scrollspy-inview uk-animation-scale-down" style="">
            </div>
            <div class="">
                <img src="https://zzseba78.github.io/Kick-Off/img/logo-4.svg" data-src="img/logo-4.svg" data-uk-img="" alt="Image" class="uk-scrollspy-inview uk-animation-scale-down" style="">
            </div>
            <div class="">
                <img src="https://zzseba78.github.io/Kick-Off/img/logo-5.svg" data-src="img/logo-5.svg" data-uk-img="" alt="Image" class="uk-scrollspy-inview uk-animation-scale-down" style="">
            </div>
            
            </div>    
        </div>
    </div>
    @endforeach --}}

    {{-- <a href="#" uk-totop class="uk-icon-button uk-margin-small-right uk-icon uk-totop" uk-scroll></a> --}}

@endsection