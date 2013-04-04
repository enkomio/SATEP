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
}

$o = new Hello();
$input = $o['name'];

$query = "select name from login where id='$input'";
mysql_query($query,$conn);

?>