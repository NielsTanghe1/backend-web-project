@extends('layouts.app')

@section('content')

<div class="home-container">
    <h1>FAQ</h1>

    <div class="faq-container">
        @include('components.faqgeneral')
        @include('components.faqtechnical')
    </div>
</div>

@endsection