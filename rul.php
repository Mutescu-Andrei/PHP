<?php

class Rulet
{
	const minim	= 0;
	const maxim	= 100;

	private $number;

	public function __construct() {}

	public function spin()
	{
		$this->number =rand(self::minim , self::maxim );
	}

	public function get_number()
	{
		return $this->number;
	}

	

	
}
?>