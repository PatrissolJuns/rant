<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTablerestsTable extends Migration {

	public function up()
	{
		Schema::create('tablerests', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom', 20);
			$table->integer('nb_place');
			$table->integer('prix');
			$table->date('date_reservation')->nullable(true);
			$table->integer('rest_id')->unsigned();
			$table->integer('user_id')->unsigned()->nullable(true);
		});
	}

	public function down()
	{
		Schema::drop('tablerests');
	}
}