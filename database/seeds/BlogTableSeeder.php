<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class BlogTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            \App\Blog::create([
                'title' => $faker->realText(20),
                'body' => $faker->realText(200),
                'excerpt' => $faker->realText(20),
                'user_id' => 1,
                'category_id' => rand(0, 9),
                'highlight' => rand(0, 1),
                'created_at' => $faker->date()
            ]);
        }
    }

}