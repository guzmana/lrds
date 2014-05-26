<?php

/*
 * This is the model for the table ingredient_links.
 */

class Ingredient_link extends Eloquent {

    protected $fillable = array('info_url', 'ingredient_id');
    protected $guarded = array('id', 'created_at', 'updated_at');

    /*
     * An Ingredient can have multiple Ingredient_links
     */

    public function ingredient() {
        $this->belongsTo('Ingredient');
    }

}
