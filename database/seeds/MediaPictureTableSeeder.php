<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class MediaPictureTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        \App\MediaPicture::create([
            'image' => 'http://game.anonforge.com/wp-content/uploads/2014/06/ahri-and-sona-lol-girls-champions-gevurah_studios-1920x1080-728x410.jpg',
            'title' => 'Title',
            'caption' => 'Caption'
        ]);

        \App\MediaPicture::create([
            'image' => 'http://game.anonforge.com/wp-content/uploads/2014/03/ahri-lol-hd-wallpaper-1920x1440-728x546.jpg',
            'title' => 'Title',
            'caption' => 'Caption'
        ]);

        \App\MediaPicture::create([
            'image' => 'http://fc09.deviantart.net/fs70/i/2014/349/6/5/katarina_by_instantip-d89xxj2.jpg',
            'title' => 'Title',
            'caption' => 'Caption'
        ]);

        \App\MediaPicture::create([
            'image' => 'http://i.ytimg.com/vi/S5wF7uT258c/0.jpg',
            'title' => 'Title',
            'caption' => 'Caption'
        ]);

        \App\MediaPicture::create([
            'image' => 'https://s-media-cache-ak0.pinimg.com/236x/40/d6/a0/40d6a0de41ce9cd963a837e2e69668c1.jpg',
            'title' => 'Title',
            'caption' => 'Caption'
        ]);
    }

}