<?php

/*
 * This is the model for table episodes.
 */

class Episode extends Eloquent {

    protected $fillable = array('episode_name', 'video_url');
    protected $guarded = array('id', 'created_at', 'updated_at');

    /*
     * An Episode has multiple Recipes.
     */

    public function recipes() {
        return $this->has_many('Recipe');
    }

}
