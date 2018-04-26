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
    .break {
    text-align:left;
    font-weight:bold;
   
}

    </style>

    
</head>
<body>
    <div class="container mt-5 card bg-light mb-3 break">
    <div>
                <?php
                include('dbconn.php');
                $select = mysqli_query($con,"SELECT * FROM users");
                while($row = mysqli_fetch_assoc($select))
                {
                echo "
                <br>
                <br>
                <div class='card card-body border-dark'>
                <h5 class=' text-success'>".$row['username']."</h5>
                <p class='text-danger'>".$row['email']."</p>                
                <cite>-".$row['date_j']."<cite>          
                <br>
                <br>
                <br>
                </div>            
                ";}
                
                 ?>  
                
    </div>      


    <script src="static/jquery-3.min.js"></script>
	<script src="static/tether/dist/js/tether.min.js"></script>
	<script src="static/js/bootstrp.min.js"></script>
</body>
</html>