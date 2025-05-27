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
        <img class="post-img" src="{{ asset('storage/' . $post->image) }}" alt="post-picture"></img>

        <div class="vote-container">
            <div>
                <form class="vote-form-up" method="POST" action="{{ route('post.vote', ['post', $post]) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="postid" name="postid" value="{{$post->id}}" readonly>
                        <input type="hidden" id="votes" name="votes" value="{{($post->votes + 1)}}" readonly>
                        <button type="submit">^</button>
                </form>

                <p>{{$post->votes}}</p>

                <form class="vote-form-down" method="POST" action="{{ route('post.vote', ['post', $post]) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="postid" name="postid" value="{{$post->id}}" readonly>
                        <input type="hidden" id="votes" name="votes" value="{{($post->votes - 1)}}" readonly>
                        <button type="submit">v</button>
                </form>
            </div>
            
        </div>
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


