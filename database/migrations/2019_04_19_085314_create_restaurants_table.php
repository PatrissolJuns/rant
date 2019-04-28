<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRestaurantsTable extends Migration {

	public function up()
	{
		Schema::create('restaurants', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom', 100);
			$table->string('immeuble', 20);
			$table->string('rue', 20);
			$table->string('quartier', 50);
			$table->string('cuisine', 50);
			$table->string('image', 100);
			$table->longText('description');
		});
	}

	public function down()
	{
		Schema::drop('restaurants');
	}
}