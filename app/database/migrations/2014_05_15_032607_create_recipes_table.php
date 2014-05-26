<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 * This migration creates the columns for the recipes table. The reversal of
 * this migration DROPS the table so be careful. The recipes table contains
 * the information properties for each recipe. There is also a many to many
 * relationship to ingredients using table recipe_ingredient.
 */

class CreateRecipesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('recipes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('recipe_name', 1000);
            $table->string('time_start'); //Time in seconds when the recipe starts in the video
            $table->string('time_end'); //Time in seconds when the reipce ends in the video
            $table->boolean('has_meat');
            $table->boolean('is_drink');
            $table->boolean('is_desert');
            $table->boolean('is_soup');
            $table->boolean('is_side_dish');
            $table->timestamps();
            $table->integer('episode_id')->unsigned(); //Foreign key
            $table->integer('city_id')->unsigned(); //Foreign key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('recipes');
    }

}
