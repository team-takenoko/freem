<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/upload', function () {
    
    return view('regist_content');
});

Route::post('/upload', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
        'movie' => 'mimetypes:video/mp4',
        ]);

    if ($validator->fails()){
        return redirect('/upload')
            ->withInput()
            ->withErrors($validator);
    }

    $path = $request->file('movie')->store('movies');
    
    $uploadContent = new \App\UploadContent;
    $uploadContent->title = $request->title;
    $uploadContent->description = $request->description;
    $uploadContent->path = $path;
    $uploadContent->save();
    return redirect('/');
});
