<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', ['posts' => Post::latest()->get()]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:3', 'max:300'],
            'body' => ['required', 'min:3', 'max:300'],
        ]);

        Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        return to_route('posts.index')->with('status', 'Post crated!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required', 'min:3', 'max:300'],
            'body' => ['required', 'min:3', 'max:300'],
        ]);

        $post->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        return to_route('posts.index')->with('status', 'Post updated!');
    }
}
