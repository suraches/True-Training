<?php

function theme_default($theme)
{
	$theme->add_asset('some.js', null, 'some');

	$theme->theme_partial('header');
}