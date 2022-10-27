<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homePage()
    {
        return view('frontend.home.index', [
            'title' => 'Home'
        ]);
    }

    public function authorPage()
    {
        return view('frontend.author.index', [
            'title' => 'Author'
        ]);
    }

    public function categoryPage()
    {
        return view('frontend.category.index', [
            'title' => 'Category'
        ]);
    }
    public function postsPage()
    {
        return view('frontend.posts.index', [
            'title' => 'Posts'
        ]);
    }
}
