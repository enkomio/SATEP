<?php

class Hello {
  
	var $name;
	  
	function __constructor($n)
	{
		$n = $_GET['name'];
		$this->name = $n;
	}
	
	function getHello($hello)
	{
		return $hello . " " . $this->name;
	}
}

$o = new Hello();

print "Your input is: <h1>{$o->getHello("Greetz ")}!!</h1>";

?>