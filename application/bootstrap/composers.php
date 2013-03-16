<?php

Section::inject('title', 'Domain.com: ');

/**
 * Template: default composer.
 */
View::composer('templates.default', function($view)
{
	Section::append('title', 'Another');

	//  This means that the asset requires other assets to be declared in your view before it can be declared.
	//Asset::add('jquery-ui', 'js/jquery-ui.min.js', 'jquery-ui2');
	//Asset::add('jquery-ui2', 'js/jquery-ui2.min.js', 's');
	//Asset::add('jquery', 'js/jquery.min.js');


	//Asset::container('footer')->add('graph', 'js/graph.js');

	$view->nest('header', 'templates.default.header');
	$view->nest('footer', 'templates.default.footer');
});