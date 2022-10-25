<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// ======== FRONTEND ========

Route::get('/', function () {
    return view('frontend.home.index', [
        'title' => 'Home'
    ]);
});

Route::get('/author', function () {
    return view('frontend.author.index', [
        'title' => 'Author'
    ]);
});

Route::get('/category', function () {
    return view('frontend.category.index', [
        'title' => 'category'
    ]);
});
