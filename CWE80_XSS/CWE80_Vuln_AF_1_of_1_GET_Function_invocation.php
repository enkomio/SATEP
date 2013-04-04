<?php

function Taint()
{
    return $_GET['input'];
} 

$input = Taint();

print "Your input is: <h1>".$input."</h1>";

?>