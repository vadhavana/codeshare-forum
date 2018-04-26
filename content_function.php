<?php
include('dbconn.php');

function ins_content_test(){
    include('dbconn.php');

    $query = mysqli_query($con,"SELECT * FROM content");
while($row = mysqli_fetch_assoc($query))
{
    echo "
            <table style='border:2px solid;'>
            <tr style='border:2px solid;'><td >".$row['id']."</td>
            <br>
            <br>
            <td>".$row['content']."</td></tr>
            </table>
        ";
}
}


function disp_post()
{
    include('dbconn.php');
    $query = mysqli_query($con,"SELECT author,content,date_posted FROM post");
    echo "<div class='container mt-5 card bg-light'>";
    while($row=mysqli_fetch_assoc($query))
    {
        echo "
        <br>
        <br>
         <div class='card card-body border-success'>
            
                <div style='width:20rem'>           
               <h4>Author:- ".$row['author']."<h4>
                ".$row['content']."
               <h4> Date:-".$row['date_posted']."<h4>
               <br>           
            </div>
            </div>
        ";
    }
   echo " </div>";
}

//disp_post();


//ins_content_test();
?>

