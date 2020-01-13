@extends('layouts.frontend.main')

@section('content')
    <div id="our-services" class="our-services section-invert py-5">
        <h3 class="section-title text-center my-3">Omah Pastry</h3>
        <!-- Features -->
        <div class="features py-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="feature py-4 col-md-6 d-flex">
                    <div class="icon text-warning mr-3"><i class="fa fa-paint-brush"></i></div>
                    <div class="px-4">
                        <h5>Profile</h5>
                        <p>Quisque mollis mi ac aliquet accumsan. Sed sed dapibus libero. Nullam luctus purus duis sensibus signiferumque.</p>
                        <a class="btn btn-warning btn-sm" href="#">Read More &rarr;</a>
                    </div>
                </div>
                <div class="feature py-4 col-md-6 d-flex">
                    <div class="icon text-warning mr-3"><i class="fa fa-code"></i></div>
                    <div class="px-4">
                        <h5>Produk Kami</h5>
                        <p>Quisque mollis mi ac aliquet accumsan. Sed sed dapibus libero. Nullam luctus purus duis sensibus signiferumque.</p>
                        <a class="btn btn-warning btn-sm" href="#">Read More &rarr;</a>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-warning mr-3"><i class="fa fa-font"></i></div>
                <div class="px-4">
                    <h5>Blog</h5>
                    <p>Quisque mollis mi ac aliquet accumsan. Sed sed dapibus libero. Nullam luctus purus duis sensibus signiferumque.</p>
                    <a class="btn btn-warning btn-sm" href="#">Read More &rarr;</a>
                </div>
            </div>
            <div class="feature py-4 col-md-6 d-flex">
                <div class="icon text-warning mr-3"><i class="fa fa-support"></i></div>
                <div class="px-4">
                    <h5>Resep</h5>
                    <p>Quisque mollis mi ac aliquet accumsan. Sed sed dapibus libero. Nullam luctus purus duis sensibus signiferumque.</p>
                    <a class="btn btn-warning btn-sm" href="#">Read More &rarr;</a>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- / Features -->
    </div>

    <!-- Our Blog Section -->
    <div class="blog section section py-4">
        <h3 class="section-title text-center m-5">Daftar Produk Kami</h3>

        <div class="container">
            <div class="py-4">
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        @foreach($produks as $produk)
                        <div class="item">
                            <div class="card-deck">
                                <div class="col-sm-4 col-md-8 col-lg-12">
                                    <div class="card mb-4">
                                        <img class="card-img-top" src="{{asset('storage/'.$produk->image)}}" style="max-height:200px;max-width:100%;margin-top:0px;">
                                        <div class="card-body">
                                            <h4 class="category text-info">{{$produk->nama_produk}}</h4>
                                            <h6 class="card-title text-warning">Rp. {{$produk->harga}},-</h6>
                                            <p class="card-text">{!! substr($produk->description, 0, 180) !!} </p>
                                        </div>
                                        <div class="card-footer">
                                            <a class="btn btn-outline-warning btn-pill" href="#">Read More &rarr;</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Our Blog Section -->

    <!-- Testimonials Section -->
    <div class="testimonials section-invert py-4">
        <h3 class="section-title text-center m-5">Testimonials</h3>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4 testimonial text-center">
                    <div class="avatar rounded-circle with-shadows mb-3 ml-auto mr-auto">
                        <img src="#" class="w-100" alt="Testimonial Avatar" />
                    </div>
                    <h5 class="mb-1">Osbourne Tranter</h5>
                    <span class="text-muted d-block mb-2">CEO at Megacorp</span>
                    <p>Vivamus quis ex mattis, gravida erat a, iaculis urna. Proin ac eleifend tortor. Nunc in augue eget enim venenatis viverra.</p>
                </div>

                <div class="col-md-4 testimonial text-center">
                    <div class="avatar rounded-circle with-shadows mb-3 ml-auto mr-auto">
                        <img src="#" class="w-100" alt="Testimonial Avatar" />
                    </div>
                    <h5 class="mb-1">Darrin Ollie</h5>
                    <span class="text-muted d-block mb-2">CEO at Megacorp</span>
                    <p>Nullam eu ligula facilisis, commodo velit non, vulputate dolor. Aenean congue euismod vestibulum.</p>
                </div>

                <div class="col-md-4 testimonial text-center">
                    <div class="avatar rounded-circle with-shadows mb-3 ml-auto mr-auto">
                        <img src="#" class="w-100" alt="Testimonial Avatar" />
                    </div>
                    <h5 class="mb-1">Quinton Bruce</h5>
                    <span class="text-muted d-block mb-2">CEO at Megacorp</span>
                    <p> Aenean imperdiet ultrices tortor id convallis. Donec id metus magna. Morbi pretium odio faucibus blandit gravida.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- / Testimonials Section -->
@endsection