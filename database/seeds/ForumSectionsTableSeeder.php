<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ForumSectionsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        // TestDummy::times(20)->create('App\Post');
        for ($i = 0; $i < 5; $i++) {
            \App\ForumSection::create([
                'name' => $faker->word(),
                'description' => $faker->sentence()
            ]);
        }
    }

}