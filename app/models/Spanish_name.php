<?php

/*
 * This is the model for the table spanish_names.
 */

class Spanish_name extends Eloquent {

    protected $fillable = array('ing_spanish_name', 'primary', 'ingredient_id');
    protected $guarded = array('id', 'created_at', 'updated_at');

    /*
     * An Ingredient can have multiple Spanish_names.
     */

    public function ingredient() {
        $this->belongsTo('Ingredient');
    }

}
