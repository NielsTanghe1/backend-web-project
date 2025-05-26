<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|min:10',
            'user_id' => 'required',
        ]);

        $contact = Contact::create($validated);


        return view('contact');
    }
}
