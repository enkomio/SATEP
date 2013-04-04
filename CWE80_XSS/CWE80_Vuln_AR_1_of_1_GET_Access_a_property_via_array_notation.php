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
$input = $o['name'];

print "Your input is: <h1>$input</h1>";

?>