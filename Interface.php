<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database ="dbClient";

$con = mysqli_connect($servername, $username, $password, $database);

$inactif = $_POST['boutton_inactif'];
$actif = $_POST['boutton_actif'];
$s = $_POST['se'];
$data = $_POST['search'];
 
$requete_actif = "SELECT * FROM `Clients_data` where Activation = 1";
$requete_inactif = "SELECT * FROM `Clients_data` where Activation = 0";
$casual = "SELECT * FROM `Clients_data`";
$search_box = "SELECT * FROM `Clients_data` where name = '$data' ";

$nofiltre = mysqli_query($con,$casual);
$posts = mysqli_fetch_all($nofiltre,MYSQLI_ASSOC);

if(isset($inactif)){
  $filtre1 = mysqli_query($con,$requete_inactif);
$posts = mysqli_fetch_all($filtre1,MYSQLI_ASSOC);

}

if(isset($actif)){
$filtre2 = mysqli_query($con,$requete_actif);
$posts = mysqli_fetch_all($filtre2,MYSQLI_ASSOC);
}


if(isset($s)) {  
  $filtre3 = mysqli_query($con,$search_box);
  $posts = mysqli_fetch_all($filtre3,MYSQLI_ASSOC);
}



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


    
<header>
   <!-- 1er carré example -->

  <div style="padding-left: 35px; padding-top: 30px;">
    <div class="container-sm">
  <div style="border: 1px solid #8BC345; width: 98%; height: 255px; border-radius:16px; padding-top: 15px;">

  <form action="Interface.php" method="POST" >
    <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9 pull-left " style="margin-left: 15px;">
      <input type="text" class="button1" placeholder="Client_name" name="search">
      <input type="submit" name="se" hidden>
    </div>

  
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-1" style="margin-left: 11px;">
      <input type="text" class="button1" placeholder="Client_id">
      <input type="submit" hidden />
    </div>
</form>

    <div style="width: 28%; height: 34%; padding-top: 130px; margin-left: 11px;">
      

    <form action="Interface.php" method="POST" >
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5">
      <input type="submit" class="button2" value="Actif" name="boutton_actif">
    </div>
   

    
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
      <input type="submit" class="button2" value="Non-actif" name="boutton_inactif">
      </div>
</form>

   
      </div>
        </div>
          </div>
            </div>

</header>
     
    
  
<body>
    
        <?php
  
            // Un foreach pour afficher toutes la base de données
            foreach ($posts as $course) { ?>


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
          <div class="card">
            <div class="card-body">
    <div style="padding-top: 10px;">

        <form >


    <div class="user_style">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right">
        <p><?php echo $course['Id']; ?></p>
            <p><?php echo $course['name']; ?></p>
            <p><?php echo $course['description']; ?></p>
            <p>url</p>
        </div>
           <?php 
                        
                        if($course['Activation']=="1") 
                            echo "Active";
                        else 
                            echo "Inactive";
                    ?>                          
               


               <div class="col-xs-1 col-sm-12 col-md-7 col-lg-7 " style="padding-top: 75px;" >
          
               
            <?php
                    if($course['Activation']=="1") 
  
                        
                        echo 
"<a href=deactivate.php?Id=".$course['Id']." <label class='switch'><input type='checkbox' id='togBtn' checked>
<div class='slider round'></div>
</label> ></a>";
                    else 
                        echo 
"<a href=activate.php?Id=".$course['Id']." <label class='switch'><input type='checkbox' id='togBtn' onclick='myFunction()' >
<div class='slider round'></div>
</label>
<input type='submit' id='myDIV' style='display: none;' name='valider' onclick='style.display = 'none'' >></a>";
                    ?>
            

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
   
</body>
  
</html>
