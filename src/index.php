<?php include_once './php/static/header.php'; ?>
<?php include_once './php/static/navbar.php'; ?>

<main>
  <?php
  if(isset($_GET['acao'])){
    include_once "./php/{$_GET['acao']}.php";
  }
  else{
    include_once "./php/inicio.php";
  }
  ?>
</main>

<?php include_once './php/static/promo.php'; ?>
<?php include_once './php/static/chat.php'; ?>
<?php include_once './php/static/footer.php'; ?>