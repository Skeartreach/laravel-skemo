<?php

use Illuminate\Database\Migrations\Migration;

class InsertEntities extends Migration {

	/**
	 * Run the migrations
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('entities')->insert(
		array(
			array('name' => 'Bastien', 'branch' => 'People', 'email' => 'skeartreach@gmail.com', 'phone'=>'079 456 07 41' ,'created_at' =>date('Y-m-d'), 'updated_at' =>date('Y-m-d')),
			array('name' => 'Boris', 'branch' => 'People', 'email' => 'boris.bouattit.1@facebook.com', 'phone'=>'078 897 18 13' ,'created_at' =>date('Y-m-d'), 'updated_at' =>date('Y-m-d')),
			array('name' => 'Diane', 'branch' => 'People', 'email' => 'diane.gimmi@gmail.com', 'phone'=>'079 456 07 41' ,'created_at' =>date('Y-m-d'), 'updated_at' =>date('Y-m-d')),
			array('name' => "Let's go", 'branch' => 'Fitness', 'email' => '', 'phone'=>'021 653 27 07' ,'created_at' =>date('Y-m-d'), 'updated_at' =>date('Y-m-d'))
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