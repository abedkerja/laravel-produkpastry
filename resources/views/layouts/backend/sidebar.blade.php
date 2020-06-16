@if (Auth::check())
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        {{-- Auth::user()->roles == 'admin' --}}
        <!-- Sidebar - Brand -->
        {{-- <br> --}}
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route ('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Omah Pastry Admin</div>
        
            {{-- Hallo {{Auth::user()->username}}</div> --}}
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
        <a class="nav-link" href={{route ('admin')}}>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        {{-- <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Manage Thumbnail
        </div>

        <!-- Nav Item - Profile Usaha -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-settings"></i>
                <span>Manage Thumbnail</span>
            </a>
        </li> --}}

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Profile Omah Pastry
        </div>

        <!-- Nav Item - Profile Usaha -->
        <li class="nav-item">
            <a class="nav-link" href="{{route ('profile.index')}}">
                <i class="fas fa-fw fa-user"></i>
                <span>Profile Usaha</span>
            </a>
        </li>

        <!-- Heading -->
        <div class="sidebar-heading">
            Produk Omah Pastry
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
        <a class="nav-link" href="{{route ('produk.index')}}">
            <i class="fas fa-fw fa-archive"></i>
            <span>Produk</span></a>
        </li>
    
        <div class="sidebar-heading">
            Blog & Resep
        </div>

        <li class="nav-item">
        <a class="nav-link" href="{{route ('blog.index')}}">
            <i class="fas fa-fw fa-blog"></i>
            <span>Blog</span></a>
        </li>

        <!-- Nav Item - Resep -->
        <li class="nav-item">
        <a class="nav-link" href="{{route ('resep.index')}}">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Resep</span></a>
        </li>

        <div class="sidebar-heading">
            Galeri
        </div>

        <li class="nav-item">
        <a class="nav-link" href="{{route('galeri.index')}}">
            <i class="fas fa-fw fa-image"></i>
            <span>Galeri</span></a>
        </li>

        <div class="sidebar-heading">
            Hubungi Kami & Testimonial
        </div>

        {{-- <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubs" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-closed-captioning"></i>
            <span>Subtitle</span>
            </a>
            <div id="collapseSubs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
               <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Subtitle Menu:</h6>
                  <a class="collapse-item" href="/upload-subtitle">Upload Subtitle</a>
                  <a class="collapse-item" href="/subscene">Upload from Subscene</a>
                  <a class="collapse-item" href="/subtitle-manager">Subtitle Manager</a>
               </div>
            </div>
         </li> --}}

        <!-- Nav Item - Hubungi Kami -->
        <li class="nav-item">
            <a class="nav-link" href="{{route ('hubungi-kami.index')}}">
                <i class="fas fa-fw fa-phone"></i>
                <span>Hubungi Kami</span>
            </a>
        </li>

        <!-- Nav Item - Testimonial -->
        <li class="nav-item">
        <a class="nav-link" href="{{route ('testimonial.index')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Testimonial</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
@endif