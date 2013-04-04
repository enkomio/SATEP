<?php

$condition = rand(0,5);
$input = $_GET['input'];

switch ($condition) {
    case 1:
        print "Chosen: 1";
        break;
    case 2:
        print "Your input is: <h1>$input</h1>";
        break;
    case 3:
        print "Chosen: 3";
        break;
	default:
		print "Default";
        break;
}

?>