<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RestaurantTableSeeder extends Seeder {

	private function randDate()
		{
			return Carbon::createFromDate(2014, rand(1,12) , rand(0,28) );
		}

	public function run()
	{
		//DB::table('restaurants')->delete();

		// RestaurantTableSeed
		for($i=1; $i<11; ++$i){
			$date = $this->randDate();
			DB::table ('restaurants')->insert([
				'nom' => 'restaurant'.$i,
				'immeuble' => 'imm'.$i,
				'rue' => 'rue'.$i,
				'quartier' => 'qua'.$i,
				'image' => 'img_'.$i.'.jpg',
				'cuisine' => 'cuisine'.$i,
				'description' => " Description ".$i."
				Laravel's database query builder provides a convenient, fluent interface to creating and running database queries. It can be used to perform most database operations in your application and works on all supported database systems.
				The Laravel query builder uses PDO parameter binding to protect your application against SQL injection attacks. There is no need to clean strings being passed as bindings"
			]);
		}
		
	}
}