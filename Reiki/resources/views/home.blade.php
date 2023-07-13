@extends('layouts.app')

@section('content')
    <section>
        <div id="titles">
            @foreach($posts as  $post)
                <h1 id="mainTitle">{{ $post }}</h1>
            @endforeach
        </div>
    </section>
@endsection



