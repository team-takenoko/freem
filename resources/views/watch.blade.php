@extends('layouts.app')

@section('title', 'Freem')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <video controls autoplay>
            <source src="{{asset( $content->path )}}">
        </video> 
    </div>
    <div class="border-bottom">
        <h2>{{$content->title}}</h2>
        <div id="app">
            <example-component good-num="{{$good}}"></example-component>
        </div>
    </div>
    <p>{{$content->description}}</p>
</div>

@endsection
