<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1>Challenge</h1>
    <div class="menu">
        <div class="nav">
            <nav>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/challenges">Challenges</a></li>
                </ul>
            </nav>
        </div>


        <div class="connection">

            @auth

                <li>
                    <span>bienvenu {{ auth()->user()->name }}</span>
                </li>

                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit">
                            Deconnexion

                        </button>

                    </form>
                </li>
            @else
                <a href="/login">Conexion</a>

                <a href="/register">Inscription</a>

            @endauth
        </div>
    </div>


    @yield('content')

</body>

</html>
