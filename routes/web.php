<?php

use App\Http\Controllers\PostController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Posts
// Route::get('/posts')->name('posts')->uses('PostController@index')->middleware('auth');
Route::get('posts', [PostController::class, 'index'])->name('posts');

    // Route::get('/posts')->name('posts')->uses('PostsController@index')->middleware('remember', 'auth');
    // Route::post('posts')->name('posts.store')->uses('PostsController@store')->middleware('auth');
    // Route::put('posts/{post}')->name('posts.update')->uses('PostsController@update')->middleware('auth');
    // Route::delete('posts/{post}')->name('posts.destroy')->uses('PostsController@destroy')->middleware('auth');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/index', function () {
    return Inertia::render('Prueba/Index');
})->middleware(['auth', 'verified'])->name('index');

require __DIR__.'/auth.php';
