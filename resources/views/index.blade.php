@extends('layouts.app')

@section('title', 'Freem')

@section('content')
    <main class="flex-shrink-0" role="main">
        <div class="container" style="padding: 60px 15px 0px 15px;">
            <div class="row">
                @if (count($contents) > 0)
                    @foreach ($contents as $content)
                        <div class="card col-2 my-1" style="width: 18rem;">
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
    </main>
@endsection
