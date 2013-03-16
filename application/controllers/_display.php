<?php

class Display_Controller extends Base_Controller {

	public $restful = true;

	public $layout = 'layouts.common';

	public function get_index()
	{
		$data = array(
			'hello' => 'test'
		);

		new Debug();
		new Umm();
		new Foo_Bar_Stuff();
		new Foo\Bar\Stuff2();

		//return View::of('common')->nest('content', 'display.index', $data);

		$this->layout->content = View::make('display.index', $data);
	}

	public function get_some($name = 'Who')
	{
		return $name;
	}

}