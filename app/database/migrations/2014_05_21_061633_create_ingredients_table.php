<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 * This migration creates the columns for the ingredients table. The reversal of 
 * this migration DROPS the table so be careful. The ingredients table contains
 * the summary for an ingredient. There is a relationship between this table,
 * the spanish_names table, and the english_names table which will give the 
 * ingredient a name.
 */

class CreateIngredientsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('ingredients', function(Blueprint $table) {
            $table->increments('id');
            $table->string('summary', 10000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('ingredients');
    }

}
