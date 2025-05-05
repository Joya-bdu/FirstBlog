<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TaskController;


// Home route - Show all posts
Route::get('/', [PostController::class, 'index'])->name('posts.index');

// About page
Route::get('/about', function () {
    return view('about');
});

// Contact page
Route::get('/contact', [ContactController::class, 'index']);

// Blog Routes
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

// Post Routes
Route::get('/posts', [PostController::class, 'index']);  // GET request to view all posts
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');  // POST request to create new post
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show'); // GET request to view a single post2
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); // GET request to edit a post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update'); // PUT request to update a post



// Store a new comment
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

// Show edit form for a comment
Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');

// Update a comment
Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');

// Delete a comment
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

// Show a single comment
Route::get('/comments/{comment}', [CommentController::class, 'show'])->name('comments.show');

Route::resource('tasks', TaskController::class); // Resource route for tasks