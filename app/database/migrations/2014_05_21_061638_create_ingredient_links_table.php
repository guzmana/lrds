<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 * This migration creates the columns for the ingredient_links table. The 
 * reversal of this migration DROPS the table so be careful. The ingredient_links
 * table contains links that are relevant to an ingredient.
 */

class CreateIngredientLinksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('ingredient_links', function(Blueprint $table) {
            $table->increments('id');
            $table->string('info_url');
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
        Schema::drop('ingredient_links');
    }

}
