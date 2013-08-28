<?php

use Illuminate\Database\Migrations\Migration;

class InsertPosts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('posts')->insert(
		array(
			array('content' => "Premier post", 'people1' => '2', 'people2' => '4', 'people3' => '3',
				'isdone' => '0','enddate' => date('Y-m-d'),'user_id' => '2','importance' => '5',
				'created_at' =>date('Y-m-d'), 'updated_at' =>date('Y-m-d')),
			)
		);
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}