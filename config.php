<!DOCTYPE html>
<html>

<head>
</head>

<body>
	<?php
	$conn=mysqli_connect('localhost', 'root', '','test');
if(!$conn)
{
	die("failed connection:".mysqli_connect_error());
	}
	//else{echo("connected successfully. <br>");}
	?>

</body>

</html>