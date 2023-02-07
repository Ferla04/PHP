<?php

class ConnectionMysql {

  private $server = 'localhost';
  private $user = 'root';
  private $password = '';
  private $database = 'bookstore';
  private $connection;

  public function __construct(){

    try{
      $this->connection = new PDO( "mysql:host=$this->server;dbname=$this->database", $this->user, $this->password );
      $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    }catch( PDOException $error ){
      return 'Database connection failed: '.$error;
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