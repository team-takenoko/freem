<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('regist_content');
    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'movie' => 'mimetypes:video/mp4',
            ]);
    
        if ($validator->fails()){
            return redirect('/upload')
                ->withInput()
                ->withErrors($validator);
        }
    
        $user = Auth::user();
        $path = $request->file('movie')->store('movies');
        
        $uploadContent = new \App\UploadContent;
        $uploadContent->title = $request->title;
        $uploadContent->description = $request->description;
        $uploadContent->path = $path;
        $uploadContent->user_id = $user->id;
        $uploadContent->save();
        return redirect('/');
    }

}
