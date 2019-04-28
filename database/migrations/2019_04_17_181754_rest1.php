<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rest1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rest1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',      20)->unique();
            $table->string('immeuble',     20);
            $table->string('rue',     20);
            $table->string('quartier',     20);
            $table->string('cuisine',     20);
            $table->string('image',     60);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('rest1');
    }
}
