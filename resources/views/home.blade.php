<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color:red;">
                    <img src="{{asset('image/bloc.png')}}" style="height:100px">
                Droit d'accès bloqué</div>

                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                            <p>Accès Refusé.veuillez contacter l administration</p>
                        </div>
                    
                </div>
                <a class="btn btn-primary" href="{{ route('login') }}"
                            >
                                        Deconnexion
                                    </a>
            </div>

        </div>
    </div>
</div>

     <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.6.3.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
</body>
</html>