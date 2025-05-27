@extends('layouts.app')

@section('content')


<?php
    use App\Models\Post;
    $posts = Post::all()->sortByDesc('created_at');;
?>
<div class="home-container">
    <h1>Bootleg Reddit</h1>

    @foreach ($posts as $post)
       @include('components.post')
    @endforeach
</div>


@endsection