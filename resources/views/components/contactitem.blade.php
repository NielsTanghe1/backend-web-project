<?php
    use App\Models\User;
?>

<div class="contact-item">
    <h1>{{User::find($contact->user_id)->name}}</h2>
    <p>
        {{$contact->content}}
    </p>
</div>