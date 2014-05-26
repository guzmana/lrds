<?php

/*
 * This is the model for the table states.
 */

class State extends Eloquent {

    protected $fillable = array('state_name');
    protected $guarded = array('id', 'created_at', 'updated_at');

    /*
     * A State can have multiple Cities
     */

    public function cities() {
        return $this->has_many('City');
    }

    /*
     * A State can have multiple Episodes. This is determined through its
     * relationship with a City.
     */

    public function recipes() {
        return $this->hasManyThrough('Recipe', 'City');
    }

}
