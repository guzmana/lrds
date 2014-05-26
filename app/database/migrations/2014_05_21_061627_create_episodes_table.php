<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 * This migration creates the columns for the episodes table. The reversal of 
 * this migration DROPS the table so be careful. The episodes table contains 
 * properties relevant to an episode like its name and URL. There are normally
 * multiple recipes per episode.
 */

class CreateEpisodesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('episodes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('episode_name');
            $table->string('video_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('episodes');
    }

}
