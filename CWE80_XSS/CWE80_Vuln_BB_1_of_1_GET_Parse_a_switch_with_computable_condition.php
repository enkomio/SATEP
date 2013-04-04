<?php

$one = 4 - ( 2 * 2 ) + 1;
$input = $_GET['input'];

switch ($one) {
    case 0:
        print "Chosen: 0";
        break;
    case 1:
        print "Your input is: <h1>$input</h1>";
        break;
    case 2:
        print "Chosen: 2";
        break;
	default:
		print "Default";
        break;
}

?>