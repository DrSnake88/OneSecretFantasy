<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameInformationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('game_informations', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->text('tags')->nullable();
            $table->integer('game_information_category_id')->unsigned();
            $table->foreign('game_information_category_id')->references('id')->on('game_information_categories');
			$table->timestamps();
		});

        DB::statement('ALTER TABLE game_informations ADD FULLTEXT search(title, body, tags)');
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('game_informations', function($table) {
            $table->dropIndex('search');
        });

        Schema::drop('game_informations');
	}

}
