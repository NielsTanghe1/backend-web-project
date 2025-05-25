<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;
use App\Models\News;


class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(3, true),
        ];
    }   
}