<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Omah Pastry</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.1/dist/css/uikit.min.css" /> --}}
        <link href="{{asset('css/frontend/uikit/uikit.pastrytheme.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/frontend/uikit/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('css/frontend/uikit/marketing.css')}}">
        {{-- <link rel="stylesheet" href="https://zzseba78.github.io/Kick-Off/css/cards.css"> --}}
    </head>
    <body>
        
        {{-- @include('layouts.frontend.uikit.navbar_isi') --}}
        
            @yield('content')

        @include('layouts.frontend.uikit.footer')

        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script src="{{asset('js/frontend/uikit/uikit.min.js')}}"></script>
        <script src="{{asset('js/frontend/uikit/uikit-icons.min.js')}}"></script>

        {!! htmlScriptTagJsApiV3([
            'action' => 'homepage'
        ]) !!}

        <script>
            function onClick(e) {
                e.preventDefault();
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LfIlKMZAAAAADyM16yzcglpu2SetkxKxQ8e8eaF', {action: 'submit'}).then(function(token) {
                        // Coba coba aja
                        // alert
                    });
                });
            }
        </script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit.min.js" 
                integrity="sha256-v789mr/zBbgR53mfydCI78CSAF+9+nRqu+JRfs1UPg0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit-icons.min.js" 
                integrity="sha256-l+AmZGiFz41J+gms80qC7faslJDberZDhjEsmDmQy8s=" crossorigin="anonymous"></script> --}}
    </body>
</html>