<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $database ="dbClient";

  
  
  $con = mysqli_connect($servername, $username, $password, $database);
  
    
    if (isset($_GET['Id'])){
  
        
        $post_id=$_GET['Id'];
  
        
        $sql="UPDATE `Clients_data` SET 
            `Activation`=0 WHERE Id='$post_id'";
  

        mysqli_query($con,$sql);
    }

    
    header('location: Interface.php');
?>