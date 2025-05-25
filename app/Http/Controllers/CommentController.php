<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|min:10',
            'user_id' => 'required',
            'post_id' => 'required',
        ]);        

        $comment = Comment::create([
            'content' => $request->content,
            'user_id' => $request
        ]);


        return view('home');
    }
}

