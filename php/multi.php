<?php
	session_start();

	$_SESSION['numMulti'] += 1;
	$_SESSION["scoreMulti"] += $_REQUEST["multiscore"];
?>