<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>Le Reiki un art de vivre </title>
    </head>
    <body>
        <div id="titles">
            @foreach($posts as  $post)
                <h1 id="mainTitle">{{ $post }}</h1>
            @endforeach
        </div>
    </body>
</html>


