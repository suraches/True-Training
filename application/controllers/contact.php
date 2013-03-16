<?php

class Contact_Controller extends Base_Controller {

	public function get_index()
	{
		$name = 'Tee';

		$view = array(
			'name'   => 'Tee',
			'email'  => 'admin@domain.com',
			'detail' => 'Detail of Contact'
		);

		return View::make('contact.index', $view);
	}

	public function post_index()
	{
		//dd(Input::all());
	}

}