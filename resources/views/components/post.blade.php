<?php
    use App\Models\User;

    $user = User::find($post->user_id);
?>

<div class="post">
    <a href="{{ route('profile', ['user' => $user]) }}">Go to profile</a>

    <div class="user-banner">
        <img src="{{ asset('storage/' . $user->image) }}" alt="profile-picture"></img>
        @if($user->admin == 1)
        <i style="font-size: small;">User is admin</i>
        @endif
        <h2>{{$user->displayname}}<h2>

    </div>
    <h1 style="font-size: larger; font-weight:bolder;">{{$post->title}}</h1>
    <p>
        {{$post->content}}
    </p>
</div>