<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'user_id' => 'required',
        ]);

        $post = Post::create($validated);

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('posts', 'public');
            $post->save();
        }

        return view('index');
    }

    public function vote(Request $request)
    {

        $postid = $request->postid;
        // dd($postid);
        $post = Post::find($postid);

        $validated = $request->validate([
            'votes' => 'required',
        ]);

        $post->update($validated);

        return view('index');
    }
}

