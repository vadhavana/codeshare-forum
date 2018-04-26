<?php
	session_start();
	
	include ('dbconn.php');
	
	$username = $_POST['usernameinput'];
	$password = $_POST['passwordinput'];
	
	
	$result = mysqli_query($con, "SELECT username, password FROM users WHERE username = '".$username."' AND password = '".$password."'");
	
	
	if (mysqli_num_rows($result) != 0) {
		$_SESSION['username'] = $username;
		header("Location: /codeshare/index.php");
	} else {
		echo "<h1>Login Failed</h1>";
	}
?>