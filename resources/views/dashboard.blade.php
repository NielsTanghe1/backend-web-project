@extends('layouts.app')

@section('content')


<div class="home-container">
    <h1>User dashboard</h1>

    <div class="dashboard-banner">
        <img src="{{ asset('storage/' . $user->image) }}" alt="profile-picture"></img>
        @if($user->admin == 1)
        <i style="font-size: small;">User is admin</i>
        @endif
        <h2 style="margin: 10px; font-weight: bold;">{{$user->displayname}}<h2>
        
        <h2>bio</h2>
        <p>{{$user->bio}}</p>
    </div>
    
    @foreach ($posts as $post)
       @include('components.post')
    @endforeach
</div>


@endsection