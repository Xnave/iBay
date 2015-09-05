<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('categories')->insert([
			'id' => NULL,
			'category_name' => 'fashion',
			'created_at' => date("Y-m-d h:i:s"),
			'updated_at' => date("Y-m-d h:i:s"),
		]);
	}
}