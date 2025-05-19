<?php
    use App\Models\Post;
    use App\Models\User;

        $posts = Post::all();

    foreach ($posts as $post) {
        echo 
        '<div class="post">
        <h2>'.$post->title.'</h2>
        <p>
            '.$post->content.'
        </p>
        <a>Posted by: '.User::find($post->user_id)->name.'<a>
        </div>';
    }
?>

    
