@extends('layouts.app')

@section('content')
<?php

use App\Models\Contact;

    $items = Contact::all();
?>

<h1>Admin panel</h1>

<h2>Make a news article:</h2>
@include('components.newsform')

<div class="admin-container">
    <div class="user-table-container">
        <h2>Manage users:</h2>

        @include('components.userlist')
    </div>


    <div class="contact-container">
        <h2>Contact messages:</h2>
        
        @foreach($items as $contact)
            @include('components.contactitem')
        @endforeach
    </div>
</div>




@endsection