<?php

class Themes_Layout_Controller extends Base_Controller {

	// Path: appliaction/views/templates/default.php
	public $layout = 'templates.default';

	public function get_index()
	{
		$this->layout->nest('content', 'themes.layout.index');
	}

}