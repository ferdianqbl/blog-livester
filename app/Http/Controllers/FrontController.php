<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homePage()
    {
        return view('frontend.home.index', [
            'title' => 'Home',
            'posts' => Post::latest()->get(),
        ]);
    }

    public function authorPage()
    {
        return view('frontend.author.index', [
            'title' => 'Author',
            'authors' => User::latest()->paginate(8)->withQueryString(),
        ]);
    }

    public function categoryPage()
    {
        return view('frontend.category.index', [
            'title' => 'Category',
        ]);
    }
    public function postsPage()
    {
        return view('frontend.posts.index', [
            'title' => 'Posts',
            'posts' => Post::latest()->paginate(8)->withQueryString(),
        ]);
    }

    public function detailPostPage(Post $post)
    {
        return view('frontend.details.index', [
            'title' => 'Detail Post',
            'post' => $post,
        ]);
    }
}
