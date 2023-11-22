<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <link rel="logo" href="{{ asset('img/logo.webp')}}">
    <title>@yield('title')</title>

</head>
<body>
<header>
    <div class="header">
        <div class="alinear">
            <img class="img-escudo" src="{{ asset('img/pngwing.png')}}" alt="">
            <a href="/"><h1 class="alinear texto1">Agentina.gob.ar</h1></a>

            <a class="texto1 derecha" href="/profile">Usuario</a>
        </div>

    </div>

    <div>

        <img class="baner" src="{{ asset('img/Banner-rnpa.png')}}" alt="">
    </div>
    <div class="transparencia"></div>
    <nav class="navegacion">
        <ul>
            <li><a href="/titulares">Titulares</a></li>
            <li><a href="/infracciones">Infracciones</a></li>
            <li><a href="/autos">Autos</a></li>
        </ul>
    </nav>
    </header>
<main>
    @yield('content')
</main>

{{--  <footer>
<div class="alinear">
<h3 class="black">Argentina</h3>
<h3 class="withe">unida</h3>
</div>
</footer> --}}
</body>
</html>
