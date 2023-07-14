@extends('layouts.app')

@section('content')
    <section>
        <div id="titles">
            @foreach($posts as  $post)
                <h1>{{ $post }}</h1>
            @endforeach
        </div>
    </section>
@endsection



