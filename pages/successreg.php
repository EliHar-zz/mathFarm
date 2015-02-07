<?php 
	session_start();
	header( "refresh:3;url=../pages/login.php" );
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8" />
	<title> Math Farm - Loading...</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>
	<body>
<?php
	include("../php/top.php");
	include("../php/nav.php");
?>
	
	
	<section>
			<div style="padding: 10px 70px 70px 70px">

		<h1 style="text-align:center; color: white;"><br>Welcome new farmer</h1><br><br>
		<p style="text-align:center; color: white;"><br>LOADING...<br><br>
</p>
			</div>
	</section>
	
<?php
include("../php/bottom.php");
?>
</body>
</html>