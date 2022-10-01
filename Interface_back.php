<?php

$mysqlDsn = 'mysql: host=localhost; dbname=dbClient';


$DBClient = "CREATE DATABASE dbClient";
$tableClient = "CREATE TABLE Clients_data
( Id int not null auto_increment,
    name varchar (50) not null,
    description varchar (50) not null, 
    url varchar (50) not null,
    primary key (Id)

)";
    

try {
    $pdo = new PDO($mysqlDsn, $db_password ='root', $db_user ='root');


    
    if ($pdo -> query($tableClient)){

      echo "Connected successfully";
    }
    

   
}

catch(PDOException $e) {

    echo "rpr". $e->getMessage();
}

?>
