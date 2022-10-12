<?php

/*$mysqlDsn = 'mysql: host=localhost; dbname=dbClient';*/


$servername = "localhost";
$username = "root";
$password = "root";
$database ="dbClient";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

?>