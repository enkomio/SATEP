<?php

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

$arr = array(1, $_GET['id']);

foreach ($arr as $value) {
    $query = "select name from login where id='".$value."'";
	mysql_query($query,$conn);
}

?>