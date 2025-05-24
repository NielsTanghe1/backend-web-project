<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;



Route::get('/', [IndexController::class, 'allposts'])->name('home');

Route::post('/editdisplayname', [ProfileController::class, 'updatedisplayname'])->name('updateDisplayname');
Route::post('/editbio', [ProfileController::class, 'updatebio'])->name('updateBio');
Route::post('/editpfp', [ProfileController::class, 'updateprofilepicture'])->name('updateProfilepicture');
Route::post('/editbd', [ProfileController::class, 'updatebirthday'])->name('updateBirthday');

Route::get('/profile/{user}', function($user){
    $posts = Post::where('user_id', '=', $user)->get();
    return view('profilepage', ['user' => $user], ['posts' => $posts]);
}) -> name('profile');

Route::get('/makepost', function () {
    return view('makepost'); 
}) -> name('makepost');

Route::post('/post', [PostController::class, 'store'])->name('post.store');

Route::patch('/makeadmin', [ProfileController::class, 'makeadmin'])->name('makeadmin');
Route::patch('/removeadmin', [ProfileController::class, 'removeadmin'])->name('removeadmin');
Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('deleteuser');


Route::get('/contact', function () {
    return view('contact'); 
}) -> name('contact');

Route::get('/admin', function () {
    if (Auth::check()) {
    // Gebruiker is ingelogd
        $user = Auth::user();

        if($user->admin == true){
            return view('adminpanel'); 
        }
    }   
    // Niet ingelogd, redirect naar home
    return redirect('/');
}) -> name('adminpanel');

Route::get('/FAQ', function () {
    return view('FAQ');
}) -> name('FAQ');

Route::get('/news', function () {
    return view('news');
}) -> name('news');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [ProfileController::class, 'userposts'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
    
}) -> name('logout');

require __DIR__.'/auth.php';
