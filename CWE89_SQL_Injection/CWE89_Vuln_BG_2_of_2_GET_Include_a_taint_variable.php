<?php 

include 'CWE89_Vuln_BH_1_of_2_GET_Define_a_taint_variable.php';
	
$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

$query = "select name from login where id='".$taint_input."'";
mysql_query($query,$conn);

?>