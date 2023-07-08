@extends('layouts.app')

@section('content')
        <div id="titles">
            @foreach($posts as  $post)
                <h1 id="mainTitle">{{ $post }}</h1>
            @endforeach
            <img src=".../public/img/fengShui.jpg" alt="image de pierres en équilibre" >
        </div>
@endsection



