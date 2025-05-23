@extends('layouts.app')

@section('content')

<h1>{{$user->name}} ({{$user->displayname}})</h1>

<p>Bio: <br> {{$user->bio}}</p>
<h3>Posts:</h3>
    @foreach ($posts as $post)
       @include('components.post')
    @endforeach
@endsection