@extends('layouts.app')

@section('content')

<div class="home-container">
    <h1>Home page</h1>

    @foreach ($posts as $post)
       @include('components.post')
    @endforeach
</div>


@endsection