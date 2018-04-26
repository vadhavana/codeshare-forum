<?php
include('dbconn.php');
include('base.php');


echo "
    <div class='container con-1'>
        <form action='' method='POST'>
        <textarea  name='textarea' rows='10'cols='100'></textarea>
        <br>
        <input type='submit' name='reply' value='Reply' class='btn btn-primary text-white'>
        </form>
    </div>
";
 

if(isset($_POST['reply']))
if(!empty($_POST['textarea']))
{

  
    mysqli_query($con,"INSERT INTO reply (p_id,cat_id,reply_content,author) VALUES (1,1,'".$_POST['textarea']."','".$_SESSION['username']."')");
}

?>

