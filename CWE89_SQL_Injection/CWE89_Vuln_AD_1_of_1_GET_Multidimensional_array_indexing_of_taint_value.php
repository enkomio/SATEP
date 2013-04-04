<?php

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

$array1 = array( $_GET['input'] );
$array2 = array( $array1 );

$input = $array2[0][0];

$query = "select name from login where id='".$input."'";
mysql_query($query,$conn);

?>