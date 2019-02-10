<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Auth;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    public function index(Request $request)
    {
        $content = \App\UploadContent::where('path', 'like', "%".$request->movie."%")->first();
        $content->path = "/storage/movies/" . $content->path;
        $good = \App\Good::where('upload_content_id', $content->id)->count();

        return view("/watch", ["content" => $content, "good" => $good]);
    }

    public function good(Request $request) {
        if(!Auth::check()){
            return response()->json([
                'result' => false
            ]);
        }
        $movie = pathinfo($request->movie, PATHINFO_BASENAME);
        $content = \App\UploadContent::where('path', 'like', "%".$movie."%")->first();
        $good = new \App\Good;
        $good->user_id = Auth::id();
        $good->upload_content_id = $content->id;
        $good->save();

        return response()->json([
            'result' => true
        ]);
    }
}
