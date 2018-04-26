<?php
include('base.php');
include('dbconn.php');

if(isset($_SESSION['username'])){
echo "
<div class=' container con-1'>
    <h1 style='text-align:center'>Are you sure want to delete this account??</h1>
    <form action='dlt_account.php' method='POST'>
    <center><input type='submit' name='delete' value='Delete' class='btn btn-outline-danger text-black'></center>
    </form>
    </div>
";




if(isset($_POST['delete']))
{   
    
    $query = mysqli_query($con,"DELETE FROM users WHERE username ='".$_SESSION['username']."' ");
    if($query)
    {
        session_start();
	    session_destroy();
        header("Location: /codeshare/login.php");
    }
    else{
        echo "<h1 style='text-align:center'>DB error</h1>";

    }
}
}

?>