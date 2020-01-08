<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Produk Pastry Admin</title> 

        <!-- Custom fonts for this template-->
        <link href="css/backend/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{asset('css/backend/sb-admin-2.min.css')}}" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

    </head>

    <body class="bg-gradient-primary">

        <div class="container">
    
        <!-- Outer Row -->
        <div class="row justify-content-center">
    
            <div class="col-xl-10 col-lg-12 col-md-9">
    
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Login Admin - Omah Pastry</h1>
                        </div>
                        <br>
                        <form method="POST" action="{{ url('/admin/login') }}" aria-label="{{ __('Login') }}" class="user">
                            @csrf

                            <div class="form-group">
                                <input type="email" class="form-control form-control-user {{ $errors->has('email') ? 'is-invalid' : ''}}" 
                                id="exampleInputEmail" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" 
                                placeholder="Enter Email Address..." required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-user {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="password" id="exampleInputPassword" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block btn-user btn-primary">
                                {{ __('Login') }}
                            </button>

                            <hr>

                            <a href="{{ url('/') }}" class="btn btn-facebook btn-user btn-block">
                                Front End
                            </a>
                            <br>
                            <br>
                        </form>
                        
                    </div>
                    </div>
                </div>
                </div>
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

    </body>
</html>
