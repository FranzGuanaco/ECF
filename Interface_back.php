<?php

$mysqlDsn = 'mysql: host=localhost; dbname=dbClient';



/*$DBClient = "CREATE DATABASE dbClient";
$tableClient = "CREATE TABLE Clients_data
( Id int not null auto_increment,
    name varchar (50) not null,
    description varchar (50) not null, 
    url varchar (50) not null,
    primary key (Id)

)"; */

/* $data = [
    ['Jean Frederic', 'manager', 'root'],
    [ 'Marc Ruffier', 'technician', 'root'],
    [ 'Stephanie Dublanc', 'technician', 'root'],
    [ 'Ashley Fiss', 'technician', 'root'], 
    [ 'Frank Lin', 'technician', 'root'],
    [ 'Bastien Cedric', 'technician', 'root'],
    [ 'Jean Noire', 'technician', 'root'],
    [ 'Fiona Desley', 'technician', 'root'],
    [ 'Pierre Moulin', 'technician', 'root'], ]; */


    



try {

    $pdo = new PDO($mysqlDsn, $db_password ='root', $db_user ='root');

   /*  $stmt = $pdo->prepare("INSERT INTO Clients_data (name, description, url) VALUES (?,?,?)");

    $pdo->beginTransaction();
    foreach ($data as $row)
    {
        $stmt->execute($row);
    }
    $pdo->commit(); */

    


    
    

   
}

catch(PDOException $e) {

    echo "rpr". $e->getMessage();
}

?>
