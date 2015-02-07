<?php
// Start the session
session_start();
if(!isset($_SESSION['login']))
	header("location:../pages/login.php");
	
$_SESSION['totalOps'] = $_SESSION['numAdd']+ $_SESSION['numSub'] + $_SESSION['numMulti'];
$_SESSION['totalScore'] = $_SESSION['scoreAdd']+$_SESSION['scoreSub']+$_SESSION['scoreMulti'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8" />
	<title> Math Farm - My Stats</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	</head>
	<body>
<?php
	include("../php/top.php");
	include("../php/nav.php");
?>
	
	<section>
		<div style="padding: 30px 70px 70px 70px; text-align:left";>
		
 <?php     

	$recoveredData = file_get_contents('../members.txt');
	$users = (array)unserialize($recoveredData);
	$username = $_SESSION['login'];
	$current_user = $users[$username];// array of current user 
	
	
            echo'<h2>Current Stats</h2>
			 	Number of additions attempted is <strong> '.$_SESSION['numAdd'].' </strong> and score is <strong> '.$_SESSION['scoreAdd'].' </strong><br>
 				Number of subtractions attempted is <strong> '.$_SESSION['numSub'] .' </strong> and score is <strong> '.$_SESSION['scoreSub'] .' </strong><br>
				Number of multiplications attempted is<strong> '.$_SESSION['numMulti'] .' </strong>and score is<strong> '.$_SESSION['scoreMulti'] .' </strong><br>
                Total number of operations attempted is<strong> '.$_SESSION['totalOps'] .' </strong>and score is<strong> '.$_SESSION['totalScore'] .' </strong><br><br>
				
			<h2>Cumulative Stats</h2>
			 	Number of additions attempted is <strong> '.$current_user['numAdd'].' </strong> and score is <strong> '.$current_user['scoreAdd'].' </strong><br>
 				Number of subtractions attempted is <strong> '.$current_user['numSub'] .' </strong> and score is <strong> '.$current_user['scoreSub'] .' </strong><br>
				Number of multiplications attempted is<strong> '.$current_user['numMulti'] .' </strong>and score is<strong> '.$current_user['scoreMulti'] .' </strong><br>
                Total number of operations attempted is<strong> '.$current_user['totalOps'] .' </strong>and score is<strong> '.$current_user['totalScore'] .' </strong><br><br><br>
        </div>'
?>
	</section>
	
<?php
include("../php/bottom.php");
?>
</body>
</html>