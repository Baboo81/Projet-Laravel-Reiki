@extends('layouts.app')

@section('content')
        <div id="mainContent">
            <img id="imgChrysanthem" src="./img/chrysanthem.jpg" alt="image de chrysanthèmes">
            <h1 id="titleIntro"> {{ $title }} </h1>
            <p id="contentIntro"> {{ $content }} </p>
        </div>
@endsection
 
