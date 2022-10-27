<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'summary' => 'required|min:3|max:255',
            'category_id' => ['required', 'exists:categories,id'],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'body' => ['required', 'min:3'],
        ]);

        if ($request->file('image')) $validatedData['image'] = $request->file('image')->store('post-images');

        $validatedData['user_id'] = auth()->user()->id;

        Post::create($validatedData);

        return redirect('/editor/posts')->with('success', 'You have successfully created a post!');
    }

    public function show(Post $post)
    {
        //  
    }


    public function edit(Post $post)
    {
        return view('backend.posts.edit', [
            'title' => 'Edit Post',
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|min:3|max:255',
            'summary' => 'required|min:3|max:255',
            'category_id' => ['required', 'exists:categories,id'],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'body' => ['required', 'min:3'],
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($post->image) Storage::delete($post->image);
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Post::where('id', $post->id)->update($validatedData);

        return redirect('editor/posts')->with("success", "Post Edited successfully");
    }

    public function destroy(Post $post)
    {
        if ($post->image) Storage::delete($post->image);
        Post::destroy($post->id);
        return redirect('editor/posts')->with("success", "Post deleted successfully");
    }
}
