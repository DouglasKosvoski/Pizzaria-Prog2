<?php 
include './static/header.php'; 
include './static/navbar.php'; 

$nome = isset($_POST['id_nome']) ? $_POST['id_nome'] : "";
$mail = isset($_POST['id_email']) ? $_POST['id_email'] : "";
$tele = isset($_POST['id_tel']) ? $_POST['id_tel'] : "";
$data = isset($_POST['id_dn']) ? $_POST['id_dn'] : "";
$ende = isset($_POST['id_endereco']) ? $_POST['id_endereco'] : "";
$obse = isset($_POST['id_obs']) ? $_POST['id_obs'] : "";
$pswd = isset($_POST['id_senha1']) ? $_POST['id_senha1'] : "";
$pswd2 = isset($_POST['id_senha2']) ? $_POST['id_senha2'] : "";

require "./php/class/Cliente.php";
require "./php/class/ClienteDAO.php";

$clienteDAO = new ClienteDAO();
$cliente = new Cliente();
$cliente->setNome($nome);
$cliente->setEmail($mail);
$cliente->setTelefone($tele);
$cliente->setDataNascimento($data);
$cliente->setEndereco($ende);
$cliente->setObservacoes($obse);
$cliente->setSenha($pswd);
$cliente->setSenha2($pswd2);
$erros = $cliente->validate();

if (isset($_GET['sub'])) {
  if (count($erros) != 0) {
    echo "<p style='color:#d6692c; text-align:center; font-size: 2rem'>Dados invalidos, tente novamente</p>";
    
    for ($i = 0; $i < count($erros); $i++) {
      echo "<p style='color:#d62c2c; text-align:center; font-size: 1.4rem; margin: 0'>$erros[$i]</p>";
    }
  }
  else {
    $clienteDAO->cadastrar($cliente);
    echo "<p style='color:#d6692c; text-align:center; font-size: 2rem'>Cadastrado com Sucesso</p>";
  }
}
?>

<main>
  <form method="POST" class="cadastro center" action="./index.php?acao=cadastro&sub=true" style="padding: 40px;">
    <p style="margin-top: 0; font-size: 1.2rem; line-height: 1.2rem;">Faça o seu Cadastro</p>
    <label for="id_nome">Nome completo: </label>
    <input type="text" size="50" maxlength="50" id="id_nome" name="id_nome" placeholder="Insira seu nome" value="<?=$nome?>" autofocus><br>
    
    <label for="id_email">E-mail: </label>
    <input type="email" size="50" maxlength="50" placeholder="Informe o e-mail" id="id_email" name="id_email" value="<?=$mail?>"><br>
    
    <label for="id_tel">Telefone: </label>
    <input type="number" id="id_tel" name="id_tel" placeholder="Contato" value="<?=$tele?>"><br>
    
    <label for="id_dn">Data de nascimento: </label>
    <input type="date" id="id_dn" name="id_dn" value="<?=$data?>"><br>
    
    <label for="id_senha1">Senha: </label>
    <input type="password" id="id_senha1" name="id_senha1" placeholder="Senha"><br>
    
    <label for="id_senha2">Confirme a senha: </label>
    <input type="password" id="id_senha2" name="id_senha2" placeholder="Confirme a senha"><br>
    
    <label for="id_endereco">Endereço: </label>
    <input type="text" size="50" maxlength="50" id="id_endereco" name="id_endereco" placeholder="Rua, número, complemento" value="<?=$ende?>"><br>
    
    <label for="id_obs">Observações: </label>
    <textarea style="vertical-align: top;" name="id_obs" rows="5" cols="50" placeholder="Informações adicionais" id="id_obs"><?=$obse?></textarea>
    
    <!-- buttons -->
    <br>
    <input class="btn" style="text-align: center; background-color: gold;" type="reset" value="Limpar">
    <input class="btn" style="text-align: center; background-color: #19b35b;" type="submit" value="Cadastrar">
    
    <p class="center">Já é cadastrado? Faça seu <a href="./index.php?acao=cliente">Login</a>.</p>
  </form>
</main>

<?php include './static/chat.php'; ?>
<?php include './static/footer.php'; ?>