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
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        
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
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Profile & Resep
        </div>

        <!-- Nav Item - Profile Usaha -->
        <li class="nav-item">
            <a class="nav-link" href="{{route ('profile.index')}}">
                <i class="fas fa-fw fa-user"></i>
                <span>Profile Usaha</span></a>
            </li>
    
        <!-- Nav Item - Tables -->
        <li class="nav-item">
        <a class="nav-link" href="{{route ('resep.index')}}">
            <i class="fas fa-fw fa-blog"></i>
            <span>Resep</span></a>
        </li>

        <!-- Heading -->
        <div class="sidebar-heading">
        Produk & Testimonial
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
        <a class="nav-link" href="{{route ('produk.index')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Produk</span></a>
        </li>

        <!-- Nav Item - Tables -->
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