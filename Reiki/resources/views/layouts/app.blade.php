<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le Reiki, un art de vivre</title>
    <!--Lien vers le css-->
    {{ asset('css/app.css') }}
</head>
    <body>
        @include('partials.navbar')
        <!--Contenu dynamique-->
        @yield('content')
        <!--Lien vers le fichier js-->
        {{ asset('js/app.js') }}
    </body>
</html>