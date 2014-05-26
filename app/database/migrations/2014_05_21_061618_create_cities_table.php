<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 * This migration creates the columns for the cities table. The reversal of 
 * this migration DROPS the table so be careful. The cities table contains the
 * name of the city where a recipe was created. 
 */

class CreateCitiesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('cities', function(Blueprint $table) {
            $table->increments('id');
            $table->string('city_name');
            $table->timestamps();
            $table->integer('state_id')->unsigned(); //Foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('cities');
    }

}
