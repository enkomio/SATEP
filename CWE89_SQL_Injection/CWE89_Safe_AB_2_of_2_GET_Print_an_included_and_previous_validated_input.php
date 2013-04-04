<?php 

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

// validate the input
include 'CWE89_Safe_AB_1_of_2_GET_Validate_the_input_and_define_constant.php';

if (!defined('VALIDATED')) exit('Input not validated');

$input = $_GET['name']; 

$query = "select name from login where id='".$input."'";
mysql_query($query,$conn);

?>