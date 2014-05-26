<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 * This migration creates the columns for the spanish_names table. The reversal of 
 * this migration DROPS the table so be careful. The spanish_names table contains
 * the names by which an ingredient might be known. The primary column indicates
 * the name by which this ingredient is most widely known in english. 
 */

class CreateSpanishNamesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('spanish_names', function(Blueprint $table) {
            $table->increments('id');
            $table->string('ing_spanish_name');
            $table->boolean('primary');
            $table->timestamps();
            $table->integer('ingredient_id')->unsigned();  //Foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('spanish_names');
    }

}
