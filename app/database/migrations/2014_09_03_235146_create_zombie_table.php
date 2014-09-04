<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZombieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zombies', function($table)
		{
		    $table->increments('id');
		    $table->string('ip');
		    $table->string('hostname');
		    $table->string('authentication_key');
		    $table->string('os_version');
		    $table->integer('owner_id');
		});

		Schema::create('commands', function($table)
		{
		    $table->increments('id');
		    $table->dateTime('executed_at');
		    $table->string('name');
		    $table->string('options');
		    $table->string('output');
		    $table->integer('zombie_id');
		});

		Schema::create('users', function($table)
		{
		    $table->increments('id');
		    $table->string('username');
		    $table->string('password')->nullable();
		    $table->integer('zombie_id');
		});

		Schema::create('owners', function($table)
		{
			$table->increments('id');
			$table->string('name');
		});

		Schema::create('credentials', function($table)
		{
			$table->increments('id');
			$table->string('server');
			$table->string('username');
			$table->string('password');
			$table->integer('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('zombies');
		Schema::drop('commands');
		Schema::drop('users');
		Schema::drop('owners');
		Schema::drop('credentials');
	}

}
