<!-- Footer -->
@foreach($navbar as $navbar)
<div id="our-services" class="py-5" style="background-color:#ffc02a">
    <div class="container">
        <div class="py-4">
            <div class="row">
                <div class="feature py-4 col-md-4 d-flex">
                    <div class="px-3">
                        <h5><b>{{$navbar->nama_usaha}}</b></h5>
                        <hr class="my-4">
                        <p>{!! $navbar->deskripsi_profile !!}</p>
                        <p>{{$navbar->alamat}}</p>
                    </div>
                </div>
                <div class="feature py-4 col-md-4 d-flex">
                    <div class="px-4">
                        <h5><b>Kontak Kami</b></h5>
                        <hr class="my-4">
                        <p><i class="fa fa-phone-square"></i> &nbsp; {{$navbar->nomor_hp}}</p>
                        <p><i class="fa fa-bank"></i> &nbsp; {{$navbar->nama_bank}}</p>
                        <p><i class="fa fa-id-card"></i> &nbsp; {{$navbar->nama_rekening}}</p>
                        <p><i class="fa fa-archive"></i> &nbsp; {{$navbar->nomor_rekening}}</p>
                    </div>
                </div>
                
                <div class="feature py-4 col-md-4 d-flex">
                    <div class="px-3">
                        <h5><b>Link Navigasi</b></h5>
                        <hr class="my-4">
                        <ul class="list-unstyled">
                            
                            <li>
                                <a href="{{url('produk')}}" style="text-decoration:none">Produk Kami</a>
                            </li>
                            <li>
                                <a href="{{url('profile')}}" style="text-decoration:none">Kontak Kami</a>
                            </li>
                            <li>
                                <a href="{{url('resep')}}" style="text-decoration:none">Resep</a>
                            </li>
                            <li>
                                <a href="{{url('testimonial')}}" style="text-decoration:none">Testimonial</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="footer-logo col-3">
                <img src="{{asset('storage/'.$navbar->logo_usaha)}}" height="50" alt="Logo Omah Pastry Text Aja">
            </div>

            <div class="footer-menu col-7">
                <ul class="footer-menu">
                    {{-- <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{url('profile')}}">Profile</a>
                    </li>
                    <li>
                        <a href="{{url('produk')}}">Produk</a>
                    </li>
                    <li>
                        <a href="{{url('')}}">Resep</a>
                    </li> --}}
                    <p>© Copyrights <script>document.write(new Date().getFullYear())</script> Omah Pastry</p>
                </ul>
            </div>

            <div class="footer-social col-2">
                <ul>
                    <li>
                        <a href="https://twitter.com/DesignRevision" class="footer-social-twitter" data-network="Twitter" data-action="view-profile" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/designrevision/" class="footer-social-facebook" data-network="Facebook" data-action="view-profile" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/hisk" class="footer-social-instagram" data-network="Instagram" data-action="view-profile" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endforeach