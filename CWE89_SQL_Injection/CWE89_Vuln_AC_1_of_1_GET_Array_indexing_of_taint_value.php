<?php

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

$array = array( "key1" => "Some value", "key2" => $_GET['id']);

$query = "select name from login where id='".$array['key2']."'";
mysql_query($query,$conn);

?>