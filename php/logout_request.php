<?php
session_start();
// write to file
	
	if (file_exists('../members.txt')) {
		$recoveredData = file_get_contents('../members.txt');
			if ($recoveredData) {
			$users = (array)unserialize($recoveredData);
			$username = $_SESSION['login'];
			
			$current_user_old = $users[$username];// array of current user

			$_SESSION['totalOps'] = $_SESSION['numAdd']+ $_SESSION['numSub'] + $_SESSION['numMulti'];
			$_SESSION['totalScore'] = $_SESSION['scoreAdd']+$_SESSION['scoreSub']+$_SESSION['scoreMulti'];
			
				$current_user_old['numAdd'] += $_SESSION['numAdd'];
				$current_user_old['numSub']= $_SESSION['numSub'];
				$current_user_old['numMulti']+= $_SESSION['numMulti'];
				$current_user_old['scoreAdd']+= $_SESSION['scoreAdd'];
				$current_user_old['scoreSub']+= $_SESSION['scoreSub'];
				$current_user_old['scoreMulti']+= $_SESSION['scoreMulti'];
				$current_user_old['totalOps'] += $_SESSION['totalOps'];
				$current_user_old['totalScore']+= $_SESSION['totalScore'];
				
				$file = fopen("../members.txt","w+");	
				$users[$username] = $current_user_old;
				$user_info = serialize($users);
			
				fwrite($file, $user_info);
					
				fclose($file);
		}
	}
	
	session_unset();
	session_destroy();
	
	header("location:../pages/index.php");
?>