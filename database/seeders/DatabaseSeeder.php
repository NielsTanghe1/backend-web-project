<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)->create()->each(function ($user) {
            $user->posts()->saveMany(
               Post::factory(5)->create()
            );
        });
    }
}
