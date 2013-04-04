<?php

$input = "Foo";

function Taint()
{
	$GLOBALS["input"] = $_GET['input'];
} 

Taint();
print "Your input is: <h1>".$input."</h1>";

?>