<?php 
	$name = $_GET['name']; 
	$input = htmlspecialchars ($name);
	print "Your input is: <h1>".$input."</h1>";
?>