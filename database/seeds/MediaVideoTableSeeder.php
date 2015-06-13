<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class MediaVideoTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        \App\MediaVideo::create([
            'video' => 'https://www.youtube.com/watch?v=j3XszzFJCO8',
            'cover' => 'http://40.media.tumblr.com/0fa4bf7114efa04a9c3a053311c09317/tumblr_n0ipipCFN01s0adc8o1_500.png',
            'title' => 'Title',
            'caption' => 'Caption'
        ]);

        \App\MediaVideo::create([
            'video' => 'https://www.youtube.com/watch?v=FY_a-d-ff1Q',
            'cover' => 'http://fc07.deviantart.net/fs70/i/2013/238/a/a/katarina___league_of_legends_by_gugarts-d6hk16t.png',
            'title' => 'Title',
            'caption' => 'Caption'
        ]);
    }

}