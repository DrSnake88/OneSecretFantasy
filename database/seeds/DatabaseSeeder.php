<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
        $this->call('BlogCategoriesTableSeeder');
		$this->call('BlogTableSeeder');
        $this->call('BlogCommentTableSeeder');
        $this->call('MediaPictureTableSeeder');
        $this->call('MediaVideoTableSeeder');
        $this->call('GameInformationCategoriesTableSeeder');
        $this->call('GameInformationTableSeeder');
        $this->call('ForumSectionsTableSeeder');
        $this->call('ForumCategoryTableSeeder');
        $this->call('ForumTopicTableSeeder');
        $this->call('ForumReplyTableSeeder');
	}

}
