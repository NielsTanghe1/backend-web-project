<?php

namespace Database\Factories;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;


class FaqFactory extends Factory
{
    protected $model = Faq::class;

    public function definition()
    {
        return [
            'title' => 'Common question',
            'content' => $this->faker->paragraphs(2, true),
            'type' => rand(1, 2),
            'anwser' => $this->faker->paragraphs(1, true),
        ];
    }   
}