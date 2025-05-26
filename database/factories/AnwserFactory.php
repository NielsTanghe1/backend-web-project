<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Anwser;
use App\Models\Faq;
use Mockery\Matcher\Any;

class AnwserFactory extends Factory
{
    protected $model = Anwser::class;

    public function definition()
    {
        return [
            'content' => $this->faker->paragraphs(1, true),
            'faq_id' => Faq::factory(),
        ];
    }   
}