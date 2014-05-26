<?php

class RecipeController extends BaseController {

    /*
     * Return form to create a recipe
     */
    public function newRecipeForm() {
        return View::make('newRecipeForm');
    }

    public function submitRecipe() {
        $state = new State;
        $state->state_name = Input::get('new_state');
        $state->save();
        $input = Input::all();
        return $input;
    }

}
