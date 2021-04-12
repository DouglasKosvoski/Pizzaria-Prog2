<?php include './static/header.php'; ?>
<?php include './static/navbar.php'; ?>

<main>
  <form method="POST" class="cadastro center" action="./index.php" style="padding: 40px;">
    <p style="margin-top: 0; font-size: 1.2rem; line-height: 1.2rem;">Faça o seu Cadastro</p>
    <label for="id_nome">Nome completo: </label>
    <input type="text" size="50" maxlength="50" id="id_nome" placeholder="Insira seu nome" autofocus><br>
    
    <label for="id_email">E-mail: </label>
    <input type="email" size="50" maxlength="50" placeholder="Informe o e-mail" id="id_email"><br>
    
    <label for="id_tel">Telefone: </label>
    <input type="number" id="id_tel" placeholder="Contato"><br>
    
    <label for="id_dn">Data de nascimento: </label>
    <input type="date" id="id_dn"><br>
    
    <label for="id_senha1">Senha: </label>
    <input type="password" id="id_senha1" placeholder="Senha"><br>
    
    <label for="id_senha2">Confirme a senha: </label>
    <input type="password" id="id_senha2" placeholder="Confirme a senha"><br>
    
    <label for="id_endereco">Endereço: </label>
    <input type="text" size="50" maxlength="50" id="id_endereco" placeholder="Rua, número, complemento"><br>
    
    <label for="id_obs">Observações: </label>
    <textarea style="vertical-align: top;" name="field_obs" rows="5" cols="50" placeholder="Informações adicionais" id="id_obs"></textarea>
    
    <!-- buttons -->
    <br>
    <input class="btn" style="text-align: center; background-color: gold;" type="reset" value="Limpar">
    <input class="btn" style="text-align: center; background-color: #19b35b;" type="button" value="Cadastrar" onclick="cadastro()">
    
    <p class="center">Já é cadastrado? Faça seu <a href="./cliente.php">Login</a>.</p>
  </form>
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

