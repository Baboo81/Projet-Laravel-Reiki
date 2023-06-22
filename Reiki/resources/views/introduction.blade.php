@extends('layouts.app')

@section('content')
        <div>
            @foreach($titles as $title)
                <h1>{{ $title }}</h1>
            @endforeach 
        </div>
        <img src="./Reiki/public/img/stones.jpg" alt="photo de pierres">
@endsection
 
