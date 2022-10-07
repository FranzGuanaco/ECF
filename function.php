<?php require 'connection.php';



    
$test = $_POST['valider'];
$nom = $_POST[''];


$test = "UPDATE Clients_data SET activation = (CASE WHEN activation = 1 THEN 0 ELSE 1 END) WHERE name = 'Frank Lin';";


try {

    $pdo = new PDO($mysqlDsn, $db_password ='root', $db_user ='root');


 if (isset($_POST['valider'])){

    $pdo -> query($test);

   echo 'oui';

}
   else{
      echo 'non';
 };

 }


catch(PDOException $e) {

    echo "rpr". $e->getMessage();
}

?>
