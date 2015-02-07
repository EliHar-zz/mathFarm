<?php
// Start the session
session_start();
if(!isset($_SESSION['login']))
	header("location:../pages/login.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8" />
	<title> Math Farm - Mixed Operations</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <script type="text/javascript" src="../js/logic.js"></script>
	</head>
	<body>
<?php
	include("../php/top.php");
		include("../php/nav.php");

?>
	
	
	
	<section>
		<script type="text/javascript">inMixMode = true;</script>
		
		<div style="padding: 10px 40px 70px 70px">
			<form action="#" id="myForm">
				<h1 style="color: #e7f29c;"><br>Let's practice Mixed Operations</h1>
				<h4 style="color: #e7f29c;">Select the range of numbers then start a new question and try to guess the answer.<br>You only have three chances to guess the correct answer.</h4>

				<label>Test me on numbers between &nbsp;&nbsp;&nbsp;<input type="radio" name="range" id="range1" value="10"/> 0 - 9 &nbsp;&nbsp;&nbsp;&nbsp;</label>
				<label><input type="radio" name="range" id="range2" value="100"/> 0 - 99 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<label><input type="radio" name="range" id="range3" value="1000"/> 0 - 999 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input class="button2" type="button" value="START" id="renew"/><br><br>
	
				<label id="questionNumber">Q#&nbsp;</label>
				<input class="number" type="text" readonly id="num1"/> <label style="font-family: arial;" id="operationSign">&#x25a1;</label>
				<label><input class="number" type="text" readonly id="num2"/> = </label>
				<label><input class="answer" placeholder="?" type="text" id="answer"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	
				<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="counter" type="text" readonly id="chances"/> chances left </label><br><br>
							
				<input class="button" type="button" value="Verify answer" id="checkAnswerButton"/>
				<input class="button" type="reset" value="Clear" id="clear"/><label id="declaration"></label><br><br>
				
				<label id="declaration2"></label><label> You've just collected <input class="score" type="text" placeholder="0" readonly id="correctAnswer"/> point(s).</label><br><br>

			</form>
		</div>
		<script type="text/javascript" src="../js/logicR.js"></script>


	</section>
	
	<?php
include("../php/bottom.php");
?>
</body>
</html>