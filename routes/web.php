<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
}) -> name('home');

Route::get('/contact', function () {
    return view('contact');
}) -> name('contact');

Route::get('/FAQ', function () {
    return view('FAQ');
}) -> name('FAQ');

Route::get('/news', function () {
    return view('news');
}) -> name('news');

Route::get('/dashboard', function () {
    return view('dashboard');
}) -> name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
}) -> name('logout');

require __DIR__.'/auth.php';
