@foreach($profiles as $navbar)
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary mb-0">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('storage/'.$navbar->logo_usaha)}}" class="mr-2" height="40">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-1" aria-controls="navbarNavDropdown-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown-1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="{{ url ('/')}}">Beranda
                    <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('profile')}}">Kontak Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('produk')}}">Produk Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('resep')}}">Resep</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('testimonial')}}">Testimonial</a>
                </li>
            </ul>
        </div>
    </nav>
@endforeach