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


<?php 

foreach ($posts as $course) { ?>

 

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="card">
      <div class="card-body">
          <div style="padding-top: 90px; padding-left: 30px;">
              <div class="user_style2">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                          <p>install_id</p>
                          <p>branch_id</p>
                      </div>
                      <button >Try it</button>

                 

                      <div class="DIV" name="DIV">
                          This is my DIV element.
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

<script>

document.addEventListener('click',e=>{
  if( e.target.tagName=='BUTTON' ){
    let div=e.target.parentNode.querySelector('div.DIV');
      div.style.display=div.style.display=='block' ? 'none' : 'block'
  }
})
</script>


</body>