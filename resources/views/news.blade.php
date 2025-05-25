@extends('layouts.app')

@section('content')

<h1>News</h1>

    @foreach ($articles as $news)
       @include('components.newspost')
    @endforeach

@endsection