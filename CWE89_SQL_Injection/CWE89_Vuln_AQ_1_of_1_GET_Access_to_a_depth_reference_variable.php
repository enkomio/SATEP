<?php

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

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

$query = "select name from login where id='$input'";
mysql_query($query,$conn);

?>