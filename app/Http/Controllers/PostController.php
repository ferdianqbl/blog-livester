<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('backend.posts.index', [
            'title' => 'Posts',
            'posts' => Post::all(),
        ]);
    }

    public function create()
    {
        return view('backend.posts.create', [
            'title' => 'Create Post',
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:3|max:255',
            'category_id' => ['required', 'exists:categories,id'],
            'excerpt' => ['required', 'min:3', 'max:255'],
            'body' => ['required', 'min:3'],
        ]);

        Post::create($validatedData);

        return redirect('/posts')->with('success', 'You have successfully created a post!');
    }

    public function show(Post $post)
    {
        //
    }


    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
