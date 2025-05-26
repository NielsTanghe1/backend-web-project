<?php
    use App\Models\Faq;
    $questions = Faq::all()->where('type', 1);
?>

<div class="faq-item-container">
    <h1>General questions</h1>

    @foreach($questions as $question)
        @include('components.question')
    @endforeach
</div>