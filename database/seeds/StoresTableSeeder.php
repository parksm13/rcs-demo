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
	    'name' => 'Store 1',
	    'address' => '123 Main St.',
	    'location' => 'GPS Coordinates'
	]);

        DB::table('stores')->insert([
	    'name' => 'Store 2',
	    'address' => '456 Main St.',
	    'location' => 'GPS Coordinates'
	]);

        DB::table('stores')->insert([
	    'name' => 'Store 3',
	    'address' => '789 Main St.',
	    'location' => 'GPS Coordinates'
	]);
    }
}
