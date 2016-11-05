<html>
<head>
</head>
<body>
<?php



include("config.php");
session_start();
echo(mysql_error());
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$username2 = isset($_POST['usernamel']) ? $_POST['usernamel'] : '';
	$password2 = isset($_POST['passwordl']) ? $_POST['passwordl'] : '';
	$emailid = mysqli_real_escape_string($conn,$username2);
	$pass=mysqli_real_escape_string($conn,$password2);
	
	$sql="SELECT id FROM student_login WHERE email = '$emailid' and password = '$pass'";
	$result = mysqli_query($conn,$sql);
	
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	//$active = $row['active'];
	
	$count = mysqli_num_rows($result);
	
	if ($count == 1)
	{
		echo("logged in");
		//session_register("emailid");
		$_SESSION['login_user'] = $emailid;
		header("location: profile.php");
	}
	else
	{
		echo("login failed");
	}
}
$conn->close();

?>
</body>
</html>