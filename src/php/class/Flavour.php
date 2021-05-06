<?php 

class Flavour{
  private $codigo;
  private $nome;
  private $ingredientes;
  private $nomeImagem;
  
  // métodos
  public function getId(){
    return $this->codigo;
  }
  
  public function setId($cod){
    $this->codigo = $cod;
  }
  
  public function getName(){
    return $this->nome;
  }
  
  public function setName($nome){
    $this->nome = $nome;
  }
  
  public function getIngredients(){
    return $this->ingredientes;
  }
  
  public function setIngredients($ingredients){
    $this->ingredientes = $ingredients;
  }
  
  public function getImageName(){
    return $this->nomeImagem;
  }
  
  public function setImageName($nomeImagem){
    $this->nomeImagem = $nomeImagem;
  } 
  
  public function validate(){
    $erros = array();
    if (empty($this->getName())) {
      $erros[] = 'Necessario informar um nome';
    }
    if (empty($this->getIngredients())) {
      $erros[] = 'Necessario informar os ingredientes';
    }
    if (empty($this->getImageName())) {
      $erros[] = 'Necessario selecionar uma imagem';
    }
    return $erros;
  } 
}

?>