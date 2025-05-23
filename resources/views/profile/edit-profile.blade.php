@extends('layouts.app')

@section('content')

<h1>Edit profile:</h1>

 <form method="POST" action="{{ route('updateDisplayname') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="displayname" class="form-label">Displayname:</label>
            <input type="text" class="form-control" id="displayname" name="displayname">

        </div>
        
        <button type="submit">Update displayname</button>
</form>
<br>
 <form method="POST" action="{{ route('updateBio') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="bio" class="form-label">Bio:</label>
            <input type="text" class="form-control" id="bio" name="bio">

            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" readonly>
        </div>
        
        <button type="submit">Update bio</button>
</form>
<br>
 <form method="POST" action="{{ route('updateProfilepicture') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="image" class="form-label">Profile picture:</label>
            <input type="file" class="form-control" id="image" name="image">

            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" readonly>
        </div>
        
        <button type="submit">Update profile picture</button>
</form>
<br>
<form method="POST" action="{{ route('updateBirthday') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="birthday" class="form-label">Birthday:</label>
            <input type="text" class="form-control" id="birthday" name="birthday">

            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" readonly>
        </div>
        
        <button type="submit">Update birthday</button>
</form>
@endsection
 
