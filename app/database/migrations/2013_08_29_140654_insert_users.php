<?php

use Illuminate\Database\Migrations\Migration;

class InsertUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(
		array(
			array('username' => 'Bastien', 'password' => '335143b87c926603fa8d823f2951025abb2ecfab', 'firstname' => 'Bastien', 'lastname'=>'Girardet' , 'email'=>'skeartreach@gmail.com' ,'created_at' =>date('Y-m-d'), 'updated_at' =>date('Y-m-d'))
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