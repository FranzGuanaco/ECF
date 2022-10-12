<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $database ="dbClient";
  
  $con = mysqli_connect($servername, $username, $password, $database);

  
    // Check if id is set or not if true toggle,
    // else simply go back to the page
    if (isset($_GET['Id'])){
  
        // Store the value from get to a 
        // local variable "course_id"
        $post_id=$_GET['Id'];
  
        // SQL query that sets the status
        // to 1 to indicate activation.
        $sql="UPDATE `Clients_data` SET 
             `Activation`=1 WHERE Id='$post_id'";
  
        // Execute the query
        mysqli_query($con,$sql);
    }
  
    // Go back to course-page.php
    header('location: Interface.php');
?>