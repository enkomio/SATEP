<?php

function recFunc($c) {
	if ($c == 1)
	{
		return 0;
	}
	return recFunc(rand());
}

recFunc(rand());
print "Your input is: <h1>$_GET[input]</h1>";

?>