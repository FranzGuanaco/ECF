
<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $database ="dbClient";
  
  $con = mysqli_connect($servername, $username, $password, $database);

  
      $sql="UPDATE `Clients_data` SET 
           `Activation`=1 WHERE Id= 1";

     
      mysqli_query($con,$sql);
  

  
  header('location: Interface.php');
?>