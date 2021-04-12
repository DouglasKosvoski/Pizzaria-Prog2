<?php include './static/header.php'; ?>
<?php include './static/navbar.php'; ?>

<main>
  <form class="center login" style="" action="./index.php" method="post">
    <p class="center" style="">Faca o seu Login</p>
    <fieldset class="center" style="border: none;">
      <!-- Inputs -->
      <input type="email" id="login_email" placeholder="Informe seu email" autofocus><br>
      <input type="password" id="login_senha" placeholder="Insira sua senha"><br>
      <!-- Buttons -->
      <button class="btn" style="background-color: gold;" type="reset">Reset</button>
      <button class="btn" style="background-color: #19b35b;" type="button" onclick="login()">Log In</button>
      
      <p class="center">Não possui uma conta? Crie seu cadastro <a href="./cadastro.php">aqui</a>.</p>
      
    </fieldset>
  </form>
  <aside>
    <!-- Title -->
    <p>Promoção do Dia</p>
    <!-- Image Banner -->
    <img class="img-banner" src="../imgs/promo_banner.jpg" alt="Promo">
  </aside>
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