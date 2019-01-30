<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $contents = \App\UploadContent::where('user_id', $user->id)->get();
        foreach($contents as $content){
            $content->path = pathinfo($content->path, PATHINFO_FILENAME);
        }
            
        return view('/home', ['contents' => $contents]);
    }
}
