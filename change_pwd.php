<?php
include('dbconn.php');
include('base.php');

if (isset($_SESSION['username']))
{
    

echo "

<div class='container-fluid con'>
<div class='jumbotron'>
   <h1 class='diasplay-3 text-center'>Change Password</h1>
   <form class='text-center' action='' method='POST'>
       <br>
       <br>
       <br>
        Old Password:&nbsp&nbsp&nbsp&nbsp<input type='password' id='passwordinput' name='passwordinput' /><span style='color:#FF0000'>*</span>
         <br>
         <br>
        New Password:&nbsp&nbsp&nbsp<input type='password' id='passwordinput' name='passwordinput1' /><span style='color:#FF0000'>*</span>
         <br>
         <br>
         <button type='submit' class='btn btn-outline-success my-2 my-sm-0' name='submit' value='change'>Change</button>
         <br>
         <br>
         </form>
</div>
</div>

";
$o_pwd = $_POST['passwordinput'];
$n_pwd = $_POST['passwordinput1'];
$query = mysqli_query($con,"UPDATE users SET password='$n_pwd' WHERE password='$o_pwd'");


}
else
{
    echo "<h1 style='text-align:center'>404 Error</h1>";
}

?>