<?php

class ConnectionMysql {

  private $connection;

  public function __construct( $server, $user, $password, $database ){

    try{
      $this->connection = new PDO( "mysql:host=$server;dbname=$database", $user, $password );
      $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      
    }catch( \Throwable $error ){
      print_r('Database connection failed: '.$error);
    }
    
  }
  
  public function consult( $sql ){
    $query = $this->connection->prepare( $sql );// Mete la consulta en una variable
    $query->execute();
    
    return stripos( $sql, 'SELECT' ) !== false 
      ? $query->fetchAll()
      : $this->connection->lastInsertId();
  }

}

?>