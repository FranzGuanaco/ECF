<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database ="dbClient";

$con = mysqli_connect($servername, $username, $password, $database);

$user = $_POST['nouveau_user'];
$s = $_POST['se'];
$newbutton = $_POST['bouton_non_toggle'];


$new_User="INSERT INTO Clients_data (name, description, url, Activation) VALUES ('$user', 'manager', '', 1)";
$essai = "UPDATE `Clients_data` SET `members_write`=0 WHERE name = '$user'";

$nofiltre = mysqli_query($con,$casual);
$posts = mysqli_fetch_all($nofiltre,MYSQLI_ASSOC);

if (isset($s)){

    $resultat = mysqli_query($con,$new_User);
    $posts = mysqli_fetch_all($resultat,MYSQLI_ASSOC);

}


if (isset($newbutton)){

    $resultats = mysqli_query($con,$essai);
    $posts = mysqli_fetch_all($resultats,MYSQLI_ASSOC);

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


    <div class="container-sm">
        <form action= "Interface3.php" method="POST">
    <div>
        <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9 ">
            
                    <input type="radio" name="bouton_non_toggle" >
                    
        
    </div>
        <div class="div-input">
            <div class="size"><p>members_read</p></div><br>
    </div>
</div>
    <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9">
        <div class="div-label">
        

    </div>
        <div class="div-input">
        <div class="size"><p>members_write</p></div><br>

        <?php
                    if($posts['members_read']==0) 
  
                        
                        echo 
                        'oui';
                    else 
                        echo 
                        "r";
                    ?>
    </div>
    </div>
    <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9">
        <div class="div-label">
         </div>

        <div class="div-input">
            <div class="size"><p>members_add</p></div><br>
    </div>
</div>
        <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9 ">
            <div class="div-label">
       
        </div>
        <div class="div-input">
            <div class="size"><p>members_payment_schedule_read</p></div><br>
        </div>
        </div>
        
        </div>

       
</div>
    <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9">
        <div class="div-label">
        
    </div>
        <div class="div-input">
        <div class="size"><p>members_products_read</p></div><br>
    </div>
    </div>
    <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9">
        <div class="div-label">
        
        </div>
        <div class="div-input">
            <div class="size"><p>payment_schedule_read</p></div><br>
    </div>
</div>
        <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9 ">
            <div class="div-label">
       
        </div>
        <div class="div-input">
            <div class="size"><p>payment_schedule_write</p></div><br>
        </div>
        </div>
        
     
</div>
    <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9">
        <div class="div-label">
        
    </div>
        <div class="div-input">
        <div class="size"><p>members_statistiques_read</p></div><br>
    </div>
    </div>
    <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9">
        <div class="div-label">
        
        </div>
        <div class="div-input">
            <div class="size"><p>payment_day_read</p></div><br>
    </div>
</div>
        <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9 ">
            <div class="div-label">
       
        </div>
        <div class="div-input">
            <div class="size"><p>members_subscription_read</p></div><br>
        </div>
        </div>
        
        </div>
      
    </div>

    <div class="div-permission">
    <input type="text" class="button10" placeholder="Client_name" name="nouveau_user">
    <input type="submit" name="se" hidden>
    
    <label class="switch">
        <input type="checkbox" id="togBtn" onclick="myFunction()" >
        <div class="slider round"></div>
        </label>
        <input type="submit" id="myDIV" style="display: none;" name="valider" onclick="style.display = 'none'">
  </div>

    </div>
    </form>
 
    


    </head>
    </html>


