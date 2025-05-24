@extends('layouts.app')

@section('content')

<h1>Admin panel</h1>
<a href="{{ route('makepost') }}"> Make a newspost</a>

<div class="user-table-container">
    <h2>User list:</h2>
    @include('components.userlist')
</div>



@endsection