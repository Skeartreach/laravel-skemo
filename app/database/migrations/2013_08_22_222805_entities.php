<?php

use Illuminate\Database\Migrations\Migration;

class Entities extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entities', function($table){
			$table->increments('id');
			$table->string('name',50);
			$table->string('branch',50);
			$table->string('email',50)->nullable();
			$table->string('phone',50)->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('entities');
	}

}