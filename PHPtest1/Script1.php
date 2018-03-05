<?php

namespace user\ns1;

class MyClass
{
	public $bublik;

	public function Add($n)
	{
		$this->bublik += $n;
	}

	public function Get()
	{
		return $this->bublik;
	}
}

?>