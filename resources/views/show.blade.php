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

                    <a href="{{ route('accueil') }}">Retour</a>

                </div>
            @endif
        </div>
        <div class="content">
            <main class="container posts article">

                <div class="message status">

                </div>

                <div class="message error">
                </div>

                <article>
                    <div class="infos">
                        <h3>{{$photo->legende}}</h3>
                    </div>
                <img src="{{$photo->url}}" alt="cats">
                    <p>{{$photo->description}}</p>
                </article>

            </main>
    </div>
    </body>
</html>



