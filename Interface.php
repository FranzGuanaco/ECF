<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database ="dbClient";

$con = mysqli_connect($servername, $username, $password, $database);

  
  
// Get all the courses from courses table
// execute the query 
// Store the result
$sql = "SELECT * FROM `Clients_data`";
$Sql_query = mysqli_query($con,$sql);
$posts = mysqli_fetch_all($Sql_query,MYSQLI_ASSOC);
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
<body style="height:100%;">


    
<header>
   <!-- 1er carré example -->

  <div style="padding-left: 35px; padding-top: 30px;">
    <div class="container-sm">
  <div style="border: 1px solid #8BC345; width: 98%; height: 255px; border-radius:16px; padding-top: 15px;">

    <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9 pull-left " style="margin-left: 15px;">
      <input type="text" class="button1" placeholder="Client_name">
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-1" style="margin-left: 11px;">
      <input type="text" class="button1" placeholder="Client_id">
    </div>

    <div style="width: 28%; height: 34%; padding-top: 130px; margin-left: 11px;">
      
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5">
      <input type="submit" class="button2" value="Actif">
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
      <input type="submit" class="button2" value="Non-actif">
    </div>
      </div>
      
    
    </div>
    </div>
    </div>

</header>



<?php
  
  // Use foreach to access all the courses data
  foreach ($posts as $post) { ?>

      
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
          <div class="card">
            <div class="card-body">
    <div style="padding-top: 10px;">

        <form action="function.php" method="POST" name="Marc Ruffier">


    <div class="user_style">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right">


        
            <p><?php echo $post['Id']; ?></p>
            <p><?php echo $post['name']; ?></p>
            <p><?php echo $post['description']; ?></p>
            <p>url</p>
        </div>
      
        
        <?php 
                        
                        if($post['Activation']=="1") 
                            echo "Active";
                        else 
                            echo "Inactive";
                    ?>               

      

     
      <!-- switch button checker margin -->

      

        <div class="col-xs-1 col-sm-12 col-md-7 col-lg-7 " style="padding-top: 75px;" >
          
          <label class="switch">
          <input type="checkbox" id="togBtn" onclick="myFunction()" <?php 
                    if($post['Activation']=="1") 
  
                        echo 
"<a href=deactivate.php?id=".$post['Id']." checked >checked</a>";
                    else 
                        echo 
"<a href=activate.php?id=".$post['Id']."></a>";
                    ?>>
          
          <div class="slider round"></div>
          </label>
          <input type="submit" id="myDIV" style="display: none;" name="valider" onclick="style.display = 'none'" >


          
    </div>
        </div>
          </div>
            </div>
              </div>
                </div>
                 </div>
                  </form>
        <?php
                }
                // End the foreach loop 
           ?>

      
      
        
         
</div>
</div>
</div>


</body>
</html>
