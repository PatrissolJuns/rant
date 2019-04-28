<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TablerestTableSeeder extends Seeder {

	private function randDate()
		{
			return Carbon::createFromDate(2014, rand(1,12) , rand(0,28) );
			
		}
	
	public function run()
	{
		//DB::table('tablerests')->delete();

		// TablesTableSeed
		
		for($i=1; $i<16; ++$i){
			$date = $this->randDate();
			DB::table('tablerests')->insert([
					'nom' => 'table'.$i,
					'nb_place' => rand(2, 15),
					'prix' => rand(5, 100),
					'date_reservation' => $this->randDate(),
					'rest_id' => rand(1, 10),
					'user_id' => rand(1, 10) 
			]);
		}
		for($i=16; $i<27; ++$i){
			$date = $this->randDate();
			DB::table('tablerests')->insert([
					'nom' => 'table'.$i,
					'nb_place' => rand(2, 15),
					'prix' => rand(5, 100),
					'rest_id' => rand(1, 10),
			]);
		}
	}
}