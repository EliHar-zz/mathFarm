<?php
	session_start();

	$_SESSION['numAdd'] += 1;
	$_SESSION["scoreAdd"] += $_REQUEST["addscore"];
?>