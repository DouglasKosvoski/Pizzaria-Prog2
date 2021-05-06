function minimize_chat() {
  chat = document.getElementById("chat");
  chat.style.height = '50px';
  texto = document.getElementById("texto");
  texto.innerHTML = 'Chat';
}

function maximize_chat() {
  chat = document.getElementById("chat");
  chat.style.height = '150px';
  texto = document.getElementById("texto");
  texto.innerHTML = 'Falar com os atendentes';
}

function close_chat() {
  document.getElementById("chat").style.display = 'none';
}

function show_menu() {
  var nav = document.getElementById("navbar");
  
  if (nav.style.display == "block") {
    nav.style.display = "none";
  }
  else {
    nav.style.display = "block";
  }
}

function sabores() {
  var tamanho = document.getElementById("tamanho");
  var qtd_sabores = document.getElementById("qtd_sabores");
  var sabores = document.querySelectorAll('input[type="checkbox"]:checked');
  var bordas = document.querySelector('input[name="radio"]:checked').value;
  var max_quantidade = 0;
  
  console.log(bordas);
  
  switch (tamanho.value) {
    case "pequena":
      max_quantidade = 2;
      break;
    case "media":
      max_quantidade = 3;
      break;
    case "grande":
      max_quantidade = 4;
      break;
    case "familia":
      max_quantidade = 5;
      break;
    default:
      max_quantidade = 0;
      break;
  }
  qtd_sabores.innerHTML = "Você selecionou " + sabores.length + " de " + max_quantidade + " sabores.";

  if(sabores.length > max_quantidade && max_quantidade != 0) {
    alert("Você selecionou mais sabores do que essa Pizza suporta!");
  }
}

function finalizar_pedido() {
  var tamanho = document.getElementById("tamanho").value;
  var qtd_sabores = document.getElementById("qtd_sabores").innerHTML;
  var sabores = document.querySelectorAll('input[type="checkbox"]:checked').value;
  var bordas = document.querySelector('input[name="radio"]:checked').value;
  
  if (tamanho == "Vazio") {
    alert("Selecione o tamanho da Pizza");
  }
  else if (sabores == 0) {
    alert("Selecione o sabor da Pizza");
  }
  else {
    alert(
      "Tamanho: " + tamanho +
      "\n" + qtd_sabores +
      "\nBorda: " + bordas
    );
  }
}

function envia_form_contato() {
  var nome = document.getElementById("contato_name").value;
  var email = document.getElementById("contato_email").value;
  var assunto = document.getElementById("contato_subject").value;
  var tel = document.getElementById("contato_tel").value;
  var place = document.getElementById("contato_place").value;
  
  if(nome == "") {
    alert("Insira o Nome Completo!");
  }
  else if (email == "") {
    alert("Insira seu Email!");
  }
  else if (tel == "") {
    alert("Insira o Numero de Telefone!");
  }
  else if (assunto == "") {
    alert("Insira o Assunto!");
  }
  else {
    alert("Enviado!!!");
  }
}

function login() {
  var email = document.getElementById("login_email").value;
  var senha = document.getElementById("login_senha").value;
  
  if (email == "") {
    alert("Insira o Email !!!");
  }
  else if (senha == "") {
    alert("Insira a Senha !!!");
  }
  else {
    alert("Logado !!!");
  }
}

function cadastro() {
  var nome = document.getElementById("id_nome").value;
  var email = document.getElementById("id_email").value;
  var tel = document.getElementById("id_tel").value;
  var dn = document.getElementById("id_dn").value;
  var senha1 = document.getElementById("id_senha1").value;
  var senha2 = document.getElementById("id_senha2").value;
  var endereco = document.getElementById("id_endereco").value;
  var obs = document.getElementById("id_obs").value;
  
  if (senha1 == "" || senha2 == "" || senha1 != senha2) {
    alert("As senhas são diferentes... confirme a senha corretamente");
  }
  else if (nome == ""){
    alert("Insira o nome");
  }
  else if (email == "") {
    alert("Insira o email");
  }
  else if (tel == "") {
    alert("Insira o tel");
  }
  else if (dn == "") {
    alert("Insira a data de nascimento");
  }
  else if (endereco == "") {
    alert("Insira o endereco");
  }
  else {
    alert("Cadastrado com Sucesso !!!");
  }
}

function closePopup() {
  var asdasd = document.getElementById("promo_popup");
  asdasd.style.display = "none";
}

window.onresize = function() {
  largura = window.innerWidth;
  var nav = document.getElementById("navbar");
  
  if(largura >= 700) {
    nav.style.display = "inline-flex";
  }
  else {
    nav.style.display = "none";
  }
};
