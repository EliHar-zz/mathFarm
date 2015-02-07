<?php
	
	function doesUserExist ($username, $usersArray) {
		$isFound = false;
		foreach ($usersArray as $key => $value) {
			if ($key === $username) {
				$isFound = true;
				break;
			}
		}
		return $isFound;
	}

	
	$message;
	
	if (empty($_POST['firstname'])) {
		$message = "First name is missing!";
	}else if (empty($_POST['lastname'])){
		$message = "Last name is missing!";
	}else if (empty($_POST['phonenumber'])){
		$message = "Phone number is missing!";
	}else if (empty($_POST['email'])){
		$message = "E-mail is missing!";
	}else if (empty($_POST['login'])){
		$message = "Login name is missing!";
	}else if (empty($_POST['password1'])){
		$message = "Password is missing!";
	}else if (empty($_POST['password2'])){
		$message = "Confirmation password is missing!";
	}else if (strlen($_POST['password1']) < 8) {
		$message = "Password must be at least 8 charachters!";
	}else if ($_POST['password1']!==$_POST['password2']) {
		$message = "Make sure the passwrod and the confirmation password match!";
	}else {
						
		$recoveredData = file_get_contents('../members.txt');
		
		$myArray = (array)unserialize($recoveredData);
		
		if (!doesUserExist($_POST['login'],$myArray)) {
		
			$_POST['numAdd'] = 0;
			$_POST['numSub']= 0;
			$_POST['numMulti']= 0;
			$_POST['scoreAdd']= 0;
			$_POST['scoreSub']= 0;
			$_POST['scoreMulti']= 0;
			$_POST['totalOps']= 0;
			$_POST['totalScore']= 0;
			
			$myArray [$_POST['login']] = $_POST;
			
			$file = fopen("../members.txt","w+");	
	
			$user_info = serialize($myArray);
	
			fwrite($file, $user_info);
			
			fclose($file);
			
			header("location:../pages/successreg.php");
		} else {
			$message = "Login name is already taken.";
		}
	}
	
	if (isset($message))
		echo $message. "<br><br>Please go back and fix the error.";			


?>