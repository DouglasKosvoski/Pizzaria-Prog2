<?php 
include './static/header.php';
include './static/navbar.php';

if (isset($_GET['tries'])) {
  echo "<p style='text-align: center; font-size: 1.4rem; margin-top:3rem; color: #e64f18'>Email ou Senha invalidos</p>";
}

if (isset($_POST['login_email'])) {
  require_once "./php/class/Cliente.php";
  require_once "./php/class/ClienteDAO.php";
  
  $mail = isset($_POST['login_email']) ? $_POST['login_email'] : "";
  $pswd = isset($_POST['login_senha']) ? $_POST['login_senha'] : "";
  
  $clienteDAO = new ClienteDAO();
  $login_existe = $clienteDAO->login($mail, $pswd);

  if ($login_existe == false) {
    $tries = isset($_GET['tries']) ? $_GET['tries']+1 : 0;
    ?><script type="text/javascript">window.location.href = './index.php?acao=cliente&tries=<?=$tries?>';</script><?php
  }
  elseif ($login_existe = true) {
    ?><script type="text/javascript">window.location.href = './index.php?acao=inicio';</script><?php
  }
}
else { ?>
  <main>
    <form class="center login" action="./index.php?acao=cliente" method="post">
      <p class="center" style="">Faca o seu Login</p>
      <fieldset class="center" style="border: none;">
        <!-- Inputs -->
        <input type="email" id="login_email" name="login_email" placeholder="Informe seu email" autofocus><br>
        <input type="password" id="login_senha" name="login_senha" placeholder="Insira sua senha"><br>
        <!-- Buttons -->
        <button class="btn" style="background-color: gold;" type="reset">Reset</button>
        <button class="btn" style="background-color: #19b35b;" type="submit">Login</button>
      </fieldset>
    </form>
    <p class="center">Não possui uma conta? Crie seu cadastro <a href="./index.php?acao=cadastro">aqui</a>.</p>
  </main>
  
<?php } ?>
<?php include './static/promo.php'; ?>
<?php include './static/chat.php'; ?>
<?php include './static/footer.php'; ?>