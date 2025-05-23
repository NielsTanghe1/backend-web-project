<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
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

        User::create([
            'name' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => 'Password!321',
            'displayname' => 'theRealAdmin',
            'bio' => 'I am the real admin of this website',
            'admin' => true,
            'birthday' => '1 Januari',
            'image' => 'default-profile-picture.jpg',
        ]);
    }
}
