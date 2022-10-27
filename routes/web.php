<?php

use App\Http\Controllers\UserController;
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
        'title' => 'Category'
    ]);
});

Route::get('/login', [UserController::class, 'loginView'])->name('login')->middleware('guest');
Route::get('/register', [UserController::class, 'registerView'])->middleware('guest');


// ======== BACKEND ========
Route::post('/login', [UserController::class, 'loginAuthentication']);

Route::post('/register', [UserController::class, 'registerStore']);

Route::post('/logout', [UserController::class, 'logout']);


Route::get('/editor', function () {
    return view('backend.dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->name('dashboard')->middleware('auth');

// Route::resource('/editor/posts', function () {
//     return view('backend.posts.index', [
//         'title' => 'Posts'
//     ]);
// })->middleware('auth');
