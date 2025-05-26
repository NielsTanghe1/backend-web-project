<?php
    use App\Models\User;

    $user = User::find($post->user_id);
    $comments = $post->comments->sortByDesc('created_at');
?>
@if(User::where('id', '=', $post->user_id)->exists())
    <div class="post">
        

        @include('components.userbanner')

        <h2>Posted at: {{$post->created_at}}</h2>
        <h1 style="font-size: larger; font-weight:bolder;">{{$post->title}}</h1>
        <p>
            {{$post->content}}
        </p>

        @auth
            @include('components.commentform')
        @endauth

        @foreach($comments as $comment)
            <div class="comment">
                <p>{{ User::find($comment->user_id)->displayname}} commented:</p>
                <p>{{$comment->content}}</p>
            </div>
        @endforeach

    </div>
@endif