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
