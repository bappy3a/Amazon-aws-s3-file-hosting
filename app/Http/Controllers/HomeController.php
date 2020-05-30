<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
       //  $url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
       // $images = [];
       // $files = Storage::disk('s3')->files('images');
       //     foreach ($files as $file) {
       //         $images[] = [
       //             'name' => str_replace('images/', '', $file),
       //             'src' => $url . $file
       //         ];
       //     }
       // return view('home', compact('images'));
        $posts = Post::get();
        return view('home', compact('posts'));
    }
}
