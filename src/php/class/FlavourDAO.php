<?php

require_once "Connection.php";
require_once "Flavour.php";

class FlavourDAO {
  public $connection;
  
  public function __construct() {
    $this->connection = Connection::connect();
  }
  
  public function list() {
    try {
      $query = $this->connection->prepare("select * from sabor order by nome");
      $query->execute();
      $reg = $query->fetchAll(PDO::FETCH_CLASS, "Flavour");
      return $reg;
    }
    catch (PDOException $e){
      echo "Erro no acesso aos dados: ". $e->getMessage();
    }
  }
}

?>