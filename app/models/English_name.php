<?php

/*
 * This is the model for table english_names
 */

class English_name extends Eloquent {

    protected $fillable = array('ing_english_name', 'primary', 'ingredient_id');
    protected $guarded = array('id', 'created_at', 'updated_at');

    /*
     * An Ingredient have have multiple English_names
     */

    public function ingredient() {
        $this->belongsTo('Ingredient');
    }

}
