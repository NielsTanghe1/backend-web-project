<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\News;

class NewsController extends Controller
{
    public function getarticles() : View{
        $articles = News::all();

        return view('news', ['articles' => $articles]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|min:10',
        ]);        
       
        $newsarticle = News::create($validated);

        return view('news');
    }
}

