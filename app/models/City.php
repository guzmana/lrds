<?php

/*
 * This is the model for the table cities. The City model has to specify a 
 * table name since the plural of city is not citys. Laravel has to be told what 
 * the name of the table is.
 */

class City extends Eloquent {

    protected $fillable = array('city_name', 'state_id');
    protected $guarded = array('id', 'created_at', 'updated_at');
    protected $table = 'cities';

    /*
     * A City belongs to a State
     */

    public function state() {
        return $this->belongsTo('State');
    }

    /*
     * Multiple Recipes can be attributed to one City.
     */

    public function recipes() {
        return $this->hasMany('Recipe');
    }

}
