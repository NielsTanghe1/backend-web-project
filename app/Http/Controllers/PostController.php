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
            'image' => 'nullable|image|max:2048',
        ]);

        // Validation
        $post = Post::create($validated);
        
        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('storage', 'public');
        }

        $post->save();

        return redirect()->route('dashboard');
    }
}

