<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le Reiki, un art de vivre</title>
    <!--Lien vers le css-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/introduction.css') }}">
    <link rel="stylesheet" href="{{ asset('css/techniques.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
    <body>
        @include('partials.navbar')
        <!--Contenu dynamique-->
        @yield('content')
    </body>
</html>