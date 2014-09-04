<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestamps extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('zombies', function($table)
		{
		    $table->dateTime('created_at');
		    $table->dateTime('updated_at');
		});

		Schema::table('commands', function($table)
		{
		    $table->dateTime('created_at');
		    $table->dateTime('updated_at');
		});

		Schema::table('users', function($table)
		{
		    $table->dateTime('created_at');
		    $table->dateTime('updated_at');
		});

		Schema::table('owners', function($table)
		{
			$table->dateTime('created_at');
		    $table->dateTime('updated_at');
		});

		Schema::table('credentials', function($table)
		{
			$table->dateTime('created_at');
		    $table->dateTime('updated_at');
		});
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
