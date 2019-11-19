function login(){
  var user = document.getElementById("usuario").value;
  localStorage.setItem("usuarioss", user);
}

function hola(){
  var ls = localStorage.getItem("usuarioss");
  var res = ls.toUpperCase();
  alert("Bienvenido usuario:  "+ res);
  document.getElementById("namess").innerHTML = res;
}