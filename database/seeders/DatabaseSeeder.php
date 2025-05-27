<?php

namespace Database\Seeders;

use App\Models\Anwser;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;
use \App\Models\Post;
use \App\Models\News;
use \App\Models\Comment;
use App\Models\Contact;
use App\Models\Faq;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        News::factory(10)->create();        
        User::factory(10)->create()->each(function ($user)
        {
            $user->posts()->saveMany(
               Post::factory(5)->create()->each(function($post)
               {
                    $post->comments()->createMany([
                        [
                            'content' => 'this is a cool post',
                            'post_id' => $post->id,
                            'user_id' => $post->user_id
                        ],
                        [
                            'content' => 'this is not a cool post',
                            'post_id' => $post->id,
                            'user_id' => $post->user_id
                        ],
                        [
                            'content' => 'this is a bad post',
                            'post_id' => $post->id,
                            'user_id' => $post->user_id
                        ]
                    ]);
               })
            );
            $user->contacts()->saveMany(
                Contact::factory(1)->create()
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

        Faq::create([
            'title' => 'Question title',
            'content' => 'Detailed description of the question...',
            'anwser' => 'Detailed anwser for the question...',
            'type' => 1,
        ]);
         Faq::create([
            'title' => 'Question title',
            'content' => 'Detailed description of the question...',
            'anwser' => 'Detailed anwser for the question...',
            'type' => 1,
        ]);
         Faq::create([
            'title' => 'Question title',
            'content' => 'Detailed description of the question...',
            'anwser' => 'Detailed anwser for the question...',
            'type' => 2,
        ]);
        Faq::create([
            'title' => 'Question title',
            'content' => 'Detailed description of the question...',
            'anwser' => 'Detailed anwser for the question...',
            'type' => 2,
        ]);

    }
}
