<?php

class RecipeController extends BaseController {
    /*
     * Return form to create a recipe
     */

    public function newRecipeForm() {
        return View::make('newRecipeForm');
    }

    public function submitRecipe() {
        if (Input::get("new_or_existing_episode") == "new_episode")
        {
                $episode = new Episode;
                $episode->episode_name = Input::get('new_episode_name');
                $episode->video_url = Input::get('new_video_url');
                $episode->save();
        } elseif(Input::get("new_or_existing_episode") == "existing_episode")
        {
                $episode = Episode::where('episode_name','=',Input::get('episode_name'))->first();
                print $episode;
        } else {
                //TODO
        }
		
        $recipe = new Recipe;
        $recipe->recipe_name = Input::get('recipe_name');
        $recipe->time_start = Input::get('time_start');
        $recipe->time_end = Input::get('time_end');
        if (Input::has('has_meat')) {
            $recipe->has_meat = true;
        } else {
            $recipe->has_meat = false;
        }
        if (Input::has('is_drink')) {
            $recipe->is_drink = true;
        } else {
            $recipe->is_drink = false;
        }
        if (Input::has('is_desert')) {
            $recipe->is_desert = true;
        } else {
            $recipe->is_desert = false;
        }
        if (Input::has('is_soup')) {
            $recipe->is_soup = true;
        } else {
            $recipe->is_soup = false;
        }
        if (Input::has('is_side_dish')) {
            $recipe->is_side_dish = true;
        } else {
            $recipe->is_side_dish = false;
        }
        $recipe->save();

        if (Input::get('new_or_existing_city') == "new_city") {
            $city = new City;
            $city->city_name = Input::get('new_city');
            $city->save();
            $state = State::where('state_name', '=', Input::get('existing_state'))->first();
            $state->cities()->save($city);
        } elseif (Input::get('new_or_existing_city') == "new_location") {
            $city = new City;
            $city->city_name = Input::get('new_location_city');
            $city->save();
            $state = new State;
            $state->state_name = Input::get('new_location_state');
            $state->save();
            $state->cities()->save($city);
        } elseif (Input::get('new_or_existing_city') == "existing") {
            $location = Input::get('location');
            $city_state = explode(",", $location);
            $city = City::where('city_name', '=', trim($city_state[0]))->first();
        } else {
            //TODO: Add code to handle this situation
        }
  
        $recipe->city()->associate($city);
        $recipe->episode()->associate($episode);
        $recipe->save();

        $input = Input::all();
        return $input;
    }

}
