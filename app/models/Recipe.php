<?php

/*
 * This is the model for the table recipes.
 */

class Recipe extends Eloquent {

    protected $fillable = array('recipe_name', 'time_start', 'time_end', 'has_meat', 'is_drink', 'is_desert', 'is_soup', 'is_side_dish', 'episode_id', 'city_id');
    protected $guarded = array('id', 'created_at', 'updated_at');

    /*
     * A Recipe belongs to an Episode.
     */

    public function episode() {
        return $this->belongsTo('Episode');
    }

    /*
     * A Recipe belongs to a City.
     */

    public function city() {
        return $this->belongsTo('City');
    }

    /*
     * A Recipe can have multiple Ingredients.
     */

    public function ingredients() {
        return $this->belongsToMany('Ingredient');
    }

    public function validate($input) {

        $rules = array(
            'recipe_name' => 'Required|Alpha|unique:recipes',
            'time_start' => 'Required|Integer',
            'time_end' => 'Required|Integer',
        );

        return Validator::make($input, $rules);
    }

}
