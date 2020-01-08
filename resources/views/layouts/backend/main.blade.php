<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk Pastry Admin</title> <!-- Custom fonts for this template-->
    <link href="{{asset('js/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
    <!-- Custom styles for this template-->
    <link href="{{asset('css/backend/sb-admin-2.min.css')}}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
  
  </head>
  
  <body id="page-top">
  
    <!-- Page Wrapper -->
    <div id="wrapper">
  
      @include('layouts.backend.sidebar')
  
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column" @if(!Auth::check())  @endif>
        @if(Auth::check())
          @include('layouts.backend.topbar')
        @endif
        <!-- Main Content -->
        <div id="content">
        
          <!-- Begin Page Content -->
          <div class="container-fluid">
  
            <!-- Page Heading -->
            {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div> --}}

            {{-- @if (session('info'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding-right:30px;"><span aria-hidden="true">&times;</span></button>
                    {{ session('info') }}
                </div>
            @endif --}}
              <!-- Content Row -->
              {{-- <div class="row"> --}}
                @yield('content')
              {{-- </div> --}}
            </div>
          </div>
          @include('layouts.backend.footer')
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
  
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('js/backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
    <!-- Core plugin JavaScript-->
    <script src="{{asset('js/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  
    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/backend/sb-admin-2.min.js')}}"></script>
  
    <!-- Page level plugins -->
    <script src="{{asset('js/backend/vendor/chart.js/Chart.min.js')}}"></script>
  
    <!-- Page level custom scripts -->
    <script src="{{asset('js/backend/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/backend/demo/chart-pie-demo.js')}}"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
  
  </body>
  
  </html>
  