<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="universe">
            <div class="star"></div>
        </div>
        <h1>Rick and Morty</h1>
    
        <form action="{{ route('search') }}" method="GET" class="form-group">
            <input type="text" name="q" placeholder="Buscar personaje" class="form-control">
            <button type="submit" class="btn-search">Buscar</button>
        </form>
        @yield('content')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('/js/style.js') }}"></script>
    </body>
</html>
