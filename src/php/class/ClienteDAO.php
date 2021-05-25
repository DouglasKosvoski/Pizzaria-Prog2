<?php
require_once "Connection.php";
require_once "Cliente.php";

class ClienteDAO {
  public $conexao;
  
  public function __construct(){
    $this->conexao = Connection::connect();
  }
  
  public function acessar($email, $senha) {
    try {
      $query = $this->conexao->prepare("select codigo, nome, telefone, senha from cliente where email = :e");
      $query->bindParam(":e", $email);
      $query->execute();
      $registro = $query->fetchAll(PDO::FETCH_CLASS, "Cliente");
      
      if($query->rowCount() == 1) {
        if(!password_verify($senha, $registro[0]->getSenha())) {
          return false;
        }
        else {
          return $registro[0];
        }
      }       
      else {
        return false;
      }     
    }
    catch(PDOException $e) {
      echo "Erro no acesso aos dados: ". $e->getMessage();
    }
  }
  
  public function cadastrar(Cliente $user) {
    $senha = password_hash($user->getSenha(), PASSWORD_DEFAULT);

    try {
      $query = $this->conexao->prepare("insert into cliente values (null, :nome, :mail, :tel, :dt, :pswd, :end, null, null, null, null, :obs)");
      $query->bindValue(":nome", $user->getNome());
      $query->bindValue(":mail", $user->getEmail());
      $query->bindValue(":tel", $user->getTelefone());
      $query->bindValue(":dt", $user->getDataNascimento());
      $query->bindValue(":pswd", $senha);
      $query->bindValue(":end", $user->getEndereco());
      $query->bindValue(":obs", $user->getObservacoes());
      return $query->execute();
    }
    catch (PDOException $e){
      echo "Erro no acesso aos dados: ". $e->getMessage();
    }
  }
}

?>   