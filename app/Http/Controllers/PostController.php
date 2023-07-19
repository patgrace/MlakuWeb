<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function alam()
    {
        return view("/jelajahi.alam", [
            "posts" => Post::all(),
        ]);
    }

    public function budaya()
    {
        return view("/jelajahi.budaya", [
            "posts" => Post::all(),
        ]);
    }

    public function kuliner()
    {
        return view("/jelajahi.kuliner", [
            "posts" => Post::all(),
        ]);
    }

    public function show(Post $post)
    {
        return view("/jelajahi.post", [
            "title" => "posts detail",
            "post" => $post,
        ]);
    }

}
