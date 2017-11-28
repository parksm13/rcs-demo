<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$Testerid1 = DB::table("users")->select("id")->where("username","Tester1@junk.com")->get();
		if(sizeof($Testerid1) == 0){
			DB::table('users')->insert([
				"name" => "Tester1",
				"email" => "tester1@junk.com",
				"username" => "Tester1@junk.com",
				"password" => Hash::make('P@SSw0rd'),
				"creation_date" => "2017-11-11"
			]);
		}
		
		$Testerid2 = DB::table("users")->select("id")->where("username","Tester2@junk.com")->get();
		if(sizeof($Testerid2) == 0){
			DB::table('users')->insert([
				"name" => "Tester2",
				"email" => "tester2@junk.com",
				"username" => "Tester2@junk.com",
				"password" => Hash::make("P@SSw0rd"),
				"creation_date" => "2017-11-11"
			]);
		}
    }
}
