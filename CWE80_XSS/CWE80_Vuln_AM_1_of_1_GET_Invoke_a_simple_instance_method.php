<?php

class InputProvider {
  function getInput()
  {
    return $_GET['input'];
  }  
}

$o = new InputProvider();
$input = $o->getInput();

print "Your input is: <h1>$input</h1>";

?>