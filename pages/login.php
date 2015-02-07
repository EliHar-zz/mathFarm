<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8" />
	<title> Math Farm - Login</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>
	<body>
<?php
	include("../php/top.php");
	include("../php/nav.php");
?>
	
	
	<section>
              <form id="myform" action="../php/login_request.php" method="POST" >
				<div style="padding: 100px 70px 70px 130px;">
				<label>Username <input type="text" name="login" id="login"/></label><br><br>
				<label>Password <input type="password" name="password" id="password"/></label><br><br>
				
            	<input class="button" type="submit" value="Login" id="loginButton"/>
				<input class="button" type="reset" value="Clear" id="clearButton"/><br><br>
				<a style="color:yellow;" href="../pages/register.php">>> Become a Farmer <<</a>
				<div>
            </form>
	</section>
	
<?php
include("../php/bottom.php");
?>
</body>
</html>