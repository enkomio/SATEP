<? 	
$conn=mysql_connect("localhost","root","") or die("Connection Error !");
$mydb=mysql_select_db("scaep",$conn) or die("Database Error !!");

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

$query = "select name from login where id='".$input."'";
mysql_query($query,$conn);

?>
</body>
</html>
