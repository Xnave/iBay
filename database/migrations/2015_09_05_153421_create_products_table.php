<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

			$table->integer('seller_id')->unsigned();
			$table->integer('item_number')->unsigned();
			$table->tinyInteger('sale_type')->unsigned();
			$table->string('title', 100);
			$table->integer('sub_category_id')->unsigned();
			$table->integer('condition_id')->unsigned();
			$table->integer('sold_count');
			$table->integer('quantity')->default(1);
			$table->date('start_date');
			$table->date('end_date');
			$table->string('description', 1000);
			$table->double('price', 15, 2)->unsigned();
			$table->double('shipping_price', 15, 2)->unsigned();
			$table->string('buy_now_payment_value', 15);
			$table->string('add_to_cart_payment_value', 15);
			$table->tinyInteger('return_policy_days')->nullable()->unsigned();

			$table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('restrict');
			$table->foreign('seller_id')->references('id')->on('users')->onDelete('restrict');
			$table->foreign('condition_id')->references('id')->on('conditions')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
