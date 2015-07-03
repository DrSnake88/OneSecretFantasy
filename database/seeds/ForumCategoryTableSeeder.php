<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ForumCategoryTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();
        $slugify = new \Cocur\Slugify\Slugify();

        // TestDummy::times(20)->create('App\Post');
        for ($i = 0; $i < 15; $i++) {
            \App\ForumCategory::create([
                'name' => $faker->word(),
                'slug' => $slugify->slugify($faker->realText(20)),
                'description' => $faker->sentence(),
                'section_id' => rand(1, 5)
            ]);
        }
    }

}