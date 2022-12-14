<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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

Route::post('newsletter', NewsletterController::class);

Route::get('/', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store'])->middleware('auth');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::post('login', [SessionsController::class, 'login'])->name('login');
Route::get('login', [SessionsController::class, 'create']);
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

//Route::get('categories/{category:slug}', function (Category $category) {
//    return view('post.index', [
//        'posts' => $category->posts->load('category', 'author')
//    ]);
//});

//Route::get('author/{author:username}', function (User $author) {
//    return view('post.index', [
//        'posts' => $author->posts->load('category', 'author')
//    ]);
//});
