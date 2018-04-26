<?php
include('base.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Codeshare</title>

    
</head>
<body>
    

    <div class="container-fluid con">
       <div class="jumbotron">
          <h1 class="diasplay-3 text-center">Welcome to Codeshare</h1>
          <form class="text-center" action="validatelogin.php" method="POST">
              <br>
              <br>
              <br>
                Username:&nbsp&nbsp&nbsp<input type="text" id="usernameinput" name="usernameinput" /><span style="color:#FF0000">*</span>		
                <br>
                <br>		
                Password:&nbsp&nbsp&nbsp<input type="password" id="passwordinput" name="passwordinput" /><span style="color:#FF0000">*</span>
                <br>
                <br>
                <button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="submit" value="Login">Login</button>
                <br>
                <br>
                <p>new user??<a href="signup.php">signup</a></p>	
			</form>
       </div>
    </div>



    <script src="static/jquery-3.min.js"></script>
	<script src="static/tether/dist/js/tether.min.js"></script>
	<script src="static/js/bootstrp.min.js"></script>
</body>
</html>