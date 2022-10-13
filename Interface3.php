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


    <div class="container-sm">
    <div>
        <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9 ">
            <div class="div-label">
                <label class="switch">
                    <input type="checkbox" id="togBtn" onclick="myFunction()" >
                    <div class="slider round"></div>
                    </label>
        
    </div>
        <div class="div-input">
            <div class="size"><h1>members_read</h1></div><br>
    </div>
</div>
    <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9">
        <div class="div-label">
        
    </div>
        <div class="div-input">
        <div class="size"><h1>members_write</h1></div><br>

        <?php
                    if($posts['members_read']=="0") 
  
                        
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
            <div class="size"><h1>members_add</h1></div><br>
    </div>
</div>
        <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9 ">
            <div class="div-label">
       
        </div>
        <div class="div-input">
            <div class="size"><h1>members_payment_schedule_read</h1></div><br>
        </div>
        </div>
        
        </div>

       
</div>
    <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9">
        <div class="div-label">
        
    </div>
        <div class="div-input">
        <div class="size"><h1>members_products_read</h1></div><br>
    </div>
    </div>
    <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9">
        <div class="div-label">
        
        </div>
        <div class="div-input">
            <div class="size"><h1>payment_schedule_read</h1></div><br>
    </div>
</div>
        <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9 ">
            <div class="div-label">
       
        </div>
        <div class="div-input">
            <div class="size"><h1>payment_schedule_write</h1></div><br>
        </div>
        </div>
        
     
</div>
    <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9">
        <div class="div-label">
        
    </div>
        <div class="div-input">
        <div class="size"><h1>members_statistiques_read</h1></div><br>
    </div>
    </div>
    <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9">
        <div class="div-label">
        
        </div>
        <div class="div-input">
            <div class="size"><h1>payment_day_read</h1></div><br>
    </div>
</div>
        <div class="col-xs-5 pull-right col-sm-6 col-md-6 col-lg-9 ">
            <div class="div-label">
       
        </div>
        <div class="div-input">
            <div class="size"><h1>members_subscription_read</h1></div><br>
        </div>
        </div>
        
        </div>
      </form>
    </div>

    <div class="div-permission">
    <input type="text" class="button10" placeholder="Client_name">
    
    <label class="switch">
        <input type="checkbox" id="togBtn" onclick="myFunction()" >
        <div class="slider round"></div>
        </label>
        <input type="submit" id="myDIV" style="display: none;" name="valider" onclick="style.display = 'none'">
  </div>

    </div>

 
    


    </head>
    </html>


