<?php

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

$input = $_GET['input'];

$i = 0;
while ($i <= 10) {
	if ($i == 4)
	{
		$query = "select name from login where id='".$input."'";
		mysql_query($query,$conn);
	}
	else
	{
		print "Continue...";
	}
}

?>