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
    .ftr {
    position:fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    height:4vh;
    text-align: center;
    background-color: #171516;
    }
    </style>  
</head>
<body>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">
  <img src="static/image/icon1.png" width="30" height="30" alt="">
  Codeshare</a>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="category.php">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="users.php">Users</a>
      </li>
      
        <?php
        include('dbconn.php');
        session_start();
        if(isset($_SESSION['username']))
        {
          echo "<li class='nav-item'>";
          echo "<a class='nav-link' href='profile.php'>profile</a>";
          echo "</li>";

          echo "<li class='nav-item'>";
          echo "<a class='nav-link' href='logout.php'>logout</a>";
          echo "</li>";

          echo "<li class='nav-item'>";
          echo "<a class='nav-link btn btn-outline-info navbar-btn' href='post.php'>Post</a>";
          echo "</li>";

          echo "<li class='nav-item text-success'>";
          echo "Hello"." ".$_SESSION['username']." "."!";
          echo "</li>";
        }
        else
        {
         echo "<li class='nav-item'>";
         echo' <a class="nav-link" href="login.php">Login</a>';
         echo "</li>";

          echo "<li class='nav-item'>";
          echo "<a class='nav-link' href='signup.php'>signup</a>";
          echo "</li>";
        }  
        ?>
      
      
      
    </ul>
  </div>
</nav>  

    <script src="static/jquery-3.min.js"></script>
	<script src="static/tether/dist/js/tether.min.js"></script>
	<script src="static/js/bootstrp.min.js"></script>

    
</body>

<footer class="ftr text-white">
<p> © 2018 Copyright: <a href="index.php">CodeShare</a></p>  
</footer>

</html>