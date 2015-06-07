<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        \App\User::create(['name' => 'Raynold', 'email' => 'raynoldvanheyningen@gmail.com', 'password' => Hash::make('vegeta')]);
        // TestDummy::times(20)->create('App\User');
    }

}