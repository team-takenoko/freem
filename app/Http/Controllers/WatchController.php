<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function index(Request $request)
    {
        $moviePath = \App\UploadContent::where('path', 'like', "%".$request->movie."%")->first();
        $content = "/storage/movies/" . $moviePath->path;

        return view("/watch", ["content" => $content]);
    }
}
