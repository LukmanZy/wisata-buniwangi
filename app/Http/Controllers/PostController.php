<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function landing() {
        return view('home', [
            "title" => "Home",
            "post" => Post::latest() -> get()
        ]);
    }

    public function index() {
        return view('listDestinations', [
            "title" => "List Destinasi",
            "posts" => Post::latest() -> paginate(10)
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            "title" => "Destinasi",
            "post" => $post
        ]);
    }

}
