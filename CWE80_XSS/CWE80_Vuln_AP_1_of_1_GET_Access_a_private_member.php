<?php

class InputProvider {
	
	private $name;
	
	function setName($n)
	{
		$this->name = $n;
	}
	
	function getName()
	{
		return $this->name;
	}  
  
	function getHello($hello)
	{
		return $hello . " " . $this->getName();
	}  
}

$o = new InputProvider();
$o->setName($_GET['name']);
$input = $o->getHello("Hello");

print "Your input is: <h1>$input</h1>";

?>