<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


// To welcome page
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

// To blog page
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

// To create blog post
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');

// To single blog post
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');


// To edit single blog post
Route::get('/blog/{post}/edit', [BlogController::class, 'edit'])->name('blog.edit');

// To update single blog post
Route::put('/blog/{post}', [BlogController::class, 'update'])->name('blog.update');

// To delete single blog post
Route::delete('/blog/{post}', [BlogController::class, 'destroy'])->name('blog.destroy');

// To store blog post to the DB
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

// To about page
Route::get('/about', function(){
    return view('about');
})->name('about');

// To contact page


// To Send data to email.
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Category resource controller
Route::resource('/categories', CategoryController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
