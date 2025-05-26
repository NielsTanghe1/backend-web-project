<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required',
            'user_id' => 'required',
            'post_id' => 'required',
        ]);        

        Comment::create($validated)->save();
        
        return view('index');
    }
}

