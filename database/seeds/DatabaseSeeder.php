<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('RestaurantTableSeeder');
		$this->command->info('Restaurant table seeded!');

		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');

		$this->call('TablerestTableSeeder');
		$this->command->info('Tablerest table seeded!');
	}
}