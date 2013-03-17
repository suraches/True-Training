<?php

class Contact_Controller extends Base_Controller {

	public $layout = 'templates.default';

	public function get_index()
	{
		$name = 'Tee';

		$view = array(
			'name'   => 'Tee',
			'email'  => 'admin@domain.com',
			'detail' => 'Detail of Contact'
		);

		//Asset::container('footer')->add('contact', 'js/contact/execute.js');

		//Asset::add('jquery-ui', 'jquery-ui.min.js', array('jquery', 'underscorejs'));
		//Asset::add('jquery', 'jquery.min.js');

		$this->layout->nest('content', 'contact.index', $view);
		//return View::make('contact.index', $view);
	}

	public function post_index()
	{
		//dd(Input::all());
	}

}