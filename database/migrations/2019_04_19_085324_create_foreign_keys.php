<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('tablerests', function(Blueprint $table) {
			$table->foreign('rest_id')->references('id')->on('restaurants')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tablerests', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('tablerests', function(Blueprint $table) {
			$table->dropForeign('tablerests_rest_id_foreign');
		});
		Schema::table('tablerests', function(Blueprint $table) {
			$table->dropForeign('tablerests_user_id_foreign');
		});
	}
}