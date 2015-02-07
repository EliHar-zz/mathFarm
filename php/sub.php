<?php
	session_start();

	$_SESSION['numSub'] += 1;
	$_SESSION["scoreSub"] += $_REQUEST["subscore"];
?>