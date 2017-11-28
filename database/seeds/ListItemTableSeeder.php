<?php

use Illuminate\Database\Seeder;

class ListItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$Testerid1 = DB::table("users")->select("id")->where("username","Tester1@junk.com")->get()[0]->id;
		$Testerid2 = DB::table("users")->select("id")->where("username","Tester2@junk.com")->get()[0]->id;
		
		$t1_Wish = DB::table("list")->select("list_id")->where("owner_id", $Testerid1)->get()[1]->list_id;
		$t2_cart = DB::table("list")->select("list_id")->where("owner_id", $Testerid2)->get()[0]->list_id;
			
		// insert first users wish list
				
        DB::table('list_item')->insert([
			"list_item_name" => "Shopping Cart",
			"creation_date" => "2017-11-11",
			"item_id" => db::table("items")->select("item_id")->where("barcode", "1")->get()[0]->item_id,
			"list_id" => $t1_Wish
		]);
				
        DB::table('list_item')->insert([
			"list_item_name" => "Shopping Cart",
			"creation_date" => "2017-11-11",
			"item_id" => db::table("items")->select("item_id")->where("barcode", "6")->get()[0]->item_id,
			"list_id" => $t1_Wish
		]);	
		
        DB::table('list_item')->insert([
			"list_item_name" => "Shopping Cart",
			"creation_date" => "2017-11-11",
			"item_id" => db::table("items")->select("item_id")->where("barcode", "11")->get()[0]->item_id,
			"list_id" => $t1_Wish
		]);	
		
        DB::table('list_item')->insert([
			"list_item_name" => "Shopping Cart",
			"creation_date" => "2017-11-11",
			"item_id" => db::table("items")->select("item_id")->where("barcode", "16")->get()[0]->item_id,
			"list_id" => $t1_Wish
		]);	
		
		//insert second person shopping cart
		
        DB::table('list_item')->insert([
			"list_item_name" => "Shopping Cart",
			"creation_date" => "2017-11-11",
			"item_id" => db::table("items")->select("item_id")->where("barcode", "2")->get()[0]->item_id,
			"list_id" => $t1_Wish
		]);	
		
        DB::table('list_item')->insert([
			"list_item_name" => "Shopping Cart",
			"creation_date" => "2017-11-11",
			"item_id" => db::table("items")->select("item_id")->where("barcode", "7")->get()[0]->item_id,
			"list_id" => $t1_Wish
		]);	
		
        DB::table('list_item')->insert([
			"list_item_name" => "Shopping Cart",
			"creation_date" => "2017-11-11",
			"item_id" => db::table("items")->select("item_id")->where("barcode", "12")->get()[0]->item_id,
			"list_id" => $t1_Wish
		]);		
		
        DB::table('list_item')->insert([
			"list_item_name" => "Shopping Cart",
			"creation_date" => "2017-11-11",
			"item_id" => db::table("items")->select("item_id")->where("barcode", "17")->get()[0]->item_id,
			"list_id" => $t1_Wish
		]);
    }
}