<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
       Post::create($request->except(['_token', 'submit']));
       return redirect('posts');
    }

    public function edit($id)
    {
        $posts = Post::find($id);
        return view('posts.edit', compact("posts"));
    }

    public function update($id, Request $request) {
        $posts = Post::find($id);
        $posts->update($request->except(['_token','submit']));
        return redirect('posts');
    }

    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        return redirect('posts');
    }
}
