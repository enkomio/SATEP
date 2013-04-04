<?php

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

function Taint()
{
    return $_GET['input'];
} 

$input = Taint();

$query = "select name from login where id='".$input."'";
mysql_query($query,$conn);

?>