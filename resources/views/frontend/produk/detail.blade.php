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

    <div class="uk-height-large uk-background-cover uk-flex uk-flex-center uk-flex-middle uk-light" 
            data-src="https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200" 
            data-srcset="https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200,
                        https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200,
                        https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200" 
            sizes="(min-width: 1200px) 1200px, 100vw" uk-img="" 
            style="background-image: url(https://defaultcustomheadersdata.files.wordpress.com/2016/07/food.jpg?resize=2000,1200);">
        <div class="uk-h2 uk-text-bolder uk-text-center">{{$title}}</div>
    </div>

    <div class="uk-margin-medium uk-margin-large-bottom uk-margin">
        <div class="uk-container">
            {{-- uk-lightbox="animation: scale; target: img; delay: 100; repeat: true" --}}
            <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-child-width-1-2@l uk-text-justify uk-grid" uk-grid>
                @foreach ($produkdetail as $produkdetail)
                <div class="uk-grid-item-match uk-first-column">
                    <div class="uk-background-default uk-flex uk-flex-center uk-flex-middle">
                        <a class="uk-inline uk-panel uk-link-muted uk-text-center" style="text-decoration:none" href="{{asset('storage/'.$produkdetail->image)}}" data-caption="{{$produkdetail->nama_produk}}">
                            <img src="{{asset('storage/'.$produkdetail->image)}}" alt="{{$produkdetail->nama_produk}}" width="800px" height="500px">
                        </a>
                    </div>
                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-3@l uk-margin-medium uk-grid" uk-grid="">
                        <div class="uk-grid-item-match uk-first-column">
                            <img src="{{asset('storage/'.$produkdetail->image)}}" alt="{{$produkdetail->nama_produk}}" width="30px" height="30px">
                        </div>
                        <div class="uk-grid-item-match">
                            <img src="{{asset('storage/'.$produkdetail->image)}}" alt="{{$produkdetail->nama_produk}}" width="30px" height="30px">
                        </div>
                        <div class="uk-grid-item-match">
                            <img src="{{asset('storage/'.$produkdetail->image)}}" alt="{{$produkdetail->nama_produk}}" width="30px" height="30px">
                        </div>
                    </div>
                </div>

                <div>
                        <h3 class="uk-text-bolder">{{$produkdetail->nama_produk}} </h3>
                        <span class="uk-text-top uk-text-light uk-text-muted">
                            <span uk-icon="icon: star; ratio: 1"></span>
                            {{-- <span class="uk-icon uk-icon-image" style="background-image: url('https://cdn3.iconfinder.com/data/icons/flat-actions-icons-9/792/Star_Gold_Dark-512.png');"></span> --}}
                            &nbsp;  
                            @foreach ($produkvisits as $item)
                                <span class="uk-text-bold"> {{ visits($item)->count() }}x</span> Dilihat </span>
                            @endforeach

                        <hr>

                        <div class="uk-text" uk-grid>
                            <div class="uk-width-1-4">
                                <span class="uk-text-top uk-text-small uk-text-bold uk-text-muted uk-text-uppercase">Harga</span> 
                            </div>
                            <div class="uk-width-3-4">
                                <span class="uk-text-bolder uk-h2 uk-text-warning"> Rp. {{$produkdetail->harga}} </span>
                            </div>
                        </div>

                        <hr>

                        <div class="uk-text" uk-grid>
                            <div class="uk-width-1-4">
                                <span class="uk-text-top uk-text-small uk-text-bold uk-text-muted uk-text-uppercase">Jumlah</span> 
                            </div>
                            <div class="uk-width-3-4">
                                <span class="uk-text-large uk-text-light uk-text-muted"> Stok Tersedia </span>
                            </div>
                        </div>

                        <hr>

                        <div class="uk-text" uk-grid>
                            <div class="uk-width-1-4">
                                <span class="uk-text-top uk-text-small uk-text-bold uk-text-muted uk-text-uppercase">Info Produk</span> 
                            </div>
                            
                            <div class="uk-width-3-4 uk-grid-small" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-first-column">
                                        <span class="uk-text-small uk-text-bold uk-text-light uk-text-muted"> Berat </span>
                                    </div>
                                    <div>
                                        <span class="uk-text-large uk-text-light uk-text-muted"> 500 gr </span>
                                    </div>
                                    <div></div>
                                </div>

                                <div class="uk-divider-vertical" style="margin-left:20px;"></div>

                                <div class="uk-width-auto">
                                    <div class="uk-first-column">
                                        <span class="uk-text-small uk-text-bold uk-text-light uk-text-muted"> Kondisi </span>
                                    </div>
                                    <div>
                                        <span class="uk-text-large uk-text-light uk-text-muted"> Baru </span>
                                    </div>
                                </div>

                                <div class="uk-divider-vertical" style="margin-left:25px;"></div>

                                <div class="uk-width-auto">
                                    <div class="uk-first-column">
                                        <span class="uk-text-small uk-text-bold uk-text-light uk-text-muted"> Status </span>
                                    </div>
                                    <div>
                                        <span class="uk-text-large uk-text-light uk-text-muted"> Pre-Order </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="uk-text" uk-grid>
                            <div class="uk-width-1-4">
                                <span class="uk-text-top uk-text-small uk-text-bold uk-text-muted uk-text-uppercase">Bagikan</span> 
                            </div>
                            
                            <div class="uk-width-3-4 uk-grid-small" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-first-column">
                                        <span class="uk-text-small uk-text-bold uk-text-light uk-text-muted"> WhatsApp </span>
                                    </div>
                                    <div>
                                        <a href="https://web.whatsapp.com/send?text=Bagikan%20Link%20Ini {{$produkdetail->nama_produk}} {{url('produk', $produkdetail->slug_produk)}}" target="_blank" class="uk-icon-link uk-margin-small-top" uk-icon="icon: whatsapp; ratio: 3.5"></a>
                                        {{-- <a href="https://web.whatsapp.com/send?text={{url('produk', $produkdetail->id)}}" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp">WA</a> --}}
                                    </div>
                                </div>

                                <div class="uk-divider-vertical" style="margin-left:20px;"></div>

                                <div class="uk-width-auto">
                                    <div class="uk-first-column">
                                        <span class="uk-text-small uk-text-bold uk-text-light uk-text-muted"> Facebook </span>
                                    </div>
                                    <div>
                                        {{-- <a href="whatsapp://send?text=Hello%20World!">Hello, world!</a> --}}
                                        {{-- <a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share">Share via Whatsapp</a> --}}
                                        <a href="whatsapp://send?text={{url('produk')}}" target="_blank" class="uk-icon-link uk-margin-small-top" uk-icon="icon: facebook; ratio: 3.5"></a>
                                    </div>
                                </div>

                                <div class="uk-divider-vertical" style="margin-left:20px;"></div>

                                <div class="uk-width-auto">
                                    <div class="uk-first-column">
                                        <span class="uk-text-small uk-text-bold uk-text-light uk-text-muted"> Instagram </span>
                                    </div>
                                    <div>
                                        <a href="" class="uk-icon-link uk-margin-small-top" uk-icon="icon: instagram; ratio: 3.5"></a>
                                        {{-- <a class="uk-icon-link uk-icon uk-link-reset" data-uk-tooltip="title: Selengkapnya" data-uk-icon="icon: chevron-right; ratio: 0.8" href={{url('produk', $produkdetail->id)}}>Selengkapnya</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Tampilan TAB --}}
                <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@s uk-margin-large uk-grid" uk-grid="">
                    <div class="uk-first-column">
                        <span class="uk-text-bolder uk-h3 uk-text-secondary">Keterangan Tambahan</span>

                        <ul uk-tab class="uk-margin-medium-top">
                            <li class="uk-active"><a href="#">Deskripsi Produk</a></li>
                            <li><a href="#">Produk Serupa</a></li>
                            {{-- <li><a href="#">Item</a></li> --}}
                        </ul>

                        <ul class="uk-switcher uk-margin">
                            <li>
                                {!! $produkdetail->description !!}
                            </li>
                            <li>
                                {{-- <div class="uk-margin-small uk-margin-large-bottom uk-margin">
                                    <div class="uk-container">
                                        <div class="uk-width-1-4@m uk-grid-stack" uk-grid>
                                            
                                                @foreach ($produklain as $item)
                                                <div class="uk-first-column">

                                                <div class="uk-card uk-card-default uk-card-hover">
                                                    <div class="uk-card-media-top">
                                                        <img src="{{asset('storage/'.$item->image)}}" alt="">
                                                    </div>
                                                    <div class="uk-card-body">
                                                        <article class="uk-article">
                                                            <h6 class="uk-article-title">
                                                                <a class="uk-link-reset" href="">{{ $item->nama_produk }}</a>
                                                            </h6>
                                                            <p class="uk-article-meta">Oleh <a href="#">{{ $item->created_by }}</a> pada {{$item->created_at->format('d-m-Y h:m:s')}} </p>
                                                            <span class="uk-text-lighter" style="color: #000;">
                                                                {!! $item->description !!}
                                                            </span>
                                                            <br><hr>
                                                            <div class="uk-grid-small uk-grid" uk-grid="">
                                                                <div class="uk-first-column">
                                                                    <a class="uk-button uk-button-text" href="{{url('resep', $item->id)}}"><strong>Selengkapnya</strong></a>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                                </div>
                                                @endforeach
                                            
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="uk-margin-small uk-margin-large-bottom uk-margin">
                                    <div class="uk-container">
                                        <div class="uk-child-width-1-4@m uk-grid" uk-grid="">
                                            @foreach($produklain as $item)
                                            <div class="uk-first-column">
                                                
                                                <div class="uk-card uk-card-small uk-card-default">
                                                    <div class="uk-card-header">
                                                        <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid="">
                                                            <div class="uk-width-expand uk-first-column">
                                                                <span class="cat-txt">{{$item->nama_produk}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-card-media-top">
                                                        <img src="{{asset('storage/'.$item->image)}}" alt="" style="height: 152px; width: 270px">
                                                    </div>
                                                    <div class="uk-card-body">
                                                        <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold uk-text-uppercase">{{$item->nama_produk}}</h6>
                                                        <p class="uk-text-small uk-text-muted">{!! $item->description !!}</p>
                                                    </div>
                                                    <div class="uk-card-footer">
                                                        <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid="">
                                                            <div class="uk-width-expand uk-text-small uk-first-column">
                                                                <a class="uk-icon-link uk-icon uk-link-reset" data-uk-tooltip="title: Selengkapnya" data-uk-icon="icon: chevron-right; ratio: 0.8" href={{url('produk', $item->id)}}>Selengkapnya</a>
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
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection