<?php

class InputProvider {

	private $name;

	function __constructor()
	{
		$this->name = $_GET['name'];
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
$input = $o->getHello("Hello");

print "Your input is: <h1>$input</h1>";

?>