<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('blog/posts/{post}', [App\Http\Controllers\Blog\PostController::class, 'show'])->name('blog.show');
Route::get('blog/categories/{category}', [App\Http\Controllers\Blog\PostController::class, 'category'])->name('blog.category');
Route::get('blog/tags/{tag}', [App\Http\Controllers\Blog\PostController::class, 'tag'])->name('blog.tag');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('categories', CategoriesController::class);

    Route::resource('posts', PostsController::class)->middleware('auth');
    
    Route::resource('tags', TagsController::class);

    Route::resource('events', EventsController::class);

    Route::get('trashed-posts', [PostsController::class, 'trashed'])->name('trashed-posts.index');

    Route::put('restore-posts/{post}', [PostsController::class, 'restore'])->name('restore-posts');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('users/profile', [UsersController::class, 'edit'])->name('users.edit-profile');

    Route::get('users', [UsersController::class, 'index'])->name('users.index');

    Route::post('users/{user}/make-admin', [UsersController::class, 'makeAdmin'])->name('users.make-admin');

    Route::put('users/profile', [UsersController::class, 'update'])->name('users.update-profile');
});