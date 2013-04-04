<?php

$input = $_GET['input'];

$i = 0;
do {
	if ($i == 4)
	{
		print "Your input is: <h1>$input</h1>";
	}
	else
	{
		print "Continue...";
	}
} while ($i <= 10)

?>