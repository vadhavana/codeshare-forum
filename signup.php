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
           
          <h1 class="diasplay-3 text-center">Signup to Codeshare</h1>
           <br>
           <br>
          <form class="text-center" action="addnewuser.php" method="POST">
                <label >Email:</label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="emailinput" name="emailinput" /><span style="color:#FF0000">*</span>
                <br>
                <br>
				<label >Username:</label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="usernameinput" name="usernameinput" /><span style="color:#FF0000">*</span>
                <br>
                <br>
				<label>Password:</label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" id="passwordinput" name="passwordinput" /><span style="color:#FF0000">*</span>
                <br>
                <br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                
                        
                <br>
                <br>
                <button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="submit" value="Register">Signup</button>
                
			</form>
       </div>
    </div>



    <script src="static/jquery-3.min.js"></script>
	<script src="static/tether/dist/js/tether.min.js"></script>
	<script src="static/js/bootstrp.min.js"></script>
</body>
</html>