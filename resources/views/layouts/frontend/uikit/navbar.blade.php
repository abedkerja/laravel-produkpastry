@foreach ($profiles as $navbar)
    {{-- Contoh Kedua --}}
    <div class="uk-section-default uk-preserve-color">
        {{-- <div class="uk-background-warning"> --}}
            <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-dark; top: 100">
                <nav class="uk-navbar-container">
                    <div class="uk-container uk-container-expand uk-background-warning">
                        <div uk-navbar>
                            <a class="uk-navbar-item uk-logo" href="{{url('/')}}">
                                <img src="{{asset('storage/'.$navbar->logo_usaha)}}" width="150px" height="150px">
                            </a>
                            
                            <div class="uk-navbar-right uk-visible@m">
                                {{-- <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#"></a> --}}
                                <ul class="uk-navbar-nav">
                                    <li class="uk-active"><a href="{{url('/')}}">Beranda</a></li>
                                    <li><a href="{{route('profile')}}">Profile Kami</a></li>
                                    <li><a href="{{route('produk')}}">Produk</a></li>
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                    <li><a href="{{route('resep')}}">Resep</a></li>
                                    <li><a href="{{route('galeri')}}">Galeri</a></li>
                                    <li><a href="{{route('testimonial')}}">Testimonial</a></li>
                                    <li><a href="{{route('hubungi-kami')}}">Hubungi Kami</a></li>
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
    
            <div class="uk-section uk-flex uk-flex-center uk-flex-middle">    
                <div class="uk-container uk-container-large uk-container-expand-right">
                    <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-child-width-1-2@l uk-grid" uk-grid="">
                        <div class="uk-first-column">
                            <p class="uk-text-lead" style="color: #000">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                            <p class="uk-text-lighter" style="color: #000">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                            <br>
                            <button class="uk-button uk-button-primary">
                                <a class="uk-link-reset" href="{{url('#')}}">Selengkapnya &raquo;</a>
                            </button>
                        </div>
                        <div class="uk-grid-item-match">
                            <div class="uk-container-item-padding-remove-right uk-flex uk-flex-center uk-flex-middle  uk-svg">
                                <a class="uk-display-block" href="#"><img src="images/frontend/undraw_cooking_lyxy.svg" alt="" style="height:400px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
    </div>

    {{-- Contoh Ketiga --}}
    {{-- <div class="uk-container uk-container-large uk-container-expand-right uk-margin-large">
    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-2@l uk-text-justify uk-grid" uk-grid="">
        <div class="uk-first-column">
            
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
    
        <div class="uk-grid-item-match">

            <div class="uk-container-item-padding-remove-right uk-background-default uk-flex uk-flex-center uk-flex-middle">
                <a class="uk-display-block" href="#"><img src="images/frontend/undraw_cooking_lyxy.svg" alt="" style="height:450px"></a>
            </div>

        </div>
    </div>
    </div> --}}
@endforeach
