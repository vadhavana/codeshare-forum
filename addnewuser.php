<?php
include('dbconn.php');
    $newuser = $_POST['usernameinput'];
    $newpwd = $_POST['passwordinput'];
    $newemail = $_POST['emailinput'];
    
    $username = mysqli_real_escape_string($con,$newuser);
    $email = mysqli_real_escape_string($con,$newemail);
    $password = mysqli_real_escape_string($con,$newpwd);
    

                
    if(!empty($_POST['usernameinput']) && !empty($_POST['passwordinput']) && !empty($_POST['emailinput'])){
        $insert = mysqli_query($con, "INSERT INTO users (`username`, `password`,`email`) VALUES ('".$username."', '".$password."','".$email."');");
        if ($insert) {
            header("Location: /codeshare/login.php");
        }
    }
    else{
        header("Location: /codeshare/signup.php");
    }
	
?>