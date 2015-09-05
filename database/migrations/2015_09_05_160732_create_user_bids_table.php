<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBidsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_bids', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('buyer_id')->unsigned();
			$table->integer('product_id')->unsigned();
			$table->integer('bid')->unsigned();
			$table->date('bid_date');
			$table->timestamps();

			$table->foreign('buyer_id')->references('id')->on('users')->onDelete('restrict');
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
		Schema::drop('user_bids');
	}

}
