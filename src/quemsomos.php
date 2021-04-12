<?php include './static/header.php'; ?>
<?php include './static/navbar.php'; ?>

<main>
  <!-- Quem somos -->
  <div class="center quem-somos">
    <p id="titulo-about">Quem Somos</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  
  <!-- Nossa Missao -->
  <div class="center quem-somos">
    <p id="titulo-quem-somos">Nossa Missao</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!-- <img class="flex-item2" src="../imgs/pegando_pizza.jpeg" alt="Pessoa pegando um pedaco de pizza"> -->
  </div>
  
  <!-- Valores -->
  <div class="center valores">
    <img class="img-equipe" src="../imgs/crew2.jpeg" alt="Equipe Reunida">
  </div>
</main>

<div id="chat">
  <p id="texto">Falar com os atendentes</p>
  <div id="botoes">
    <span id="minChat" class="chat-button" onclick="minimize_chat()">&or;</span>
    <span id="maxChat" class="chat-button" onclick="maximize_chat()">&and;</span>
    <span id="closeChat" class="chat-button" onclick="close_chat()">x</span>
  </div>
</div>

<?php include './static/footer.php'; ?>