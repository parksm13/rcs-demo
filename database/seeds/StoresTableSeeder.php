<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
	    	'name' => 'Walmart',
	    	'address' => '210 Greenville Blvd SW, Greenville, NC 27834',
	    	'location' => '35.577475,-77.387267'
		]);

        DB::table('stores')->insert([
	    	'store_name' => 'Food Lion',
	    	'address' => '2460 Stantonsburg Rd, Greenville, NC 27835',
	    	'location' => '35.606880,-77.413766'
		]);

        DB::table('stores')->insert([
	    	'store_name' => 'Harris Teeter',
	    	'address' => '1400 Charles Blvd, University Center, Greenville, NC 27858',
	    	'location' => '35.600766,-77.372418'
		]);
	
		DB::table('stores')->insert([
	    	'store_name' => 'Target',
	    	'address' => '3040 S Evans St, Greenville, NC 27834',
	    	'location' => '35.579083,-77.383326'
		]);
    }
}