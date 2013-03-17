<?php

class User_Register_Controller extends Base_Controller {

	public function get_index()
	{

	}

	public function get_create()
	{
		return View::of('default')
			->nest('content','user.register.create');
	}

	public function post_create()
	{

	}

	public function get_edit()
	{

	}

	public function post_edit()
	{

	}

	public function get_delete()
	{

	}

	public function post_delete()
	{

	}

}