<?php

function theme_spring($theme)
{
	$theme->add_asset('spring.js', null);

	$theme->theme_partial('header');
	$theme->composer('header', function($view)
	{
		$view->with('name', 'Tee');
	});
}