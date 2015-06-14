<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_videos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('video');
            $table->string('cover');
            $table->string('title');
            $table->text('caption');
            $table->text('tags')->nullable();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE media_videos ADD FULLTEXT search(title, caption, tags)');
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('media_videos', function($table) {
            $table->dropIndex('search');
        });

        Schema::drop('media_videos');
	}

}
