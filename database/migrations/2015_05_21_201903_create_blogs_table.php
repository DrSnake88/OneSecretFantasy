<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->string('excerpt');
            $table->string('image')->nullable();
            $table->boolean('highlight');
            $table->text('tags')->nullable();
            $table->integer('user_id')->unsigned()->default(1);
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('category_id')->unsigned()->default(1);
            $table->foreign('category_id')->references('id')->on('blog_categories');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE blogs ADD FULLTEXT search(title, body, tags)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('blogs', function($table) {
            $table->dropIndex('search');
        });
		Schema::drop('blogs');
	}

}
