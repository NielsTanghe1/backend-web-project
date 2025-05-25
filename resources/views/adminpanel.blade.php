@extends('layouts.app')

@section('content')

<h1>Admin panel</h1>

<h2>Make a news article:</h2>
@include('components.newsform')

<h2>Manage users:</h2>
<div class="user-table-container">
    <h2>User list:</h2>
    @include('components.userlist')
</div>



@endsection