<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbacksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('feedbacks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

			$table->string('comment', 400);
			$table->integer('buyer_id')->unsigned();
			$table->integer('seller_id')->unsigned();
			$table->integer('product_id')->unsigned();
			$table->boolean('rating')->nullable();

			$table->foreign('buyer_id')->references('id')->on('users')->onDelete('restrict');
			$table->foreign('seller_id')->references('id')->on('users')->onDelete('restrict');
			$table->foreign('product_id')->references('id')->on('products')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('feedbacks');
	}

}
