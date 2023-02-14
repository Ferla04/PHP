<?php

class ConnectionMysql {

  private $server;
  private $user;
  private $password;
  private $database;
  private $connection;

  public function __construct( $server, $user, $password, $database ){

    $this->server = $server;
    $this->user = $user;
    $this->password = $password;
    $this->database = $database;

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