<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder {

	private function randDate()
		{
			return Carbon::createFromDate(2014, rand(1,12) , rand(0,28) );
		}

	public function run()
	{
		//DB::table('users')->delete();

		// UserTAbleSeed
		for($i=1; $i<11; ++$i){
			DB::table('users')->insert([
					'nom' => 'nom'.$i,
					'prenom' => 'prenom'.$i,
					'email' => 'email'.$i.'@gmail.com',
					'password' => bcrypt('password'.$i)
			]);
		}
	}
}