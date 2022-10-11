<?php

$mysqlDsn = 'mysql: host=localhost; dbname=dbClient';

try {

$pdo = new PDO($mysqlDsn, $db_password ='root', $db_user ='root');

$query = $pdo ->query("SELECT * FROM Clients_data Order by Id DESC");
$post = $query -> fetchAll(PDO::FETCH_OBJ);
}

catch(PDOException $e) {
  echo "rpr". $e->getMessage();

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



    <!-- carré user -->
    <?php foreach($post as $posts): ?>
      
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
          <div class="card">
            <div class="card-body">
    <div style="padding-top: 10px;">

        <form action="function.php" method="POST" name="Marc Ruffier">


    <div class="user_style">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pull-right">


        
            <p><?= $posts->Id ?></p>
            <p><?= $posts->name ?></p>
            <p><?= $posts->description ?></p>
            <p>url</p>
        </div>
      
        <?php if($row['Activation']===0){

          echo 'Actif';
        }
        else{

          echo 'a';
        } ?>
    

      
     
      <!-- switch button checker margin -->

      

        <div class="col-xs-1 col-sm-12 col-md-7 col-lg-7 " style="padding-top: 75px;" >
          
          <label class="switch">
          <input type="checkbox" id="togBtn" onclick="myFunction()" >
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
        <?php endforeach ?>
      
      
        
         
</div>
</div>
</div>


</body>
</html>
