<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaPicturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_pictures', function(Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('title');
            $table->text('caption');
            $table->text('tags')->nullable();

            $table->timestamps();
        });

        DB::statement('ALTER TABLE media_pictures ADD FULLTEXT search(title, caption, tags)');
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('media_pictures', function($table) {
            $table->dropIndex('search');
        });

		Schema::drop('media_pictures');
	}

}
