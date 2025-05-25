<?php
    use App\Models\News;
?>
<div class="post">
    <h1 style="font-size: larger; font-weight:bolder;">{{$news->title}}</h1>
    <h2>Posted at: {{$news->created_at}}</h2>
    <p>
        {{$news->content}}
    </p>
</div>
