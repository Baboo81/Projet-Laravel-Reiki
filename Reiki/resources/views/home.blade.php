<html>
    <body>
        <h1>Hello, {{ $framework }} </h1>

        @if ($framework === 'Laravel')
            Cool !
            @else 
                Bad !
                @endif

<!--Tant que l'on n'est pas coonnecté-->
        @unless (auth::check())
            non connecté !
            @endunless

<!--Pour vérifier si la variable existe-->
        @isset($framework)
        @endisset 

<!--Pour vérifier si la variable est vide-->
        @empty($framework)
        @endempty
<!--Pour vérifier si je suis authentifié-->
        @auth
            
        @endauth  
<!--Pour les non-connectés-->
        @guest
            
        @endguest

{{-- Coments --}}

    

        @for($i = 0; $i < 10; $i++)
            {{ $i }}
        @endfor

        @foreach (['a', 'b', 'c'] as $tmp)
            <li>{{ $tmp }} => {{ $loop->index }}</li>
        @endforeach

@include('default.error', ['errors' => [invalide]])


    </body>
</html>