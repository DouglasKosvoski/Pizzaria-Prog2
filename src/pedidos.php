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
    <li class="sabores-item">
      <p>atum</p>
      <input type="checkbox" id="myCheckbox1"/>
      <label id="sabor-label" for="myCheckbox1"><img src="../imgs/sabores/atum.jpg"/></label>
      <p>ingredientes: abc</p>
    </li>
    <li class="sabores-item">
      <p>alho</p>
      <input type="checkbox" id="myCheckbox2"/>
      <label id="sabor-label" for="myCheckbox2"><img src="../imgs/sabores/alho.jpg"/></label>
      <p>ingredientes: abc</p>
    </li>
    <li class="sabores-item">
      <p>frango</p>
      <input type="checkbox" id="myCheckbox3"/>
      <label id="sabor-label" for="myCheckbox3"><img src="../imgs/sabores/frango.jpg"/></label>
      <p>ingredientes: abc</p>
    </li>
    <li class="sabores-item">
      <p>marguerita</p>
      <input type="checkbox" id="myCheckbox4"/>
      <label id="sabor-label" for="myCheckbox4"><img src="../imgs/sabores/marguerita.jpg"/></label>
      <p>ingredientes: abc</p>
    </li>
    <li class="sabores-item">
      <p>milho</p>
      <input type="checkbox" id="myCheckbox5"/>
      <label id="sabor-label" for="myCheckbox5"><img src="../imgs/sabores/milho.jpg"/></label>
      <p>ingredientes: abc</p>
    </li>
    <li class="sabores-item">
      <p>mussarela</p>
      <input type="checkbox" id="myCheckbox6"/>
      <label id="sabor-label" for="myCheckbox6"><img src="../imgs/sabores/mussarela.jpg"/></label>
      <p>ingredientes: abc</p>
    </li>
    <li class="sabores-item">
      <p>strogonoff</p>
      <input type="checkbox" id="myCheckbox7"/>
      <label id="sabor-label" for="myCheckbox7"><img src="../imgs/sabores/strogonoff.jpg"/></label>
      <p>ingredientes: abc</p>
    </li>
    <li class="sabores-item">
      <p>vegetariana</p>
      <input type="checkbox" id="myCheckbox8"/>
      <label id="sabor-label" for="myCheckbox8"><img src="../imgs/sabores/vegetariana.jpg"/></label>
      <p>ingredientes: abc</p>
    </li>
  </ul>
  
  <p id="qtd_sabores" style="text-align: center; font-size: 1.4rem; padding: 1rem;">Você selecionou 0 de 0 sabores.</p>
  
  <!-- Dropdown com as opcoes de bordas -->
  <div class="recheio-bordas" id="recheio-bordas" onchange="sabores()">
    <label>Sem bordas
      <input value="Sem bordas" type="radio" name="radio" checked/>
    </label>
    
    <label >Cheddar
      <input value="Cheddar" type="radio" name="radio"/>
    </label>
    
    <label >Catupiry
      <input value="Catupiry" type="radio" name="radio"/>
    </label>
  </div>
  <button class="btn pedido-btn" onclick="finalizar_pedido()" type="button">Finalizar Pedido</button>
</main>

<?php include './static/promo.php'; ?>
<?php include './static/chat.php'; ?>
<?php include './static/footer.php'; ?>