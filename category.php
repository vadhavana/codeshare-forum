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
<div class="container mt-5 card bg-light mb-3">
                <?php
                include('dbconn.php');
                $select = mysqli_query($con,"SELECT * FROM category");
                while($row = mysqli_fetch_assoc($select))
                {
                echo "
                <br>
                <br>
                <div class='card card-body border-primary'>
                <div>
                <h4><a href='/codeshare/post_r.php'>".$row['cat_title']."</a></h4>
                <p>".$row['cat_desc']."</p>
                <br> 
                <br>
                <br>
                </div>    
                </div>        
                ";}
                
                 ?>  
                 <br> 
                <br>
                <br>
                
        
        
                
    </div>   
       


    <script src="static/jquery-3.min.js"></script>
	<script src="static/tether/dist/js/tether.min.js"></script>
	<script src="static/js/bootstrp.min.js"></script>
</body>
</html>