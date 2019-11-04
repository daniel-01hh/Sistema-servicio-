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

QUnit.test( "test de LocalStorage", function( assert ) {
  assert.notEqual( localStorage.getItem("usuarioss"), "null", "correcto");
  assert.equal( localStorage.getItem("usuarioss"), "null", "incorrecto" );
  assert.ok( localStorage.getItem("usuarioss") != "null", "correcto" );
  assert.notOk( localStorage.getItem("usuarioss") != "null", "incorrecto" );
});