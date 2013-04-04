<?php

class InputProvider {
  function getName()
  {
    return $_GET['name'];
  }  
  
  function getHello($hello)
  {
    return $hello . " " . $this->getName();
  }  
}

$o = new InputProvider();
$input = $o->getHello("Hello");

print "Your input is: <h1>$input</h1>";

?>