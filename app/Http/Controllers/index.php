<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    public function index()
    {
        $latestContents = \App\UploadContent::latest()->take(12)->get();
        foreach($latestContents as $content){
            $content->path = pathinfo($content->path, PATHINFO_FILENAME);
        }
            
        return view('/index', ['contents' => $latestContents]);
    }
}
