@extends('layouts.app')

@section('content')

<div class="home-container">
    <h1>News</h1>

    @foreach ($articles as $news)
       @include('components.newspost')
    @endforeach
</div>


@endsection