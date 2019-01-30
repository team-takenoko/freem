@extends('layouts.app')

@section('title', 'Upload - Freem')

@section('content')
    <main class="flex-shrink-0" role="main">
        <div class="container" style="padding: 60px 15px 0px 15px;">
            <form action="/upload" method="POST" class="col-12 form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-sm-6 mx-auto">
                        <input type="text" class="form-control col-12" name="title" id="upload-content-title" placeholder="Title">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6 mx-auto">
                        <input type="text" class="form-control col-12" name="description" id="upload-content-description" placeholder="Description">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6 mx-auto">
                        <input type="file" accept='video/mp4' name="movie" id="movie" class="form-control-file">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6 mx-auto">
                        <button type="submit" class="btn btn-dark col-12">Registration</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
