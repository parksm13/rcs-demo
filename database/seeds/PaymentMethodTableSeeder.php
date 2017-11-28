<?php

use Illuminate\Database\Seeder;

class PaymentMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$Testerid1 = DB::table("users")->select("id")->where("username","Tester1@junk.com")->get();
		
        DB::table('payment_method')->insert([
	    	"type" => "moneyCard",
			"card_number" => "### Card Number ###",
			"security_code" => "000",
			"expiration_date" => "2017-11-11",
			"creation_date" => "2017-11-11",
			"owner_id" => $Testerid1[0]->id
		]);
    }
}