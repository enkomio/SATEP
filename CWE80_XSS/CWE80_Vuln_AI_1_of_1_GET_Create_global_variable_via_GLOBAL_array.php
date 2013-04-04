<?php

$GLOBALS["input"] = "Foo";

function Taint()
{
	global $input;
	$input = $_GET['input'];
} 

Taint();
print "Your input is: <h1>".$input."</h1>";

?>