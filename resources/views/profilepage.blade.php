@extends('layouts.app')

@section('content')
<?php
    use App\Models\User;

    $curruser = User::find($user);
?>
<h1>{{$curruser->name}} ({{$curruser->displayname}})</h1>

<p>Bio: <br> {{$curruser->bio}}</p>
<h3>Posts:</h3>
    @foreach ($posts as $post)
       @include('components.post')
    @endforeach
@endsection