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
			array('content' => "J'aime les pommes roses", 'people1' => '2', 'people2' => '4', 'people3' => '5','people4' => '2','people5' => '1',
				'isdone' => '0','enddate' => date('Y-m-d H:m:s'),'user_id' => '2','importance' => '5',
				'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
			array('content' => "J'aime les pommes roses", 'people1' => '2', 'people2' => '4', 'people3' => '5','people4' => '2','people5' => '1',
				'isdone' => '0','enddate' => date('Y-m-d H:m:s'),'user_id' => '2','importance' => '5',
				'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
			array('content' => "J'aime les pommes roses", 'people1' => '2', 'people2' => '4', 'people3' => '5','people4' => '2','people5' => '1',
				'isdone' => '0','enddate' => date('Y-m-d H:m:s'),'user_id' => '2','importance' => '5',
				'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
			array('content' => "J'aime les pommes roses", 'people1' => '2', 'people2' => '4', 'people3' => '5','people4' => '2','people5' => '1',
				'isdone' => '0','enddate' => date('Y-m-d H:m:s'),'user_id' => '2','importance' => '5',
				'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
			array('content' => "J'aime les pommes roses", 'people1' => '2', 'people2' => '4', 'people3' => '5','people4' => '2','people5' => '1',
				'isdone' => '0','enddate' => '2013-12-25 17:00:00','user_id' => '2','importance' => '5',
				'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
			array('content' => "J'aime les pommes roses", 'people1' => '2', 'people2' => '4', 'people3' => '5','people4' => '2','people5' => '1',
				'isdone' => '0','enddate' => '2013-12-25 17:00:00','user_id' => '2','importance' => '5',
				'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
			array('content' => "J'aime les pommes roses", 'people1' => '2', 'people2' => '4', 'people3' => '5','people4' => '2','people5' => '1',
				'isdone' => '0','enddate' => '2013-12-25 17:00:00','user_id' => '2','importance' => '5',
				'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
			array('content' => "J'aime les pommes roses", 'people1' => '2', 'people2' => '4', 'people3' => '5','people4' => '2','people5' => '1',
				'isdone' => '0','enddate' => '2013-12-25 17:00:00','user_id' => '2','importance' => '5',
				'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
			array('content' => "J'aime les pommes roses", 'people1' => '2', 'people2' => '4', 'people3' => '5','people4' => '2','people5' => '1',
				'isdone' => '0','enddate' => '2013-12-25 17:00:00','user_id' => '2','importance' => '5',
				'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
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