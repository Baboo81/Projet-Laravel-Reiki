@extends('layouts.app')

@section('content')
        <div id="mainContent">
            <h1 id="titleIntro"> {{ $title }} </h1>
            <p id="contentIntro"> {{ $content }} </p>
            <img src="./img/chrysanthem.jpg" alt="image de chrysanthèmes">
        </div>
@endsection
 
