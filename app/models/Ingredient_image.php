<?php

/*
 * This is the model for the table ingredient_images
 */

class Ingredient_image extends Eloquent {

    protected $fillable = array('ing_image_path', 'primary', 'ingredient_id');
    protected $guarded = array('id', 'created_at', 'updated_at');

    /*
     * An Ingredient can have multiple Ingredient_images
     */

    public function ingredient() {
        $this->belongsTo('Ingredient');
    }

}
