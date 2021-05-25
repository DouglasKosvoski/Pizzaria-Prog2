<?php
class Cliente {
  private $codigo;
  private $nome;
  private $email;
  private $telefone;
  private $dataNascimento;
  private $senha;
  private $senha2;
  private $endereco;
  private $observacoes;
  
  public function getCodigo() {
    return $this->codigo;
  }
  
  public function setCodigo($codigo) {
    $this->codigo = $codigo;
  }
  
  public function getNome() {
    return $this->nome;
  }
  
  public function setNome($nome) {
    $this->nome = $nome;
  }
  
  public function getEmail() {
    return $this->email;
  }
  
  public function setEmail($email) {
    $this->email = $email;
  }
  
  public function getTelefone() {
    return $this->telefone;
  }
  
  public function setTelefone($telefone) {
    $this->telefone = $telefone;
  }
  
  public function getDataNascimento() {
    return $this->dataNascimento;
  }
  
  public function setDataNascimento($dataNascimento) {
    $this->dataNascimento = $dataNascimento;
  }
  
  public function getSenha() {
    return $this->senha;
  }
  
  public function setSenha($senha) {
    $this->senha = $senha;
  }
  
  public function getSenha2() {
    return $this->senha2;
  }
  
  public function setSenha2($senha2) {
    $this->senha2 = $senha2;
  }
  
  public function getEndereco() {
    return $this->endereco;
  }
  
  public function setEndereco($endereco) {
    $this->endereco = $endereco;
  }
  
  public function getObservacoes() {
    return $this->observacoes;
  }
  
  public function setObservacoes($observacoes) {
    $this->observacoes = $observacoes;
  }
  
  public function validate(){
    $erros = array();
    if(empty($this->getNome())) {
      $erros[] = "É necessário informar um nome";
    }
    
    if(empty($this->getEmail())) {
      $erros[] = "É necessário informar um endereço de e-mail";
    }
    elseif(!filter_var($this->getEmail(), FILTER_VALIDATE_EMAIL)) {
      $erros[] = "Verifique o formato do endereço de e-mail";            
    }

    if(empty($this->getTelefone())) {
      $erros[] = "É necessário informar um número de telefone";   
    }
    
    if(strlen($this->getSenha()) < 6) {
      $erros[] = "A senha deve ter no mínimo 6 caracteres";          
    }
    
    if($this->getSenha() !=  $this->getSenha2()) {
      $erros[] = "As senhas não conferem";                   
    }
    return $erros;                                 
  }     
}