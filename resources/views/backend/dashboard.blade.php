@extends('layouts.backend.main')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <a href="{{url('admin/produk')}}" class="d-block" style="text-decoration: none">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Produk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$produk}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-archive fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <a href="{{route('testimonial.index')}}" class="d-block" style="text-decoration: none">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Testimonial</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$testimoni}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-table fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <a href="{{route('resep.index')}}" class="d-block" style="text-decoration: none">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Resep</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$resep}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </a>
                </div>                    
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <a href="{{route('profile.index')}}" class="d-block" style="text-decoration: none">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Profile</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$profile}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <a href="{{url('admin/blog')}}" class="d-block" style="text-decoration: none">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Blog</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$blog}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-blog fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <a href="{{route('galeri.index')}}" class="d-block" style="text-decoration: none">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Galeri</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$galeri}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-image fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-light shadow h-100 py-2">
                <div class="card-body">
                    <a href="{{route('hubungi-kami.index')}}" class="d-block" style="text-decoration: none">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-gray-400 text-uppercase mb-1">Hubungi Kami</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$hubungikami}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </a>
                </div>                    
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        {{-- <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <a href="{{route('profile.index')}}" class="d-block" style="text-decoration: none">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Profile</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$profile}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Selamat Datang {{Auth::user()->username}}</h6>
                </div>
                <div class="card-body">
                Halo {{Auth::user()->username}} atau {{Auth::user()->name}}<br> 
                Anda sudah login sebagai {{Auth::user()->roles}} <br>
                Email Anda : <b>{{Auth::user()->email}}</b>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengunjung Web Per Hari</h6>
                </div>
                
                <div class="card-body">
                    <canvas id="chartDay"></canvas>
                    {{-- <hr> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengunjung Web Per Minggu</h6>
                </div>
                
                <div class="card-body">
                    <canvas id="chartWeek"></canvas>
                    {{-- <hr> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengunjung Web Per Bulan</h6>
                </div>
                
                <div class="card-body">
                    <canvas id="chartMonth"></canvas>
                    {{-- <hr> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            var ctxday = document.getElementById('chartDay').getContext('2d');
            var ctxweek = document.getElementById('chartWeek').getContext('2d');
            var ctxmonth = document.getElementById('chartMonth').getContext('2d');

            var chart = new Chart(ctxday, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: {
                    labels: ['Produk', 'Resep', 'Blog' ],
                    datasets: [{
                        label: 'Pengunjung Halaman Per Hari',
                        backgroundColor: 'rgba(78, 115, 223, 1)',
                        borderColor: 'rgba(78, 115, 223, 1)',
                        data: [ {{$VisitsDayProduk}} , {{$VisitsDayResep}} , {{$VisitsDayBlog}} ]
                    }]
                },

                // Configuration options go here
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            var chartweek = new Chart(ctxweek, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: {
                    labels: ['Produk', 'Resep', 'Blog' ],
                    datasets: [{
                        label: 'Pengunjung Halaman Per Minggu',
                        backgroundColor: 'rgba(78, 115, 223, 1)',
                        borderColor: 'rgba(78, 115, 223, 1)',
                        data: [ {{$VisitsWeekProduk}} , {{$VisitsWeekResep}} , {{$VisitsWeekBlog}} ]
                    }]
                },

                // Configuration options go here
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            stacked: true,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            var chartmonth = new Chart(ctxmonth, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: {
                    labels: ['Produk', 'Resep', 'Blog' ],
                    datasets: [{
                        label: 'Pengunjung Halaman Per Bulan',
                        backgroundColor: 'rgba(78, 115, 223, 1)',
                        borderColor: 'rgba(78, 115, 223, 1)',
                        // backgroundColor: [
                        //     'rgba(78, 115, 223, 1)',
                        //     'rgb(54, 185, 204)',
                        //     'rgb(231, 74, 59)',
                        //     'rgb(133, 135, 150)'
                        // ],
                        // borderColor: [
                        //     'rgba(78, 115, 223, 1)',
                        //     'rgb(54, 185, 204)',
                        //     'rgb(231, 74, 59)',
                        //     'rgb(133, 135, 150)'
                        // ],
                        data: [ {{$VisitsMonthProduk}} , {{$VisitsMonthResep}} , {{$VisitsMonthBlog}} ]
                    }]
                },

                // Configuration options go here
                options: {
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });
    </script>
@endsection