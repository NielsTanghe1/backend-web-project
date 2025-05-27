@extends('layouts.app')

@section('content')

<div class="home-container">
    <div class="edit-profile">
    <h1>Edit profile:</h1>
        <form method="POST" action="{{ route('updateDisplayname') }}" enctype="multipart/form-data">
                @csrf
                <div class="edit-item">
                    <label for="displayname" class="form-label">Displayname:</label>
                    <input type="text" class="form-control" id="displayname" name="displayname">
                    <button type="submit">Update displayname</button>
                </div> 
        </form>
        <br>
        <form method="POST" action="{{ route('updateBio') }}" enctype="multipart/form-data">
                @csrf
                <div class="edit-item">
                    <label for="bio" class="form-label">Bio:</label>
                    <input type="text" class="form-control" id="bio" name="bio">

                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" readonly>
                    <button type="submit">Update bio</button>
                </div>
        </form>
        <br>
        <form method="POST" action="{{ route('updateProfilepicture') }}" enctype="multipart/form-data">
                @csrf
                <div class="edit-item">
                    <label for="image" class="form-label">Profile picture:</label>
                    <input type="file" class="form-control" id="image" name="image">

                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" readonly>
                    <button type="submit">Update profile picture</button>
                </div>
                
        </form>
        <br>
        <form method="POST" action="{{ route('updateBirthday') }}" enctype="multipart/form-data">
                @csrf
                <div class="edit-item">
                    <label for="birthday" class="form-label">Birthday:</label>
                    <input type="text" class="form-control" id="birthday" name="birthday">

                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" readonly>
                    <button type="submit">Update birthday</button>

                </div>
                
        </form>
    </div>
</div>

@endsection
 
