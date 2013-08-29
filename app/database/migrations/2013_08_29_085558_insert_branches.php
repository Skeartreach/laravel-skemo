<?php

use Illuminate\Database\Migrations\Migration;

class InsertBranches extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('branches')->insert(
		array(
			array('name' => 'People','created_at' =>date('Y-m-d'), 'updated_at' =>date('Y-m-d')),
			array('name' => 'Fitness','created_at' =>date('Y-m-d'), 'updated_at' =>date('Y-m-d')),
			array('name' => 'Impôts','created_at' =>date('Y-m-d'), 'updated_at' =>date('Y-m-d')),
			array('name' => 'Moto','created_at' =>date('Y-m-d'), 'updated_at' =>date('Y-m-d')),
			array('name' => 'Auto','created_at' =>date('Y-m-d'), 'updated_at' =>date('Y-m-d')),
			array('name' => 'Informatique','created_at' =>date('Y-m-d'), 'updated_at' =>date('Y-m-d')),
			array('name' => 'Administration','created_at' =>date('Y-m-d'), 'updated_at' =>date('Y-m-d'))
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