<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'allposts'])->name('home');

Route::get('/makepost', function () {
    return view('makepost'); 
}) -> name('makepost');

Route::post('/post', [PostController::class, 'store'])->name('post.store');

Route::get('/contact', function () {
    return view('contact'); 
}) -> name('contact');

Route::get('/FAQ', function () {
    return view('FAQ');
}) -> name('FAQ');

Route::get('/news', function () {
    return view('news');
}) -> name('news');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [ProfileController::class, 'userposts'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
    
}) -> name('logout');

require __DIR__.'/auth.php';
