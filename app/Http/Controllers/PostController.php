<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
     public function store(StorePostRequest $request)
    {
        // Validation
        $post = Post::create($request->validated());
        
        // if ($request->hasFile('image')) {
        //     $post->image = $request->file('image')->store('posts', 'public');
            
        // }

        $post->save();

        return redirect()->route('dashboard');
    }
}

