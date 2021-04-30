
<?php include './php/static/header.php'; ?>
<?php include './php/static/navbar.php'; ?>

  <main>
    <?php
    if(isset($_GET['acao'])){
      include "./php/{$_GET['acao']}.php";
    }
    else{
      include "./php/inicio.php";
    }
    ?>
  </main>
  
<?php include './php/static/promo.php'; ?>
<?php include './php/static/chat.php'; ?>
<?php include './php/static/footer.php'; ?>


