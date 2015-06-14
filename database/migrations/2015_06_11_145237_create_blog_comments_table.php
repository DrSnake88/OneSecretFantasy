<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_comments', function(Blueprint $table) {
            $table->increments('id');

            $table->text('comment');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('blog_id')->unsigned();
            $table->foreign('blog_id')->references('id')->on('blogs');

            $table->integer('reply_to_id')->unsigned()->nullable();
            $table->foreign('reply_to_id')->references('id')->on('blog_comments');

            $table->string('name')->nullable();
            $table->string('email')->nullable();

            $table->timestamps();
        });

        DB::statement('ALTER TABLE blog_comments ADD FULLTEXT search(comment)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blog_comments');
	}

}
