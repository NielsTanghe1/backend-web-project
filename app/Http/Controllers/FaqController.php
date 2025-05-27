<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Faq;

class FaqController extends Controller
{
    public function getquestions() : View{
        $questions = Faq::all();

        return view('faq', ['questions' => $questions]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'anwser' => 'required',
            'type' => 'required',
        ]);        
        
        Faq::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'anwser' => $validated['anwser'],
            'type' => $validated['type'],
        ]);
        
        return view('FAQ');
    }
}

