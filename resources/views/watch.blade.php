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
        <button type="button" class="btn btn-light">
            Good! <span class="badge badge-light">0</span>
        </button>
    </div>
    <p>{{$content->description}}</p>
</div>
@endsection
