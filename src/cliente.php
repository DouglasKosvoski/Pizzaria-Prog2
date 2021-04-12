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
</main>

<?php include './static/promo.php'; ?>
<?php include './static/chat.php'; ?>
<?php include './static/footer.php'; ?>