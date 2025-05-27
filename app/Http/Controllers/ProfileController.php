<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Post;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    { 
        return view('profile.edit-profile', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */

    public function updatedisplayname(Request $request)
    {  
        $user = $request->user();

        $validated = $request->validate([
            'displayname' => 'required|string:max:255',
        ]);

        $user->update($validated);
        
        return Redirect::route('dashboard');
    }
    public function updatebio(Request $request)
    {  
        $user = $request->user();

        $validated = $request->validate([
            'bio' => 'required|string:max:1000',
        ]);

        $user->update($validated);
        
        return Redirect::route('dashboard');
    }
    public function updateprofilepicture(Request $request)
    {  
        $user = $request->user();

        $validated = $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        $imagePath = $request->file('image')->store('users', 'public');
        $user->update($validated);
        $user->image = $imagePath;
        $user->save();
        
        return Redirect::route('dashboard');
    }
    public function updatebirthday(Request $request)
    {  
        $user = $request->user();

        $validated = $request->validate([
            'birthday' => 'required|string|max:255',
        ]);

        $user->update($validated);
        
        return Redirect::route('dashboard');
    }

    public function makeadmin(Request $request)
    {  
        $user = User::find($request->user);

        if(Auth::user()->admin == true){
            $user->admin = 1;
            $user->save();

            return Redirect::route('adminpanel');
        }else{
            return Redirect::route('home');
        }
    }

    public function removeadmin(Request $request)
    {  
        $user = User::find($request->user);

        if(Auth::user()->admin == true){
            $user->admin = 0;
            $user->save();

            return Redirect::route('adminpanel');
        }else{
            return Redirect::route('home');
        }
    }
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $user = User::find($request->user);
        $user->delete();

        return Redirect::to('/admin');
    }

    public function userposts() : View{
        $user = Auth::user();
        $posts = Post::where('user_id', '=', Auth::user()->id)->get()->sortByDesc('created_at');

        return view('dashboard', ['user' => $user], ['posts' => $posts]);
    }

}
