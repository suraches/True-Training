<?php

Section::inject('title', 'Domain.com: ');

/**
 * Template: default composer.
 */
View::composer('templates.default', function($view)
{
	Section::append('title', 'Another');

	//Asset::add('theme', 'css/templates/')

	//Asset::add('jquery', 'js/jquery.min.js');
	//Asset::add('jquery-ui', 'js/jquery-ui.min.js', 'jquery');

	//Asset::container('footer')->add('graph', 'js/graph.js');

	$view->nest('header', 'templates.default.header');
	$view->nest('footer', 'templates.default.footer');
});