<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ForumCategoryTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        // TestDummy::times(20)->create('App\Post');
        for ($i = 0; $i < 15; $i++) {
            \App\ForumCategory::create([
                'name' => $faker->word(),
                'description' => $faker->sentence(),
                'section_id' => rand(1, 5)
            ]);
        }
    }

}