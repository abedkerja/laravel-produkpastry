@extends('layouts.frontend.uikit.isian')

@foreach ($profiles as $navbar)
    <div class="uk-section-default uk-preserve-color">
            <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-dark; top: 100">
                <nav class="uk-navbar-container">
                    <div class="uk-container uk-container-expand uk-background-warning">
                        <div uk-navbar>
                            <a class="uk-navbar-item uk-logo" href="{{url('/')}}">
                                <img src="{{asset('storage/'.$navbar->logo_usaha)}}" width="150px" height="150px">
                            </a>
                            
                            <div class="uk-navbar-right uk-visible@m">
                                <ul class="uk-navbar-nav">
                                    <li><a href="{{url('/')}}">Beranda</a></li>

                                    <li class="uk-active">
                                        <a href="{{route('profile')}}">Profile Kami</a>
                                    </li>

                                    <li><a href="{{route('produk')}}">Produk</a></li>
                                    {{-- <li><a href="{{route('blog')}}">Blog</a></li> --}}
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
                                        {{-- <li><a href="{{route('blog')}}">Blog</a></li> --}}
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

    <div class="uk-section uk-section-medium">
        <div class="uk-container uk-container-small">
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

    <div class="uk-margin-small uk-margin-large-bottom uk-margin">
        <div class="uk-container">
            <div class="uk-child-width-1-4@m uk-grid" uk-grid="">
                <div class="uk-first-column">

                    <div class="uk-card uk-card-small uk-card-default">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid="">
                                <div class="uk-width-expand uk-first-column">
                                    <span class="cat-txt">Produk Kami</span>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-media-top">
                            <img src="https://picsum.photos/400/300/?random=3" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold uk-text-uppercase">Produk Kami</h6>
                            <p class="uk-text-small uk-text-muted">Kami menjual produk berupa adonan kulit pastry</p>
                        </div>
                        <div class="uk-card-footer">
                            <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid="">
                                <div class="uk-width-expand uk-text-small uk-first-column">
                                    <a class="uk-icon-link uk-icon uk-link-reset" data-uk-tooltip="title: Selengkapnya" data-uk-icon="icon: chevron-right; ratio: 0.8" href={{route('produk')}}>Selengkapnya</a>
                                </div>
                                <div class="uk-width-auto uk-text-right">
                                    {{-- <a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link uk-icon" data-uk-icon="icon:twitter; ratio: 0.8" title="" aria-expanded="false"></a> --}}
                                    <a href="https://www.instagram.com/omah_pastry.id/" target='_blank' data-uk-tooltip="title: Instagram" class="uk-icon-link uk-icon" data-uk-icon="icon:instagram; ratio: 0.8" title="" aria-expanded="false"></a>
                                    <a href="https://bit.ly/3bFoNT1" target="_blank" data-uk-tooltip="title: Whatsapp" class="uk-icon-link uk-icon" data-uk-icon="icon:whatsapp; ratio: 0.8" title="" aria-expanded="false"></a>
                                    <a href="https://www.facebook.com/Omah-Pastry-1410708402353240/" target='_blank' data-uk-tooltip="title: Facebook" class="uk-icon-link uk-icon" data-uk-icon="icon:facebook; ratio: 0.8" title="" aria-expanded="false"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="uk-card uk-card-small uk-card-default">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid="">
                                <div class="uk-width-expand uk-first-column">
                                    <span class="cat-txt">Galeri Foto</span>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-media-top">
                            <img src="https://picsum.photos/400/300/?random=2" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold uk-text-uppercase">Galeri Foto</h6>
                            <p class="uk-text-small uk-text-muted">Galeri Foto Kami bisa dilihat dengan menekan tombol selengkapnya</p>
                        </div>
                        <div class="uk-card-footer">
                            <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid="">
                                <div class="uk-width-expand uk-text-small uk-first-column">
                                    <a class="uk-icon-link uk-icon uk-link-reset" data-uk-tooltip="title: Selengkapnya" data-uk-icon="icon: chevron-right; ratio: 0.8" href="{{route('galeri')}}">Selengkapnya</a>
                                </div>
                                <div class="uk-width-auto uk-text-right">
                                    {{-- <a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link uk-icon" data-uk-icon="icon:twitter; ratio: 0.8" title="" aria-expanded="false"></a> --}}
                                    <a href="https://www.instagram.com/omah_pastry.id/" target='_blank' data-uk-tooltip="title: Instagram" class="uk-icon-link uk-icon" data-uk-icon="icon:instagram; ratio: 0.8" title="" aria-expanded="false"></a>
                                    <a href="https://bit.ly/3bFoNT1" target="_blank" data-uk-tooltip="title: Whatsapp" class="uk-icon-link uk-icon" data-uk-icon="icon:whatsapp; ratio: 0.8" title="" aria-expanded="false"></a>
                                    <a href="https://www.facebook.com/Omah-Pastry-1410708402353240/" target='_blank' data-uk-tooltip="title: Facebook" class="uk-icon-link uk-icon" data-uk-icon="icon:facebook; ratio: 0.8" title="" aria-expanded="false"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="">

                    <div class="uk-card uk-card-small uk-card-default">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid="">
                                <div class="uk-width-expand uk-first-column">
                                    <span class="cat-txt">Testimonial</span>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-media-top">
                            <img src="https://picsum.photos/400/300/?random=5" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold uk-text-uppercase">Testimonial</h6>
                            <p class="uk-text-small uk-text-muted">Testimonial dari para pelanggan kami</p>
                        </div>
                        <div class="uk-card-footer">
                            <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid="">
                                <div class="uk-width-expand uk-text-small uk-first-column">
                                    <a class="uk-icon-link uk-icon uk-link-reset" data-uk-tooltip="title: Selengkapnya" data-uk-icon="icon: chevron-right; ratio: 0.8" href="{{url('testimonial')}}">Selengkapnya</a>
                                </div>
                                <div class="uk-width-auto uk-text-right">
                                    {{-- <a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link uk-icon" data-uk-icon="icon:twitter; ratio: 0.8" title="" aria-expanded="false"></a> --}}
                                    <a href="https://www.instagram.com/omah_pastry.id/" target='_blank' data-uk-tooltip="title: Instagram" class="uk-icon-link uk-icon" data-uk-icon="icon:instagram; ratio: 0.8" title="" aria-expanded="false"></a>
                                    <a href="https://bit.ly/3bFoNT1" target="_blank" data-uk-tooltip="title: Whatsapp" class="uk-icon-link uk-icon" data-uk-icon="icon:whatsapp; ratio: 0.8" title="" aria-expanded="false"></a>
                                    <a href="https://www.facebook.com/Omah-Pastry-1410708402353240/" target='_blank' data-uk-tooltip="title: Facebook" class="uk-icon-link uk-icon" data-uk-icon="icon:facebook; ratio: 0.8" title="" aria-expanded="false"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="">

                    <div class="uk-card uk-card-small uk-card-default">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid="">
                                <div class="uk-width-expand uk-first-column">
                                    <span class="cat-txt">Hubungi Kami</span>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-media-top">
                            <img src="https://picsum.photos/400/300/?random=8" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold uk-text-uppercase">Hubungi Kami</h6>
                            <p class="uk-text-small uk-text-muted">Punya kritik, saran dan pertanyaan? Silakan hubungi kami...</p>
                        </div>
                        <div class="uk-card-footer">
                            <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid="">
                                <div class="uk-width-expand uk-text-small uk-first-column">
                                    <a class="uk-icon-link uk-icon uk-link-reset" data-uk-tooltip="title: Selengkapnya" data-uk-icon="icon: chevron-right; ratio: 0.8" href="{{url('hubungi-kami')}}">Selengkapnya</a>
                                </div>
                                <div class="uk-width-auto uk-text-right">
                                    {{-- <a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link uk-icon" data-uk-icon="icon:twitter; ratio: 0.8" title="" aria-expanded="false"></a> --}}
                                    <a href="https://www.instagram.com/omah_pastry.id/" target='_blank' data-uk-tooltip="title: Instagram" class="uk-icon-link uk-icon" data-uk-icon="icon:instagram; ratio: 0.8" title="" aria-expanded="false"></a>
                                    <a href="https://bit.ly/3bFoNT1" target="_blank" data-uk-tooltip="title: Whatsapp" class="uk-icon-link uk-icon" data-uk-icon="icon:whatsapp; ratio: 0.8" title="" aria-expanded="false"></a>
                                    <a href="https://www.facebook.com/Omah-Pastry-1410708402353240/" target='_blank' data-uk-tooltip="title: Facebook" class="uk-icon-link uk-icon" data-uk-icon="icon:facebook; ratio: 0.8" title="" aria-expanded="false"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection