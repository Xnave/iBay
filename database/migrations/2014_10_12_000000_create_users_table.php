<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name', 25);
			$table->string('last_name', 25);
			$table->string('address', 75)->nullable();
			$table->string('city', 50)->nullable();
			$table->string('postal_code', 7)->nullable();
			$table->string('phone_number', 15)->nullable();
			$table->boolean('is_admin');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->integer('positive_feedback_count')->default(0);
			$table->integer('negative_feedback_count')->default(0);
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
