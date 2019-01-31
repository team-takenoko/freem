<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class ResultController extends Controller
{
    public function index(Request $request)
    {
        $search_word = $request->search_word;
        $contents = \App\UploadContent::where('title', 'like', "%{$search_word}%")->get();
        foreach($contents as $content){
            $content->path = pathinfo($content->path, PATHINFO_FILENAME);
        }
            
        return view('/result', ['contents' => $contents]);
    }
}
