<?php
include_once "../class/FlavourDAO.php";
if(!isset($_GET['acao'])){
  $titulo = "Lista de Sabores";
  $obj = new FlavourDAO();
  $lista = $obj->list();
  
  include "static/header.php";
  include "static/navbar.php";
  include "views/listaSabor.php";
  include "static/footer.php";
  
}
else {    
  switch($_GET['acao']){
    case 'cadastrar':
    $titulo = "Cadastro de Sabor";
    
    if(!isset($_POST['cadastrar'])){
      include "static/header.php";
      include "static/navbar.php";
      include "views/cadastraSabor.php";
      include "static/footer.php";              
    }
    else {
      $novo = new Flavour();
      $novo->setName($_POST['field_nome']);
      $novo->setIngredients($_POST['field_ingredientes']);
      $novo->setImageName($_FILES['field_imagem']['name']);
      $erros = $novo->validate();
      
      if(count($erros) != 0){
        include "static/header.php";
        include "static/navbar.php";
        include "views/cadastraSabor.php";
        include "static/footer.php";                        
      }
      else {
        $origem = $_FILES['field_imagem']['tmp_name'];
        $destino = "../../../imgs/sabores/".$_FILES['field_imagem']['name']; 
        
        if(move_uploaded_file($origem, $destino)){
          $bd = new FlavourDAO();
          if($bd->inserir($novo)) {
            header("Location:saborController.php");
          }
        }
        else{
          $erros[] = "Erro no upload";
          include "static/header.php";
          include "static/navbar.php";
          include "views/cadastraSabor.php";
          include "static/footer.php";                         
        }
      }
    }
    break;
    
    default:
    echo "Ação não permitida";
    break;
    
  }
}
?>