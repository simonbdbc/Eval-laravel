<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Picatsa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('admin') }}">Mon compte</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="content">
            <div class="container-flex">

                @foreach ($photos as $photo)

                    <div class="card-flex">
                        <a href="{{route('show', ['id' => $photo->id])}}" class="">
                            <img src="{{$photo->url}}" alt="cats">
                        <span class="">
                            <h2><a href="{{ url('show') }}">{{$photo->legende}}</a></h2>
                        </span>
                    </div>

                @endforeach

            </div>
        </div>
    </body>
</html>
