<?php

$mysqlDsn = 'mysql: host=localhost; dbname=dbClient';

    
$test = $_POST['valider'];
$nom = $_POST[''];


/*$activation = "UPDATE Clients_data
SET Activation=1
where name = 'Frank Lin';";

$desactivation = "UPDATE Clients_data
SET Activation=0
where name = 'Frank Lin';";
*/

$test = "UPDATE Clients_data SET activation = (CASE WHEN activation = 1 THEN 0 ELSE 1 END) WHERE name = 'Frank Lin';";




try {

    $pdo = new PDO($mysqlDsn, $db_password ='root', $db_user ='root');

 /* $testActivation = ("SELECT Activation from Clients_data where name = 'Frank Lin';");
   $user = $pdo -> query($testActivation); */


 if ($pdo -> query($test)){

   echo 'oui';}
   else{
      echo 'non';
 };

 }


catch(PDOException $e) {

    echo "rpr". $e->getMessage();
}

?>
