<?php

$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

class InputProvider {
  function getInput()
  {
    return $_GET['input'];
  }  
}

$o = new InputProvider();
$input = $o->getInput();

$query = "select name from login where id='$input'";
mysql_query($query,$conn);

?>