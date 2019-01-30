@extends('layouts.app')

@section('title', 'MyPage - Freem')

@section('content')
<div class="container">
    <div class="row">
        @if (count($contents) > 0)
            @foreach ($contents as $content)
                <div class="card col-2 my-1">
                    <a href="/watch/{{$content->path}}">
                        <img class="card-img-top" src="{{ asset('img/sample.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $content->title }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
