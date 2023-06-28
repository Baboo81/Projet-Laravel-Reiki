@extends('layouts.app')

@section('content')
        <div id="titleIntro">
            @foreach($titles as $title)
                <h1>{{ $title }}</h1>
            @endforeach 
        </div>
        <article>
            <p>{{ $txt }}</p>
        </article>
@endsection
 
