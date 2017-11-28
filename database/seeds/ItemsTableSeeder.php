<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
	    	'barcode' => '1',
	    	'price' => 2.50,
	    	'creation_date' => '2017-11-25',
	    	'item_name' => 'Milk, 1 Gallon',
	    	'store_id' => 1
		]);

    	DB::table('items')->insert([
	    	'barcode' => '2',
	    	'price' => 2.00,
	    	'creation_date' => '2017-11-10',
	    	'item_name' => 'Red Delicious Apples',
	    	'store_id' => 1
		]);
	
		DB::table('items')->insert([
	    	'barcode' => '3',
	    	'price' => 3.50,
	    	'creation_date' => '2017-10-15',
	    	'item_name' => 'Potato Chips',
	    	'store_id' => 1
		]);
	
		DB::table('items')->insert([
	    	'barcode' => '4',
	    	'price' => 6.50,
	    	'creation_date' => '2017-09-20',
	    	'item_name' => 'LED Lightbulb',
	    	'store_id' => 1
		]);
	
		DB::table('items')->insert([
	    	'barcode' => '5',
	    	'price' => 8.00,
	    	'creation_date' => '2017-10-08',
	    	'item_name' => 'Tylenol',
	    	'store_id' => 1
		]);
	
		DB::table('items')->insert([
	    	'barcode' => '6',
	    	'price' => 3.00,
	    	'creation_date' => '2017-11-20',
	    	'item_name' => 'Whole Wheat Bread',
	    	'store_id' => 2
		]);
	
		DB::table('items')->insert([
	    	'barcode' => '7',
	    	'price' => 3.00,
	    	'creation_date' => '2017-10-28',
	    	'item_name' => 'Cheerios Cereal',
	    	'store_id' => 2
		]);
	
		DB::table('items')->insert([
	    	'barcode' => '8',
	    	'price' => 3.50,
	    	'creation_date' => '2017-10-10',
	    	'item_name' => 'Eggo Frozen Waffles',
	    	'store_id' => 2
		]);
	
		DB::table('items')->insert([
	    	'barcode' => '9',
	    	'price' => 2.00,
	    	'creation_date' => '2017-11-17',
	    	'item_name' => 'Banana',
	    	'store_id' => 2
		]);
	
		DB::table('items')->insert([
	    	'barcode' => '10',
	    	'price' => 5.00,
	    	'creation_date' => '2017-11-14',
	    	'item_name' => 'Popcorn',
	    	'store_id' => 2
		]);
	
		DB::table('items')->insert([
	    	'barcode' => '11',
	    	'price' => 4.00,
	    	'creation_date' => '2017-11-21',
	    	'item_name' => 'Organic Apples',
	    	'store_id' => 3
		]);
		
		DB::table('items')->insert([
	    	'barcode' => '12',
	    	'price' => 3.50,
	    	'creation_date' => '2017-11-21',
	    	'item_name' => 'Fruit Loops Cereal',
	    	'store_id' => 3
		]);
		
		DB::table('items')->insert([
	    	'barcode' => '13',
	    	'price' => 14.00,
	    	'creation_date' => '2017-11-25',
	    	'item_name' => 'Steak',
	    	'store_id' => 3
		]);
		
		DB::table('items')->insert([
	    	'barcode' => '14',
	    	'price' => 4.00,
	    	'creation_date' => '2017-10-20',
	    	'item_name' => 'Dasani Bottled Water, 12 pack',
	    	'store_id' => 3
		]);
		
		DB::table('items')->insert([
	    	'barcode' => '15',
	    	'price' => 2.00,
	    	'creation_date' => '2017-11-22',
	    	'item_name' => '2% Milk, 1/2 Gallon',
	    	'store_id' => 3
		]);
		
		DB::table('items')->insert([
	    	'barcode' => '16',
	    	'price' => 1.00,
	    	'creation_date' => '2017-10-10',
	    	'item_name' => 'Coca Cola, 2 Liter',
	    	'store_id' => 4
		]);
		
		DB::table('items')->insert([
	    	'barcode' => '17',
	    	'price' => 2.50,
	    	'creation_date' => '2017-10-15',
	    	'item_name' => 'Crest Toothpaste',
	    	'store_id' => 4
		]);
		
		DB::table('items')->insert([
	    	'barcode' => '18',
	    	'price' => 14.00,
	    	'creation_date' => '2017-08-10',
	    	'item_name' => 'Bounty Paper Towels',
	    	'store_id' => 4
		]);
		
		DB::table('items')->insert([
	    	'barcode' => '19',
	    	'price' => 1.50,
	    	'creation_date' => '2017-08-20',
	    	'item_name' => 'Campbells Soup',
	    	'store_id' => 4
		]);
		
		DB::table('items')->insert([
	    	'barcode' => '20',
	    	'price' => 3.50,
	    	'creation_date' => '2017-11-10',
	    	'item_name' => 'Oreo Cookies',
	    	'store_id' => 4
		]);
	
    }
}