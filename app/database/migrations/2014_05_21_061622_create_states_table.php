<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 * This migration creates the columns for the states table. The reversal of 
 * this migration DROPS the table so be careful. The states table has the name
 * of a state where a city is located. 
 */

class CreateStatesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('states', function(Blueprint $table) {
            $table->increments('id');
            $table->string('state_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('states');
    }

}
