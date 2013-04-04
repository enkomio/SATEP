<?php 

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

$name = $_GET['name']; 
$input = mysql_real_escape_string($name);

$query = "select name from login where id='".$input."'";
mysql_query($query,$conn);

?>