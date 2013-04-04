<? 	
	function typecast($string, $type = 'string')
	{
		switch($type)
		{
			case 'integer': return (int)($string);
			case 'string' : return $string;
			default:        return "";
		}
	}
?>

<html>
<body>
<form method="POST" action="index.php" name=f>
<input type="text" name="name">
</form>
<?php 

	$name = $_GET['name']; 
	$input = typecast($name);
	print "Your input is: <h1>".$input."</h1>";
?>
</body>
</html>
