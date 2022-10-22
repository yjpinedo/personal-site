<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = ['1', '2', '3', '4', '5',];
        return view('blog', ['posts' => $posts]);
    }
}
