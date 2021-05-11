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
  
  public function buscar($codigo) {
    try {
      $query = $this->connection->prepare("select codigo, nome, ingredientes, nomeImagem from sabor where codigo=".$codigo);
      // $query = bindvalue(":c", $codigo);
      $query->execute();
      $reg = $query->fetchAll(PDO::FETCH_CLASS, "Flavour");
      return $reg;
    }
    catch (PDOException $e){
      echo "Erro no acesso aos dados: ". $e->getMessage();
    }
  }
  
  public function inserir(Flavour $sabor) {
    try {
      $query = $this->connection->prepare("insert into sabor values(NULL, :n, :i, :f)");
      $query = bindvalue(":n", $sabor->getName());
      $query = bindvalue(":i", $sabor->getIngredients());
      $query = bindvalue(":f", $sabor->getImageName());
      return $query->execute();
    }
    catch (PDOException $e){
      echo "Erro no acesso aos dados: ". $e->getMessage();
    }
  }
  
  public function alterar(Flavour $sabor) {
    try {
      $query = $this->connection->prepare("update sabor set nome=:n, ingredientes=:i, nomeImagem=:f where codigo=:cod");
      $query = bindvalue(":cod", $sabor->getId());
      $query = bindvalue(":n", $sabor->getName());
      $query = bindvalue(":i", $sabor->getIngredients());
      $query = bindvalue(":f", $sabor->getImageName());
      return $query->execute();
    }
    catch (PDOException $e){
      echo "Erro no acesso aos dados: ". $e->getMessage();
    }
  }
}?>