function minimize_chat() {
  chat = document.getElementById("chat");
  chat.style.height = '50px';
  texto = document.getElementById("texto");
  texto.innerHTML = 'Chat';
  console.log("MIN");
}

function maximize_chat() {
  chat = document.getElementById("chat");
  chat.style.height = '150px';
  texto = document.getElementById("texto");
  texto.innerHTML = 'Falar com os atendentes';
  console.log("MAX");
}

function close_chat() {
  document.getElementById("chat").style.display = 'none';
  console.log("Close");
}
