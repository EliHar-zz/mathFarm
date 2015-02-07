<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8" />
	<title> Math Farm - Become a farmer</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <script type="text/javascript" src="../js/myForm.js"></script>
	</head>
	<body>
<?php
	include("../php/top.php");
	include("../php/nav.php");
?>
	
	
	
	<section class="register">
		<h1 style="text-align:center; color: navy;">Become a farmer... Yeeehaaaa</h1><br>
		<div style="padding: 0px 40px 70px 120px">
		<form action="../php/reg_form_post.php" method="post" id="registrationForm">
			<fieldset>
			<legend style="color: navy; font-weight: bolder;">Personal information</legend><br>
			<label>First name<input type="text" required name="firstname" id="firstname"/></label><label id="firstVerif"></label><label style="color: navy; font-size:.6em;">(Letters and hyphen only)</label><br><br>
			<label>Last name<input type="text"  required name="lastname" id="lastname"/></label><label id="lastVerif"></label><label style="color: navy; font-size:.6em;">(Letters and hyphen only)</label><br><br>
			<label>Phone number<input type="text" required name="phonenumber" placeholder="(xxx) xxx-xxxx" id="phonenumber"/></label> <label id="phoneVerif"></label><label style="color: navy; font-size:.6em;"> example: (999) 999-9999</label><br><br>
			<label>Email address<input type="text" required placeholder="john@mathfarm.com" name="email" id="email"/></label> <label id="emailVerif"></label><br><br>
			</fieldset><br><br>
			<fieldset>
			<legend style="color: navy; font-weight: bolder;">Login information</legend><br>
			<label>Login name<input type="text" required name="login" id="login"/></label><label id="loginVerif"></label><label style="color: navy; font-size:.6em;">(Six characters minimum. Letters and digits only)</label><br><br>
			<label>Password<input type="password" required name="password1" id="password1"/></label><label id="passwordVerif"></label><label style="color: navy; font-size:.6em;">(Letters and digits only with at least a digit and a letter. Six characters minimum)</label><br><br>
			<label>Confirm password<input type="password" required name="password2" id="password2"/></label><label id="matchIndicator"></label>
			</fieldset><br>
			
			<input class="button" type="submit" value="Register" id="submit"/>
			<input class="button" type="reset" value="Clear" id="clear"/>
			
		</form>
			<script type="text/javascript" src="../js/formR.js"></script>
		</div>
	</section>
	
	<?php
include("../php/bottom.php");
?>
</body>
</html>