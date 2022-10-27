<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\PostController;
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

Route::get('/', [FrontController::class, 'homePage']);

Route::get('/author', [FrontController::class, 'authorPage']);

Route::get('/category', [FrontController::class, 'categoryPage']);

Route::get('/posts', [FrontController::class, 'postsPage']);

Route::get('/posts/{post}', [FrontController::class, 'detailPostPage']);

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

Route::resource('/editor/posts', PostController::class)->middleware('auth');
