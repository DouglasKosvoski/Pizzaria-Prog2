<?php include './static/header.php'; ?>
<?php include './static/navbar.php'; ?>

<main style="padding-top: 50px; padding-bottom: 60px;">
  <p class="center" style="font-size: 1.4rem">Confira nossa tabela de precos atualizada</p>
  <table class="cardapio">
    <thead>
      <tr>
        <th>Tamanhos</th>
        <th>Sabores</th>
        <th>Preços</th>
      </tr>
    </thead>
    <tbody>
      <!-- Tamanhos -->
      <tr>
        <td>Pequena</td>
        <td style="text-transform: capitalize;">atum, alho, frango, marguerita, milho, mussarela, strogonoff, vegetariana</td>
        <td>R$7.50</td>
      </tr>
      <tr>
        <td>Média</td>
        <td style="text-transform: capitalize;">atum, alho, frango, marguerita, milho, mussarela, strogonoff, vegetariana</td>
        <td>R$11.50</td>
      </tr>
      <tr>
        <td>Grande</td>
        <td style="text-transform: capitalize;">atum, alho, frango, marguerita, milho, mussarela, strogonoff, vegetariana</td>
        <td>R$19.00</td>
      </tr>
      <tr>
        <td>Família</td>
        <td style="text-transform: capitalize;">atum, alho, frango, marguerita, milho, mussarela, strogonoff, vegetariana</td>
        <td>R$25.00</td>
      </tr>
    </tbody>
  </table>
  <p class="center" style="margin: 30px">Todas as pizzas são preparadas na hora e em forno a lenha</p>
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


