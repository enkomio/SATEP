<?php

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

function recFunc($c) {
	if ($c == 1)
	{
		return 0;
	}
	return recFunc(rand());
}

recFunc(rand());

$query = "select name from login where id='$_GET[input]'";
mysql_query($query,$conn);

?>