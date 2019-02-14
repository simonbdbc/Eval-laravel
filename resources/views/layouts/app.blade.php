<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>picatsa - demo </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700|Nunito:300,400,600">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="{{ route('admin') }}">Picatsa</a></h1>
            <button id="burger" type="button">
                <i class="fas fa-bars"></i>
            </button>
            <nav>
                <ul class="menu">
                    {{-- <li><a href="">Inscription</a></li>
                    <li><a href="">Connexion</a></li> --}}
                    <li>
                        <a href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    @auth
                        <li><a href="{{ route('admin') }}">Mon compte</a></li>
                        <li>
                            <a>
                            <form method="post" action="{{ route('logout') }}" id="logout">
                                @csrf
                            <button type="submit">Deconnexion</button>
                            </form>
                            </a>
                        </li>
                    @endauth
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endguest

                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
    <script src=""></script>
    <script src=""></script>
</body>
</html>
