<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/welcomestyle.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="jumbotron">
              <h1 class="display-1">Selamat Datang</h1>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, itaque, non. Quia nam tempore recusandae, repellat sapiente illum id esse, vel unde excepturi cum numquam sit eum et quis reprehenderit!</p>
              <hr class="my-4">
              
               @if (Route::has('login'))
                <div class="loginbtn">
                    @auth
                        <p>Anda sudah masuk, silakan pergi ke beranda</p>
                        <a class="btn btn-primary btn-lg" href="{{ route('beranda') }}" role="button">BERANDA</a>
                    @else
                    <p>Anda belum masuk, silakan masuk terlebih dahulu</p>
                        <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">MASUK</a>
                    @endauth
                </div>
            @endif
              
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
