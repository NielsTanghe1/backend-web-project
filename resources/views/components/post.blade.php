<?php
    use App\Models\User;

    $user = User::find($post->user_id)
?>

<div class="post">
    <h2>{{$post->title}}</h2>
    <p>
        {{$post->content}}
    </p>
    <a>Posted by: {{$user->name}}<a>
</div>