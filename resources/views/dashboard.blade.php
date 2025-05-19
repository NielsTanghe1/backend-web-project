@extends('layouts.app')

@section('content')

<h1>User dashboard</h1>

<h2>Welcome, {{$user->name}}</h2>

<h2>Your posts:</h2>
    @foreach ($posts as $post)
       @include('components.post')
    @endforeach

@endsection