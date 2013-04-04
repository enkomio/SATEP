<?php 

// validate
$_GET['name'] = mysql_real_escape_string($_GET['name']);	
define("VALIDATED", true);	

?>