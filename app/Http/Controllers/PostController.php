<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('blogs.home');
    }

    public function list()
    {
        $posts = Post::all();
        return view('blogs.list', compact('posts'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->summary = $request->summary;
        $post->content = $request->contented;
        $post->save();
        return redirect()->route('blogs.list');

    }

    public function detail($id)
    {
        $post = Post::findOrFail($id);
        return view('blogs.detail', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('blogs.list');

    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('blogs.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->summary = $request->summary;
        $post->content = $request->contented;
        $post->save();
        return redirect()->route('blogs.list');
    }
}
