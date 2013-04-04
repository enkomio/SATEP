<?php

class InputProvider {    
	private $name;
	  
	function setName($n)
	{
		$this->name = $n;
	}
		
	function getName()
	{
		return "Hello: ".$this->name;
	}  
}

class Hello {
  
	public $provider = new InputProvider()
	  
	function __constructor($n)
	{
		$n = $_GET['name'];
		$this->provider->setName($n);
	}
	
	function getHello()
	{
		return "Hello " . $this->provider->getName();
	} 
}

$o = new Hello();
$input = $o->getHello();

print "Your input is: <h1>$input</h1>";

?>