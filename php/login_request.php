<?php
	session_start();
	
	function validateUserLogin ($username, $password, $usersArray) {
		
		$isFound = false;
		$isMatch = false;
		$user = array();
		$resultArray = array();
		
		foreach ($usersArray as $key => $value) {
			if ($key === $username) { // find username
				$isFound = true;
				
				if ($value['password1'] === $password) { // match password
					$isMatch = true;
					$user = $value;
				}
				break;
			}
		}
		
		$resultArray = array ($isFound, $isMatch, $user);
		return $resultArray;
	}
	
	$recoveredData = file_get_contents('../members.txt');
	$myArray = (array)unserialize($recoveredData);

	//print_r($myArray);

	$resultArray = validateUserLogin ($_POST['login'], $_POST['password'], $myArray);

	$message;
	if (!$resultArray[0])
		$message = "Login name not found!";
	else if (!$resultArray[1])
		$message = "Please check login name and/or password!";	
	else {
		// username and password are good. Start a session
		
		$_SESSION = $resultArray[2]; // Session will have the same info as the user array, but scores starting at 0
		$_SESSION['numAdd'] = 0;
		$_SESSION['numSub']= 0;
		$_SESSION['numMulti']= 0;
		$_SESSION['scoreAdd']= 0;
		$_SESSION['scoreSub']= 0;
		$_SESSION['scoreMulti']= 0;
		$_SESSION['totalOps']= 0;
		$_SESSION['totalScore']= 0;

		header("location:../pages/index.php");
	}

	if (isset($message))
		echo $message. "<br><br>Please go back and fix the error.";	
	
			
	

?>