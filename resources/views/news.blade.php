@extends('layouts.app')

@section('content')
<?php
    use App\Models\News;
    $articles = News::all()->sortByDesc('created_at');
?>
<div class="home-container">
    <h1>News</h1>

    @foreach ($articles as $news)
       @include('components.newspost')
    @endforeach
</div>


@endsection