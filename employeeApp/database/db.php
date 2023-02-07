<?php

class ConnectionMysql {

  private $server = "localhost";
  private $database = "employeeApp";
  private $user = "root";
  private $password = "";
  private $connection;

  public function __construct(){

    try{
      $this->connection = new PDO( "mysql:host=$this->server;dbname=$this->database", $this->user, $this->password );
      $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    }catch( PDOException $error ){
      return "Database connection failed: ".$error;
    }
      
  }

  public function consult( $sql, $amount = 0){
    $query = $this->connection->prepare( $sql );
    $query->execute();
    
    if( !str_contains($sql, "SELECT") ) return $this->connection->lastInsertId();
  
    return $amount 
    ? $query->fetch(PDO::FETCH_LAZY)
    : $query->fetchAll(PDO::FETCH_ASSOC);

  }

}

$connection = new ConnectionMysql();

// try {

//   $server = "localhost";
//   $database = "employeeApp";
//   $user = "root";
//   $password = "";

//   $connection = new PDO("mysql:host$server;dbname=$database", $user, $password);
//   $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// } catch (Exception $ex) {
//   echo $ex->getMessage();
// }

?>


