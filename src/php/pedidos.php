<?php include './static/header.php'; ?>
<?php include './static/navbar.php'; ?>

<main>
  <p class="pedido">Faça o seu Pedido</p>
  <!-- Dropdown com os tamanhos -->
  <div class="tamanho-pizza" onchange="sabores()">
    <select id="tamanho" >
      <option value="Vazio">Selecione o Tamanho da Pizza</option>
      <option value="pequena">Pequena</option>
      <option value="media">Média</option>
      <option value="grande">Grande</option>
      <option value="familia">Família</option>
    </select>
  </div>
  
  <!-- Menu de Sabores -->
  <ul id="sabores" class="sabores" onchange="sabores()">
    <?php 
    require_once "./php/class/Flavour.php";
    require_once "./php/class/FlavourDAO.php";
    
    $asd = new FlavourDAO();
    $lista = $asd->list();
    
    foreach ($lista as $sabor) { ?>
      <li class="sabores-item">
        <p>
          <?=$sabor->getName()?>
        </p>
        <input style="display : none;" type="checkbox" id="<?=$sabor->getId()?>"/>
        <label id="sabor-label" for="<?=$sabor->getId()?>">
          <p>
            <?=$sabor->getIngredients()?>
          </p>
          <img src="../imgs/sabores/<?=$sabor->getImageName()?>">
        </label>
      </li>
    <?php } ?>
  </ul>
  
  <p id="qtd_sabores" style="text-align: center; font-size: 1.4rem; padding: 1rem;">Você selecionou 0 de 0 sabores.</p>
  
  <!-- Dropdown com as opcoes de bordas -->
  <div class="recheio-bordas" id="recheio-bordas" onchange="sabores()">
    <label>Sem bordas
      <input value="Sem bordas" type="radio" name="radio" checked/>
    </label>
    
    <label>Cheddar
      <input value="Cheddar" type="radio" name="radio"/>
    </label>
    
    <label>Catupiry
      <input value="Catupiry" type="radio" name="radio"/>
    </label>
  </div>
  <button class="btn pedido-btn" onclick="finalizar_pedido()" type="button">Finalizar Pedido</button>
</main>

<?php include './static/promo.php'; ?>
<?php include './static/chat.php'; ?>
<?php include './static/footer.php'; ?>