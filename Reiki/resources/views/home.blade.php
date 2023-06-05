<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./app.css">
        <title>Mon mini-blog</title>
    </head>
    <body>
        <h1>Le Reiki</h1>
        <ul>
            @foreach($articles as $article)
                <li>{{$article['title']}}</li>
            @endforeach
        </ul>
    </body>
</html>


