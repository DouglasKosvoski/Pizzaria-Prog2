<div class="erro_cadastro_sabor">
  <?php 
    if (isset($erros) && count($erros) != 0) {
      echo "<ul>";
      foreach ($erros as $e) {
        echo "<li style='margin:5px;'>$e</li><br>";
      }
      echo "</ul>";
    }
    
    $nome = isset($_POST['field_nome']) ? $_POST['field_nome'] : "";
    $ingre = isset($_POST['field_ingredientes']) ? $_POST['field_ingredientes'] : "";
  ?>
</div>

<form class="center" style="margin:4rem; margin-bottom: 350px" action="" method="post" enctype="multipart/form-data">
  <div>
    <label for="id_nome">Nome: </label>
    <input type="text" name="field_nome" size="50" maxlength="50" id="id_nome" value="<?=$nome?>" autofocus>
  </div>
  
  <div>
    <label for="id_nome">Ingredientes: </label>
    <input type="text" name="field_ingredientes" size="100" maxlength="100" id="id_ingredientes" value="<?=$ingre?>">
  </div>
  
  <div>
    <label for="id_nome">Imagem: </label>
    <input type="file" name="field_imagem" id="id_imagem">
  </div>
  
  <br>
  
  <div>
    <button class="btn" type="submit" name="cadastrar">Confirmar</button>
    <button class="btn" type="reset">Limpar campos</button>
  </div>
</form>