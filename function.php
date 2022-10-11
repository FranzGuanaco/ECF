<?php require 'connection.php';

header('Location: hhttp://localhost:8888/index.php/ECF/ECF/Interface.php');

    
$test = $_POST['valider'];
$nom = $_POST['user'];

// activation (on) est agal à 1

$test = "UPDATE Clients_data SET activation = (CASE WHEN activation = 1 THEN 0 ELSE 1 END) WHERE name = name;";


try {

    $pdo = new PDO($mysqlDsn, $db_password ='root', $db_user ='root');


 if (isset($_POST['valider'])){

    $pdo -> query($test);

}
  

 }


catch(PDOException $e) {

    echo "rpr". $e->getMessage();
}

?>
