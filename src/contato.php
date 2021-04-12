<?php include './static/header.php'; ?>
<?php include './static/navbar.php'; ?>

<main>
  <div class="flex-container3">
    <div class="flex-item3">
      <p style="font-size: 1.2rem">Formulario de Contato</p>
      <form action="./index.php" method="post" onchange="">
        <label for="name">Nome</label>
        <input type="text" id="contato_name" placeholder="Nome completo" autofocus><br>
        <label for="email">Email</label>
        <input type="email" id="contato_email" placeholder="Email" required><br>
        <label for="tel">Telefone</label>
        <input type="number" id="contato_tel" placeholder="Contato"><br>
        <label for="subject">Assunto</label>
        <input type="text" id="contato_subject" placeholder="Assunto"><br>
        <label for="place">Local</label>
        <input type="text" id="contato_place" placeholder="Ex: R: Seu Joao, bairro Itaipava 404-D"><br>
        <button class="btn" style="background-color: gold" type="reset">Reset</button>
        <button class="btn" style="background-color: #19b35b" type="button" onclick="envia_form_contato()">Enviar</button>
      </form>
    </div>
    
    <div class="flex-item3">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7872.204757428124!2d-40.504353684161394!3d-9.412416258824086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x773710a44ea4681%3A0xa8bdd408cbab10d4!2sFrancesco%20Pizzaria!5e0!3m2!1spt-BR!2sbr!4v1615338622389!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
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
