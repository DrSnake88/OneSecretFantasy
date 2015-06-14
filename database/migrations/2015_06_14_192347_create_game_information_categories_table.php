<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameInformationCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('game_information_categories', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->text('tags')->nullable();
			$table->timestamps();
		});

        DB::statement('ALTER TABLE game_information_categories ADD FULLTEXT search(title, subtitle, tags)');
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('game_information_categories', function($table) {
            $table->dropIndex('search');
        });

        Schema::drop('game_information_categories');
	}

}
