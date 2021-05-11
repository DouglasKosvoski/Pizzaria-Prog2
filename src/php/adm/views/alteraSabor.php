<main>
  <h2 class="center"><?=$titulo?></h2>
  <div class="erro_cadastro">
    <?php
    if(isset($erros) && count($erros) != 0) {
      echo "<ul>";
      foreach($erros as $e) {
        echo "<li>$e</li>";
      }
      echo "</ul>";
    }
    
    $nome = isset($_POST['field_nome']) ? $_POST['field_nome'] : $sabor[0]->getName();
    $ingr = isset($_POST['field_ingredientes']) ? $_POST['field_ingredientes'] : $sabor[0]->getIngredients();
    $cod = isset($_POST['field_codigo']) ? $_POST['field_codigo'] : $sabor[0]->getId();
    ?>
  </div>
  
  
  <form class="center" style="margin:4rem; margin-bottom: 350px" action="controller.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="field_codigo" value="<?=$cod ?>">
    <div>
      <label for="id_nome">Nome: </label>
      <input type="text" name="field_nome" size="50" maxlength="50" id="id_nome" value="<?=$nome?>" autofocus>
    </div>
    
    <div>
      <label for="id_nome">Ingredientes: </label>
      <input type="text" name="field_ingredientes" size="100" maxlength="100" id="id_ingredientes" value="<?=$ingr?>">
    </div>
    
    <div>
      <label for="id_nome">Imagem: </label>
      <input type="file" name="field_imagem" id="id_imagem">
    </div>
    
    <br>
    
    <div>
      <button class="btn" style="margin-bottom:5px;" type="submit" name="cadastrar">Confirmar</button>
      <button class="btn" type="reset">Limpar campos</button>
    </div>
  </form>
</main>