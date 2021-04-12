
<?php include './static/header.php'; ?>
<?php include './static/navbar.php'; ?>

  <main>
    <!-- Slogan -->
    <p class="slogan" id="slogan">Pizzaria Francesco Sempre Com A Chapa Quente</p>
    <!-- Background Image -->
    <img class="background_img" src="../imgs/furnace.jpeg" alt="Fornalha a lenha"><br>
    <!-- Promo Banner -->
    <aside>
      <!-- Title -->
      <p>Promoção do Dia</p>
      <!-- Image Banner -->
      <img class="img-banner" src="../imgs/promo_banner.jpg" alt="Promo">
    </aside>
    
    <div id="chat">
      <p id="texto">Falar com os atendentes</p>
      <div id="botoes">
        <span id="minChat" class="chat-button" onclick="minimize_chat()">&or;</span>
        <span id="maxChat" class="chat-button" onclick="maximize_chat()">&and;</span>
        <span id="closeChat" class="chat-button" onclick="close_chat()">x</span>
      </div>
    </div>
  </main>
  

<?php include './static/footer.php'; ?>

