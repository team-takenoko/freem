<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function index(Request $request)
    {
        $content = \App\UploadContent::where('path', 'like', "%".$request->movie."%")->first();
        $content->path = "/storage/movies/" . $content->path;

        return view("/watch", ["content" => $content]);
    }
}
