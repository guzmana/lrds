<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 * This migration creates the columns for the ingredient_images table. The 
 * reversal of this migration DROPS the table so be careful. The
 * ingredient_images table provides a path to an image that is related to an 
 * ingredient. The primary column indicates what image best describes the 
 * ingredient
 */

class CreateIngredientImagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('ingredient_images', function(Blueprint $table) {
            $table->increments('id');
            $table->string('ing_image_path', 1000);
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
        Schema::drop('ingredient_images');
    }

}
