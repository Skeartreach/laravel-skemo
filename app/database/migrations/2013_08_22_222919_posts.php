<?php

use Illuminate\Database\Migrations\Migration;

class Posts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table){
			$table->increments('id');
			$table->string('content');
			$table->integer('people1')->nullable();
			$table->integer('people2')->nullable();
			$table->integer('people3')->nullable();
			$table->boolean('isdone');
			$table->date('enddate');
			$table->integer('user_id');
			$table->integer('importance');
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
		Schema::drop('posts');
	}

}