<?php

use Illuminate\Database\Migrations\Migration;

class InsertUsers extends Migration {

	/**
	 * Run the migrations
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(
		array(
			array('name' => 'Bastien', 'idlog' => 'Bastien', 'passlog' => 'Bastien', 'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
			array('name' => 'David', 'idlog' => 'David', 'passlog' => 'David', 'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
			array('name' => 'Sébastien', 'idlog' => 'Sébastien', 'passlog' => 'Sébastien', 'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
			array('name' => 'James', 'idlog' => 'James', 'passlog' => 'James', 'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
			array('name' => 'Aurel', 'idlog' => 'Aurel', 'passlog' => 'Aurel', 'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s')),
			array('name' => 'Charles', 'idlog' => 'Charles', 'passlog' => 'Charles', 'created_at' =>date('Y-m-d H:m:s'), 'updated_at' =>date('Y-m-d H:m:s'))
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