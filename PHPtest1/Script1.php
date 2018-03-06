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

	public function Say()
	{
		echo "Hello from MyClass ({$this->bublik})!\n";
	}

	public function Talk()
	{
		$this->Add(1);
		$this->Say();
	}

	public function Speak()
	{
		for ($i=1; $i<10; $i++){
			$this->Add(rand(1,5));
			$this->Say();
		}
	}

}

?>
