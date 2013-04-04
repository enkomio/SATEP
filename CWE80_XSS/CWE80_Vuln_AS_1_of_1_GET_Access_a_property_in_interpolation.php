<?php

class Hello {
  
	var $name;
	  
	function __constructor($n)
	{
		$n = $_GET['name'];
		$this->name = $n;
	}
}

$o = new Hello();

print "Your input is: <h1>$o->name</h1>";

?>