<?php

namespace Database\Factories;

use App\Models\FAQ;
use Illuminate\Database\Eloquent\Factories\Factory;


class FAQFactory extends Factory
{
    protected $model = FAQ::class;

    public function definition()
    {
        return [
            'content' => $this->faker->paragraphs(2, true),
            'type' => 'technical' || 'general'
        ];
    }   
}