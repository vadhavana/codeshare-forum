<?php
include('dbconn.php');
include('base.php');

function category()
{
    include('dbconn.php');
    $query = mysqli_query($con,"SELECT author,content,date_posted FROM post");
    $q = mysqli_query($con,"SELECT * FROM reply");
    echo "<div class='container mt-5 card bg-light'>";
    while($row=mysqli_fetch_assoc($query))
    {
        echo "
        <br>
        <br>
        <div class='card card-body border-secondary'>
        <div style='width:20rem'>
    
                
               <h4>Author:- ".$row['author']."<h4>
                ".$row['content']."
               <h4> Date:-".$row['date_posted']."<h4>
               <br>
               <br>
               <form action='reply.php' method='post'>
               <button class='btn btn-secondary' name='reply' >Reply</button> 
           </form>
           <br>
           <br>
           ";
           while($row=mysqli_fetch_assoc($q))
                {
                   echo"  <br>
                   <cite>-".$row['reply_content']."
                   <br>
                   </cite>";
                  
                }
          
          
           echo"<br>
                <br>               
                </div>
                </div>
                "; 
                
    }
    
   echo " </div>";

}

category();

?>