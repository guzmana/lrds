<style>
</style>

{{ Form::open(array('action' => 'RecipeController@submitRecipe')) }}

<fieldset>
    <div>
        {{ Form::label('recipe_name', 'Recipe Name') }}
        {{ Form::text('recipe_name') }}
    </div>
    <div>
        {{ Form::label('time_start', 'Start time in seconds') }}
        {{ Form::text('time_start') }}
    </div>
    <div>
        {{ Form::label('time_end', 'End time in seconds') }}
        {{ Form::text('time_end') }}
    </div>
    <div>
        {{ Form::label('has_meat', 'Does dish have meat?') }}
        {{ Form::checkbox('has_meat','value') }}
    </div>
    <div>
        {{ Form::label('is_drink', 'Is recipe a drink?') }}
        {{ Form::checkbox('is_drink','value') }}
    </div>
    <div>
        {{ Form::label('is_desert', 'Is recipe a desert?') }}
        {{ Form::checkbox('is_desert','value') }}
    </div>
    <div>
        {{ Form::label('is_soup', 'Is recipe a soup?') }}
        {{ Form::checkbox('is_soup','value') }}
    </div>
    <div>
        {{ Form::label('is_side_dish', 'Is recipe a side dish?') }}
        {{ Form::checkbox('is_side_dish','value') }}
    </div>
</fieldset>
<fieldset>
    <div>
        {{ Form::label('new_or_existing_episode', 'New or existing episode') }}
    </div>
    <div>
        {{ Form::radio('new_or_existing_episode', 'new_episode', true) }}
        {{ Form::label('new_episode_name', 'New episode name') }}
        {{ Form::text('new_episode_name') }}

        {{ Form::label('new_video_url', 'Video URL') }}
        {{ Form::text('new_video_url') }}
    </div>
    <div>
        {{ Form::radio('new_or_existing_episode', 'existing_episode') }}
        {{ Form::label('episode_name', 'Existing episode') }}
        {{ Form::select('episode_name', Episode::names()) }}
    </div>
</fieldset>
<fieldset>
    {{ Form::label('new_or_existing_city', 'New or existing city') }}
    <div>
        {{ Form::radio('new_or_existing_city', 'new_location', true) }}
        {{ Form::label('new_location_city', 'New city and state. New city') }}
        {{ Form::text('new_location_city') }}

        {{ Form::label('new_location_state', 'State') }}
        {{ Form::text('new_location_state') }}
    </div>
    <div>
        {{ Form::radio('new_or_existing_city', 'new_city', true) }}
        {{ Form::label('new_city', 'New city') }}
        {{ Form::text('new_city') }}

        {{ Form::label('existing_state', 'State') }}
        {{ Form::select('existing_state', State::names())  }}
    </div>
    <div>
        {{ Form::radio('new_or_existing_city', 'existing') }}
        {{ Form::label('location', 'Existing location') }}
        {{ Form::select('location', City::citystate()) }}
    </div>
    {{ Form::submit('Save recipe') }}
</fieldset>

{{ Form::close() }}