<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy

class GameInformationTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 15; $i++) {
            \App\GameInformation::create(array(
                'title' => $faker->realText(20),
                'body' => '
                <div class="col-md-9">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <h3 class="text-normal space-top">Thought-out UX</h3>
                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    <h3 class="text-normal space-top">Clean code</h3>
                    <p>Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <h3 class="text-normal space-top">Multiple Platforms</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                </div>
                <div class="col-md-3 padding-top-3x space-top-3x hidden-sm hidden-xs">
                    <div class="downloadable">
                        <img src="/img/versions/universal1.png" alt="Universal">
                        <h5>Universal Version</h5>
                        <p>Coming soon</p>
                    </div>
                </div>
                ',
                'game_information_category_id' => rand(1, 10),
            ));
        }
    }

}