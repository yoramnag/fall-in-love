<?php
	$email=$_GET['email'];
	$password=$_GET['password'];
	
	include 'include/connect.php';

	$check = (mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE `email`='$email' AND `password`='$password'")));
	if($check['id']!=""){

		//print_r($check);
		// INIT SESSION
		session_start();
		$_SESSION['id'] = $check['id'];
		$_SESSION['user_id'] = $check["user_id"];
		$_SESSION['first_name'] = $check["first_name"];
		$_SESSION['last_name'] = $check["last_name"];


		

		//echo $_SESSION["user_id"]; 
		echo '1';
		//echo $check['user_id'];
		
	}else{
		echo '0';
	}
		
 
?>
