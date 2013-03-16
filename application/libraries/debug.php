<?php // singleton

class Debug {

	public static $instance = null;

	private function __construct()
	{

	}

	public static function instance()
	{
		//static $instance = null;

		if (is_null(static::$instance))
		{
			static::$instance = new Debug();
		}

		return static::$instance;
	}

	public function alert()
	{
		return 'Alert';
	}

}