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
		$rules = array(
			'username'   => 'required|alpha_dash',
			'password'   => 'required|min:4|confirmed',
			'first_name' => 'required',
			'last_name'  => 'required',
		);

		$data = Input::all();

		$messages = array(
			//'username_required' => 'Please input username'
		);

		$validation = Validator::make($data, $rules, $messages);

		if ($validation->fails())
		{
			$errors = $validation->errors;

			//->with('content', $content);
			//->with_content($content);

			return Redirect::back()->with_input()->with_errors($errors);
		}

		// Save data to the database.

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