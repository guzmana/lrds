<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', function() {
    
});

/*
 * This route takes the user to the recipe creation form.
 */
Route::get('recipe/new', 'RecipeController@newRecipeForm');

Route::post('recipe/new-submit', 'RecipeController@submitRecipe');
