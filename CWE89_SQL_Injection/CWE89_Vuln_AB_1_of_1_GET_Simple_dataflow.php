<?php

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

$query = "select name from login where id='".$_GET['id']."'";
mysql_query($query,$conn);

?>