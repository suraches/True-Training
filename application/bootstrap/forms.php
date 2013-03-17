<?php

/**
 * Create a HTML text input element.
 *
 * @param  string  $name
 * @param  string  $value
 * @param  array   $attributes
 * @return string
 */
Form::macro('text_append', function($name, $value = null, $attributes = array())
{
	Asset::add('macro_text_append', 'macros/forms/text_append.js', array('jquery', 'jquery-ui'));

	return Form::input('text', $name, $value, $attributes) . ' <a href="#" data-form-append="form-append">+</a> ';
});

Form::macro('datetime', function()
{

});

Form::macro('calendar', function()
{

});

Form::macro('wysiwyg', function()
{

});

Form::macro('coutdown', function()
{

});
