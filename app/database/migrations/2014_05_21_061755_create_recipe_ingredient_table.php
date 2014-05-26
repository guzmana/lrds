<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 * This migration creates the columns for the recipe_ingredient table. 
 * The reversal of this migration DROPS the table so be careful. This table
 * is the pivot tabble to create the relationship between recipes and ingredients
 */

class CreateRecipeIngredientTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('recipe_ingredient', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('recipe_id')->unsigned(); //Foreign key
            $table->integer('ingredient_id')->unsigned(); //Foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('recipe_ingredient');
    }

}
