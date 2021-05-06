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
