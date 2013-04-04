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

$query = "select name from login where id='$input'";
mysql_query($query,$conn);

?>