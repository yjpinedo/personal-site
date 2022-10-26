<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
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
        return view('posts.create', ['post' => new Post]);
    }

    public function store(PostRequest $request)
    {
        Post::create($request->validated());
        return to_route('posts.index')->with('status', 'Post crated!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return to_route('posts.index')->with('status', 'Post updated!');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return to_route('posts.index')->with('status', 'Post deleted!');
    }
}
