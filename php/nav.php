<?php	

	$button = '<a href="login.php">Enter the Farm</a>';
	if (isset($_SESSION["login"])){
		$button = '<a href="../php/logout_request.php">Leave the Farm</a>';
	}
	echo'<nav>
		<ol>
			<li><a href="index.php">Home</a></li>
			<li>'.$button.'</li>
			<li>Quiz Me
				<ol>
					<li><a href="addition.php">&raquo; Addition</a></li>
					<li><a href="subtraction.php">&raquo; Subtraction</a></li>
					<li><a href="multiplication.php">&raquo; Multiplication</a></li>
					<li><a href="mix.php">&raquo; Mixed Operations</a></li>
				</ol>
			</li>
			<li><a href="stats.php">My Stats</a></li>
			<li><a href="contact.php" target="_blank">Contact Us</a></li>
		</ol>
	</nav>'
	
?>