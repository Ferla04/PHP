<?php

$server = "localhost";
$database = "employeeApp";
$user = "root";
$password = "";

try {
  $connection = new PDO("mysql:host$server;dbname=$database", $user, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $ex) {
  echo $ex->getMessage();
}

?>


