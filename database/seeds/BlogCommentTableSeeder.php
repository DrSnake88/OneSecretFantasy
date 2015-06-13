<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class BlogCommentTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        for ($i = 0; $i < 20; $i++) {
            \App\BlogComment::create([
               'comment' => 'Test Comment',
                'user_id' => 1,
                'blog_id' => rand(1, 10)
            ]);
        }

        \App\BlogComment::create([
            'comment' => 'Comment with reply',
            'user_id' => 1,
            'blog_id' => 1
        ]);


        \App\BlogComment::create([
            'comment' => 'Comment reply',
            'user_id' => 1,
            'blog_id' => 1,
            'reply_to_id' => 21
        ]);
    }

}