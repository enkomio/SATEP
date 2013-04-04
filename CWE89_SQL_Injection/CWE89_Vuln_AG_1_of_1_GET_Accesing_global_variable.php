<?php

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

$input = "Foo";

function Taint()
{
	global $input;
    $input = $_GET['input'];
} 

Taint();

$query = "select name from login where id='".$input."'";
mysql_query($query,$conn);

?>