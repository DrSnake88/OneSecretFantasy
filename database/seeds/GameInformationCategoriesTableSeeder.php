<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class GameInformationCategoriesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            \App\GameInformationCategories::create([
                'title' => $faker->word,
                'subtitle' => $faker->sentence(),
            ]);
        }
    }

}