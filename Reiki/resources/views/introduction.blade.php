<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/main.css">
        <title>Introduction</title>
    </head>
    <body>
        <div>
            @foreach($titles as $title)
                <h1>{{ $title }}</h1>
            @endforeach 
        </div>
        <img src="./Reiki/public/img/stones.jpg" alt="photo de pierres">

    </body>
</html> 
