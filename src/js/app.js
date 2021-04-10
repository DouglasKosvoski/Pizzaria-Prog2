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
