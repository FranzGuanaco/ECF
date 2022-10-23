<?php


$servername = "localhost";
$username = "root";
$password = "root";
$database ="dbClient";

$con = mysqli_connect($servername, $username, $password, $database);

$casual = "SELECT * FROM `Clients_data`";

$nofiltre = mysqli_query($con,$casual);
$posts = mysqli_fetch_all($nofiltre,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='interface.css'>
    <script src='alert.js' defer></script>
    
   
   
    
</head>

    


<body>

<div style="padding-left: 25px; padding-top: 30px;">
    <div class="container-sm">
  <div style=" width: 98%; height: 150px; border-radius:16px; padding-top: 15px;">

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-9 pull-left " style="margin-left: 15px;">
      <input type="submit" class="list" placeholder="o">
    </div>

    
      
    
    </div>
    </div>
    </div>

    <div style="padding-left: 55px; padding-top: 30px;">
        <div class="container-sm">
      <div style="border: 1px solid #8BC345; width: 1594px; height: 345px; border-radius:16px; padding-top: 35px;">
    
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-8">
            <div style="margin-left: 15px;">
          <input type="text" class="button3" placeholder="Salle">
            </div>
          <div style="padding-top:20px;">
            
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
          <input type="submit" class="button4" value="Actif">
            </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
            <div style="margin-left: 5px;">
          <input type="submit" class="button4" value="Non-actif">
            </div>
        </div>
        </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-1" style="margin-left: 100px;">
          <input type="submit" class="button3" value="Toutes">
          <div style="padding-top:20px;">
          <input type="submit" class="button3" value="Ajouter">
        </div>
        </div>
       
        

    
        
        
          </div>
          
          
        </div>
        </div>
        </div>

        

<?php 

foreach ($posts as $course) { ?>



    <!-- carré user -->
        
        
       
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-body">
   

            <div style="padding-top: 90px; padding-left: 30px;">
    <div class="user_style2">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
    
      
    
    
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p><?php echo $course['Id']; ?></p>
            <p>install_id</p>
            <p>branch_id</p>
            
        </div>
</div>
</div>
</div>
</div>
</div>
</div>

         
        <?php
                }
                // End the foreach loop 
           ?>


</body>
</html>