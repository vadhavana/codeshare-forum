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
    <div class="container con-1">
    <div>
    <!---<textarea class="tinymce" name="txt" id="txt"></textarea>-->
    
    
        <script type="text/javascript" src="static/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
        <script type="text/javascript" src="static/tinymce/js/tinymce/tinymce.min.js" charset="utf-8"></script>
        <script type="text/javascript" src="static/tinymce/js/tinymce/init-tinymce.js"></script>
        
        <?php
            include('dbconn.php');
           
            $select = mysqli_query($con,"SELECT * FROM category");

            if(isset($_SESSION['username'])){
               
                //dropdown code

            echo "
                <br>
                <form  method='POST'>
                <textarea class='tinymce' name='textarea'></textarea>
                <br>
                
                <input type='submit' name='upload' value='Upload' class='btn btn-primary text-white'>
                <select class='btn btn-dark dropdown-toggle' name='category'>
                </form> 
                ";
                
                while($row=mysqli_fetch_assoc($select))
                {
                    echo "<option  class='btn btn-dark dropdown-toggle' value=".$row['cat_id'].">".$row['cat_title']."-".$row['cat_id']."</option>";

                }
                
                
                
                
           if(isset($_POST['textarea'])){
                if(isset($_POST['upload'])){

               
               
                $content = $_POST['textarea'];    
                $category = $_POST['category']; 
                if(!empty($content))
                { 
              mysqli_query($con,"INSERT INTO post (cat_id,author,content,category) VALUES ($category,'".$_SESSION['username']."','$content',$category)") or die(mysqli_error()) ;
             // mysqli_query($con,"INSERT INTO content (`content`) VALUES('$content')");
              // echo $content;
                }
            }
              
      }
        }
        else
        {
            echo "<h1 style='text-align:center'>404 Error</h1>";
        }
        ?>
      
        
    </div>
                
    </div>      


    <script src="static/jquery-3.min.js"></script>
	<script src="static/tether/dist/js/tether.min.js"></script>
	<script src="static/js/bootstrp.min.js"></script>
</body>
</html>