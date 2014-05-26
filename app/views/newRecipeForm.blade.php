{{ Form::open(array('action' => 'RecipeController@createRecipe')) }}

{{ Form::label('recipe_name', 'Name of recipe') }}
{{ Form::text('recipe_name') }}

{{ Form::label('time_start', 'Start time of recipe') }}
{{ Form::text('time_start') }}

{{ Form::label('time_end', 'End time of recipe') }}
{{ Form::text('time_end') }}

{{ Form::label('has_meat', 'Does dish have meat?') }}
{{ Form::checkbox('has_meat','value') }}

{{ Form::label('is_drink', 'Is recipe a drink?') }}
{{ Form::checkbox('is_drink','value') }}

{{ Form::label('is_desert', 'Is recipe a desert?') }}
{{ Form::checkbox('is_desert','value') }}

{{ Form::label('is_soup', 'Is recipe a soupe') }}
{{ Form::checkbox('is_soup','value') }}

{{ Form::label('is_side_dish', 'Is recipe a side dish') }}
{{ Form::checkbox('is_side_dish','value') }}

{{ Form::label('new_existing_city', 'New or existing city') }}

{{ Form::radio('new_existing_city', 'new', true) }}
{{ Form::label('new_city', 'City') }}
{{ Form::text('new_city') }}

{{ Form::label('new_state', 'State') }}
{{ Form::text('new_state') }}

{{ Form::radio('new_existing_city', 'existing') }}
{{ Form::label('city', 'City') }}
{{ Form::select('city', array()) }}

{{ Form::submit('Save recipe') }}

{{ Form::close() }}