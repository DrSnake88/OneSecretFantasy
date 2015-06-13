<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class BlogTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            \App\Blog::create(array(
                'title' => $faker->realText(20),
                'body' => '
                <div class="col-md-9">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <h3 class="text-normal space-top">Thought-out UX</h3>
                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    <h3 class="text-normal space-top">Clean code</h3>
                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <figure class="space-bottom-2x">
                        <img src="/img/people/post1.jpg" class="space-top-2x" alt="One Secret Fantasy">
                        <figcaption>Made by OSF</figcaption>
                    </figure>
                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                </div>
                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                    <div class="downloadable">
                        <img src="/img/people/woman1-small.jpg" alt="Universal">
                        <h5>Universal Version</h5>
                        <p>Coming soon</p>
                    </div>
                </div>
                ',
                'excerpt' => $faker->realText(20),
                'image' => '/img/blog/post02.png',
                'highlight' => rand(0, 1),
                'tags' => implode(";", $faker->words),
                'user_id' => 1,
                'category_id' => rand(1, 10),
                'created_at' => $faker->date()
            ));
        }
    }

}