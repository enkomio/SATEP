<?php

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

$condition = rand(0,5);
$input = $_GET['input'];

switch ($condition) {
    case 1:
        print "Chosen: 1";
        break;
    case 2:
        $query = "select name from login where id='".$input."'";
		mysql_query($query,$conn);
        break;
    case 3:
        print "Chosen: 3";
        break;
	default:
		print "Default";
        break;
}

?>