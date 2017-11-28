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
		DB::table('users')->insert([
			"name" => "Tester1",
			"email" => "tester2junk.com",
			"username" => "Tester1",
			"password" => "P@SSw0rd",
			"creation_date" => "2017-11-11"
		]);
		
		DB::table('users')->insert([
			"name" => "Tester2",
			"email" => "tester2@junk.com",
			"username" => "Tester2",
			"password" => "P@SSw0rd",
			"creation_date" => "2017-11-11"
		]);
    }
}
