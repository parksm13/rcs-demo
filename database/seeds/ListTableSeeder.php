<?php

use Illuminate\Database\Seeder;

class ListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$Testerid1 = DB::table("users")->select("id")->where("username","Tester1@junk.com")->get();
		$Testerid2 = DB::table("users")->select("id")->where("username","Tester2@junk.com")->get();
		
        DB::table('list')->insert([
			"list_type" => "Shopping Cart",
			"list_name" => "Cart",
			"creation_date" => "2017-11-11",
			"owner_id" => $Testerid1[0]->id
		]);
		
        DB::table('list')->insert([
			"list_type" => "WishLists",
			"list_name" => "Testers Wish List",
			"creation_date" => "2017-11-11",
			"owner_id" => $Testerid1[0]->id
		]);
		
        DB::table('list')->insert([
			"list_type" => "Shopping Cart",
			"list_name" => "Cart",
			"creation_date" => "2017-11-11",
			"owner_id" => $Testerid2[0]->id
		]);
    }
}