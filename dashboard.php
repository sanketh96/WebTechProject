<?php
	session_start();
	$name="";
	if(isset($_SESSION['name']))
		$name=$_SESSION['name'];

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
	<img src="avatar_final.png" width="200px" height="auto">
	<div class="name"><?php print($name);?></div>
		<div>
			Welcome!.<br>
			<h3 class="recent">Recent Activity:<br><hr width="100%"></h3>
			
			<br>Nothing
			
		</div>
		
</body>
</html>