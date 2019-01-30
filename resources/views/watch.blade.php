@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <video controls autoplay>
            <source src="{{asset( $content )}}">
        </video> 
    </div>
</div>
@endsection
