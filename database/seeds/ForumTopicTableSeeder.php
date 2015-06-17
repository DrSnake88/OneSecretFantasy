<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ForumTopicTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        // TestDummy::times(20)->create('App\Post');
        for ($i = 0; $i < 50; $i++) {
            $name = $faker->sentence();
            $slug = $i . "-" . str_replace(" ", "-", $name);

            \App\ForumTopic::create([
                'name' => $name,
                'slug' => $slug,
                'category_id' => rand(1, 5),
                'user_id' => 1
            ]);
        }
    }

}