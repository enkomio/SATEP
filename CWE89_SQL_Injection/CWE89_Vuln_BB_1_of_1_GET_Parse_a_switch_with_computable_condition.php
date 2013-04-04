<?php

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

$one = 4 - ( 2 * 2 ) + 1;
$input = $_GET['input'];

switch ($one) {
    case 0:
        print "Chosen: 0";
        break;
    case 1:
        $query = "select name from login where id='".$input."'";
		mysql_query($query,$conn);
        break;
    case 2:
        print "Chosen: 2";
        break;
	default:
		print "Default";
        break;
}

?>