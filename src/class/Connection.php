<?php
class Connection{

  public static $connection;
  
  public static function connect(){
    if(!isset(self::$connection)){
      try{
        self::$connection = new PDO("mysql:host=localhost; dbname=pizza", "admpizza", "12345");
      }
      catch(PDOException $e){
        echo "Erro de conexão: ". $e->getMessage();
        die();
      }
    }
    return self::$connection;
  }
}

?>