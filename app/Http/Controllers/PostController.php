<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "artikel" => Post::all()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Singel Post",
            "single_post" => $post
        ]);
    }
}
