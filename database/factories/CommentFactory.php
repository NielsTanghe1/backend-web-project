<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'content' => $this->faker->paragraphs(3, true),
            'post_id' => Post::factory(),
            'user_id' => User::factory()
        ];
    }   
}