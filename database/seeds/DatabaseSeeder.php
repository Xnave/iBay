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
		DB::table('categories')->insert(array(
				array('id' => NULL, 'category_name' => 'Fashion', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
				array('id' => NULL, 'category_name' => 'Electronics', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
				array('id' => NULL, 'category_name' => 'Collectibles & Art', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
				array('id' => NULL, 'category_name' => 'Home & Garden', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
				array('id' => NULL, 'category_name' => 'Sporting Goods', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
				array('id' => NULL, 'category_name' => 'Motors', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
				array('id' => NULL, 'category_name' => 'Other', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
		));

		DB::table('conditions')->insert(array(
				array('id' => NULL, 'condition_name' => 'New', 'condition_description' => 'A brand-new, unused, unopened, undamaged item in its original packaging (where packaging is applicable). Packaging should be the same as what is found in a retail store, unless the item is handmade or was packaged by the manufacturer in non-retail packaging, such as an unprinted box or plastic bag. See the sellers listing for full details.', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
				array('id' => NULL, 'condition_name' => 'New other (see details)', 'condition_description' => 'A new, unused item with absolutely no signs of wear. The item may be missing the original packaging, or in the original packaging but not sealed. The item may be a factory second or a new, unused item with defects. See the sellers listing for full details and description of any imperfections.', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
				array('id' => NULL, 'condition_name' => 'Manufacturer refurbished ', 'condition_description' => 'An item that has been professionally restored to working order by a manufacturer or manufacturer-approved vendor. This means the product has been inspected, cleaned, and repaired to meet manufacturer specifications and is in excellent condition. This item may or may not be in the original packaging. See the sellers listing for full details.', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
				array('id' => NULL, 'condition_name' => 'Seller refurbished ', 'condition_description' => 'An item that has been restored to working order by the eBay seller or a third party not approved by the manufacturer. This means the item has been inspected, cleaned, and repaired to full working order and is in excellent condition. This item may or may not be in original packaging. See the sellers listing for full details.', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
				array('id' => NULL, 'condition_name' => 'Used ', 'condition_description' => 'An item that has been used previously. The item may have some signs of cosmetic wear, but is fully operational and functions as intended. This item may be a floor model or store return that has been used. See the sellers listing for full details and description of any imperfections.', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
				array('id' => NULL, 'condition_name' => 'For parts or not working ', 'condition_description' => 'An item that does not function as intended and is not fully operational. This includes items that are defective in ways that render them difficult to use, items that require service or repair, or items missing essential components. See the sellers listing for full details.', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
		));

		DB::table('sale_types')->insert(array(
				array('id' => NULL, 'code' => 'f1db2dcda8ad492cc6598a30b9e73dfa', 'name' => 'Auction', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
				array('id' => NULL, 'code' => '232ace077993c3d50785921ec3b1cb85', 'name' => 'Buy It Now', 'created_at' => date("Y-m-d h:i:s"), 'updated_at' => date("Y-m-d h:i:s") ),
		));

	}
}