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

                                    {{-- <li><a href="{{route('blog')}}">Blog</a></li> --}}

                                    <li><a href="{{route('resep')}}">Resep</a></li>

                                    <li><a href="{{route('galeri')}}">Galeri</a></li>

                                    <li><a href="{{route('testimonial')}}">Testimonial</a></li>

                                    <li class="uk-active">
                                        <a href="{{url('hubungi-kami')}}">Hubungi Kami</a>
                                    </li>

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

    <div class="uk-margin-large uk-margin-large-bottom uk-margin">
        <div class="uk-container">
            {{-- <div class="uk-h2 uk-text-bolder uk-text-center">{{$title}}</div> --}}

            <div class="uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-1@l uk-text-justify uk-grid" uk-grid>
                <div class="uk-grid-item-match uk-first-column">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.836512982094!2d110.39228892799034!3d-7.807125587801444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57df0c411c71%3A0x3927b9e054d816d8!2sOmah%20pastry%20(puff%20pastry%20frozen)!5e0!3m2!1sid!2sid!4v1589198398918!5m2!1sid!2sid" 
                    width="100%" 
                    height="500px" 
                    frameborder="0" 
                    style="border:0;" 
                    allowfullscreen="" 
                    aria-hidden="false" 
                    tabindex="0">
                </iframe>
                </div>
            </div>

            <div class="uk-margin-medium uk-margin">
                <div class="uk-container">
                    <div class="uk-child-width-1-3@m uk-grid" uk-grid="">
                        @foreach ($profiles as $profile)
                        <div class="uk-first-column">
                            <div class="uk-card uk-card-small uk-card-default">
                                <div class="uk-card-header">
                                    <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid="">
                                        <div class="uk-width-expand uk-first-column">
                                            <span class="cat-txt">{{$title}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-media-top">
                                    <img src="https://mbitelecom.co.id/wp-content/uploads/2020/01/hubungi-kami-ppob-mbi-telecom-1024x773.png" alt="">
                                </div>
                                <div class="uk-card-body">
                                    <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold uk-text-uppercase">Hubungi Kami</h6>
                                    <p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
                                </div>
                                <div class="uk-card-footer">
                                    <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid="">
                                        <div class="uk-width-expand uk-text-small uk-first-column">
                                            <a class="uk-icon-link uk-icon" data-uk-tooltip="title: Selengkapnya" data-uk-icon="icon: chevron-right; ratio: 0.8" href="#">Selengkapnya</a>
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
                                            <span class="cat-txt">Lokasi Kami</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-media-top">
                                    <img src="https://kedaikayumanis.com/v2019/wp-content/uploads/2019/01/lokasi-kedai-kayumanis-matraman-jakarta-300x300.png" alt="">
                                </div>
                                <div class="uk-card-body">
                                    <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold uk-text-uppercase">Alamat Kami</h6>
                                    <p class="uk-text-small uk-text-muted">
                                        {!!$profile->alamat!!} <br>
                                        {{-- UH II Yogyakarta 55165 --}}
                                    </p>
                                    {{-- <span class="uk-text-muted"></span> --}}
                                </div>
                                <div class="uk-card-footer">
                                    <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid="">
                                        <div class="uk-width-expand uk-text-small uk-first-column">
                                            <a class="uk-icon-link uk-icon" data-uk-tooltip="title: Selengkapnya" data-uk-icon="icon: chevron-right; ratio: 0.8" href="#">Selengkapnya</a>
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
                                            <span class="cat-txt">Ikuti Kami</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-media-top">
                                    <img src="https://gosocial.co.id/assets/landing/image/service_sme_header.png" alt="">
                                </div>
                                <div class="uk-card-body">
                                    <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold uk-text-uppercase">Ikuti Media Sosial Kami</h6>
                                    <p class="uk-text-small uk-text-muted">Duis aute irure dolor in reprehenderit in voluptate velit</p>
                                </div>
                                <div class="uk-card-footer">
                                    <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid="">
                                        <div class="uk-width-expand uk-text-small uk-first-column">
                                            <a class="uk-icon-link uk-icon" data-uk-tooltip="title: Selengkapnya" data-uk-icon="icon: chevron-right; ratio: 0.8" href="#">Selengkapnya</a>
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

            <div class="uk-margin-medium uk-margin">
            <div class="uk-h2 uk-text-bolder uk-text-center uk-margin-medium-bottom">Hubungi Kami Disini</div>
            
            <div class="uk-child-width-1-3@s uk-child-width-1-3@m uk-child-width-1-1@l uk-grid-match uk-grid" uk-grid="">
            
                    <div class="uk-first-column">

                        @if(session('message'))
                            <div class="uk-alert-success" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                {{session('message')}}
                            </div>

                        @elseif(session('errors'))                            
                            <div class="uk-alert-danger" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                {{session('errors')}}
                            </div>
                        @endif
                        
                        <form 
                            class="uk-form-stacked uk-margin-small"
                            enctype="multipart/form-data"
                            {{-- id="hubungikami-form" --}}
                            action="{{route('hubungi-kami.simpan')}}"
                            method="POST">

                            @csrf

                            <div class="uk-margin">
                                <label class="uk-form-label uk-text-bold" style="font-size: 1.00rem" for="form-stacked-text">Nama</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-width-3-4" 
                                        id="form-stacked-text" 
                                        type="text"
                                        value="{{old('nama')}}" 
                                        name="nama" 
                                        placeholder="Isikan Nama Anda">
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label uk-text-bold" style="font-size: 1.00rem" for="form-stacked-text">Alamat</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-width-3-4" 
                                        id="form-stacked-text" 
                                        type="text"
                                        value="{{old('alamat')}}" 
                                        name="alamat" 
                                        placeholder="Isikan Alamat Anda">
                                    {{-- <span id="helpBlock2" class="help-block">{{$errors->first('alamat')}}</span> --}}
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label uk-text-bold" style="font-size: 1.00rem" for="form-stacked-text">Nomor Telepon</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-width-3-4" 
                                        id="form-stacked-text" 
                                        type="text"
                                        value="{{old('nomor_hp')}}" 
                                        name="nomor_hp" 
                                        placeholder="Isikan Nomor Yang Dapat Hubungi">
                                    {{-- <span id="helpBlock2" class="help-block">{{$errors->first('nomor_hp')}}</span> --}}
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label uk-text-bold" style="font-size: 1.00rem" for="form-stacked-text">Email</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-width-3-4"  
                                        id="form-stacked-text" 
                                        type="text"
                                        value="{{old('email')}}" 
                                        name="email"  
                                        placeholder="name@domain.com">
                                    {{-- <span id="helpBlock2" class="help-block">{{$errors->first('email')}}</span> --}}
                                </div>
                            </div>

                            <div class="uk-margin">
                                <label class="uk-form-label uk-text-bold" style="font-size: 1.00rem" for="form-s-textarea">Pertanyaan</label>
                                    <textarea class="uk-textarea uk-width-3-4" id="form-s-textarea" type="textarea" value="{{old('isi_pertanyaan')}}" rows="10" name='isi_pertanyaan' placeholder="Isikan Pertanyaan Anda..."></textarea>
                                    {{-- <span id="helpBlock2" class="help-block">{{$errors->first('isi_pertanyaan')}}</span> --}}
                                {{-- </div> --}}
                            </div>

                            <div class="uk-margin-medium">
                            <label class="uk-form-label" for="form-horizontal-text"></label>
                            <div class="uk-form-controls">
                                <div class="uk-container uk-container-medium uk-margin-medium uk-margin">
                                    {{-- <button class="g-recaptcha uk-button" 
                                            data-sitekey="6Lfmj_4UAAAAAM96wbA2sLrGl0xict2ScOZmm51v" 
                                            data-callback='onSubmit' 
                                            data-action='submit'>Kirim
                                    </button> --}}

                                    <button 
                                        class="uk-button uk-button-primary" 
                                        type="submit">Kirim
                                    </button>
                                </div>
                            </div>
        
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection