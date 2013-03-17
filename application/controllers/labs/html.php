<?php

class Labs_Html_Controller extends Base_Controller {

	public function get_macro()
	{
		$data = array(
			array('id' => 1, 'name' => 'Demo-1'),
			array('id' => 2, 'name' => 'Demo-2'),
			array('id' => 3, 'name' => 'Demo-3')
		);

		return HTML::table_grid($data);
	}

	public function get_view()
	{

	}

}