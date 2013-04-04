<?php

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

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

$query = "select name from login where id='{$o->getHello("Greetz ")}'";
mysql_query($query,$conn);

?>