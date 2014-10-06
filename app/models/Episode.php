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
        return $this->hasMany('Recipe');
    }

    public function scopeNames() {
        $episode = Episode::all()->lists('episode_name');
        return array_combine($episode, $episode);
    }

}
