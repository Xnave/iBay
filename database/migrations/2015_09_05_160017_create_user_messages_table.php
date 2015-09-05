<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('receiver_id')->unsigned();
			$table->integer('sender_id')->unsigned();
			$table->text('text');
			$table->string('title', 100);
			$table->date('sent_date');
			$table->timestamps();

			$table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('sender_id')->references('id')->on('users')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_messages');
	}

}
