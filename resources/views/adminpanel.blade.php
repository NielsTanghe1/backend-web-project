@extends('layouts.app')

@section('content')
<?php

use App\Models\Contact;

    $items = Contact::all();
?>



<div class="news-container">
    <h1>Admin panel</h1>
    @include('components.newsform')
</div>

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