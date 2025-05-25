<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|min:10',
            'user_id' => 'required',
            'image' => 'sometimes|image|max:2048',
        ]);

         dd($validated);
        $imagePath = $request->file('image')->store('posts', 'public');
        
       

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
        ]);


        return view('dashboard');
    }
}

