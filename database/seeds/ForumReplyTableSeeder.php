<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ForumReplyTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        // TestDummy::times(20)->create('App\Post');
        for ($i = 0; $i < 50; $i++) {
            \App\ForumReply::create([
                'body' => $faker->text(),
                'topic_id' => rand(1, 50),
                'user_id' => 1
            ]);
        }
    }

}