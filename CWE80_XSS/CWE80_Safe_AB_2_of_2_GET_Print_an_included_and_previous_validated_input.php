<?php 
	// validate the input
	include 'CWE80_Safe_AB_1_of_2_GET_Validate_the_input_and_define_constant.php';
	
	if (!defined('VALIDATED')) exit('Input not validated');

	$input = $_GET['name']; 
	print "Your input is: <h1>".$input."</h1>";
?>