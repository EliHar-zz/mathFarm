<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8" />
	<title> Math Farm - Home</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>
	<body>
<?php
	include("../php/top.php");
	include("../php/nav.php");
?>
	
	
	<section>
			<div style="padding: 10px 70px 70px 70px">
<?php
$passage = '<h1 style="text-align:center; color: white;"><br>Welcome to Math Farm</h1><br>';
if(isset($_SESSION['login']))
	$passage = '<h1 style="text-align:center; color: white;"><br>Hello '.$_SESSION['firstname'].'</h1><br>';
	
	echo ($passage);
?>
		
		<p style="text-align:center; color: white;">Practice basic math problems using your favourite operations. By choosing either one of the operations <br>in the side menu or a mix of operations. For each question you have 3 chances only. If you answer the question from the first time, you get 30 points, 20 points from the second time, and 10 points from the last time. You must answer each question before going to the next question. The site will help you keep track of your stats.
</p>
			</div>
	</section>
	
<?php
include("../php/bottom.php");
?>
</body>
</html>