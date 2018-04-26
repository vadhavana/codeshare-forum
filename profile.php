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
    <style>
        #error{
            text-align:center;
            
        }
    </style>
      
</head>
<body>
    <div class="container con-1">
        <?php

            include('dbconn.php');
            error_reporting(0);

            $select = mysqli_query($con,"SELECT u_id,email FROM users WHERE username='".$_SESSION['username']."'");
            $row = mysqli_fetch_array($select);
            $id = $row['u_id'];
            $mail = $row['email'];
            
            if(isset($_SESSION['username'])){
            echo "<h1>Your Profile</h1>";
            echo "<img src='static/user_defalt/person.png' heght='200' width='200'>";
            echo "
                <div class='container'>
                    <div class='row justify-content-center'>
                        <div class='col-md-12'>
                            <table colspan='5' cellpadding='10'>
                            <tr><td><h3>ID:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$id."</h3></td></tr>
                            <tr><td><h3>USERNAME:&emsp;&emsp;".$_SESSION['username']."</h3></td></tr>
                            <tr><td><h3>EMAIL:&ensp;&emsp;&emsp;&emsp;&emsp;".$mail."</h3></td></tr>
                            <tr><td><button class='btn btn-primary' type='submit' name='post'><a href='post.php' class='text-white'>POST</a></button></td></tr>                       
                            <tr><td><button class='btn btn-success'><a href='change_pwd.php' class='text-white'>CHANGE PASSWORD</a></button></td></tr>
                            <tr><td><button class='btn btn-danger'><a href='dlt_account.php' class='text-white'>DELETE ACCOUNT</a></button></td></tr>
                            
                            
                            </table>
                        </div>
                    </div>
                </div>
                
            ";}
            else{
                
                echo "
                <div id='error'>
                <h1 >404 Error</h1>
                </div>
                ";
            
            }
        ?>
    </div>
   


    <script src="static/jquery-3.min.js"></script>
	<script src="static/tether/dist/js/tether.min.js"></script>
	<script src="static/js/bootstrp.min.js"></script>
</body>
</html>