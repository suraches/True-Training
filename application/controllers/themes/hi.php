<?php

class Themes_Hi_Controller extends Base_Controller {

	public function get_index()
	{
		$theme = IoC::resolve('Theme');
		$theme->set_theme('spring')
			->set_layout('default');

		$theme->add_asset('wow.js', null, 'spring.js');

		return $theme->render('themes.hi.index');
	}

}