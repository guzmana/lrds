<?php

/*
 * This is the model for the table ingredients.
 */

class Ingredient extends Eloquent {

    protected $fillable = array('summary');
    protected $guarded = array('id', 'created_at', 'updated_at');

    /*
     * An Ingredient can belong to multiple Recipes
     */

    public function recipes() {
        return $this->belongsToMany('Recipe');
    }

    /*
     * An Ingredient can have multiple Spanish_names
     */

    public function spanish_names() {
        return $this->hasMany('Spanish_name');
    }

    /*
     * An Ingredient can have multiple English_names
     */

    public function english_names() {
        return $this->hasMany('English_name');
    }

    /*
     * An Ingredient can have multiple Ingredient_images
     */

    public function ingredient_images() {
        return $this->hasMany('Ingredient_image');
    }

    /*
     * An Ingredient can have multiple Ingredient_links
     */

    public function ingredient_links() {
        return $this->hasMany('Ingredient_link');
    }

}
