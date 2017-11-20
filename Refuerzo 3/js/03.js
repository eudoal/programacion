var n1=0;
var texto="";
console.log(texto);
n1 = prompt("dame un número del 2 al 6");
console.log(n1);
if ((n1>=2)&&(n1<=6)) {
console.log(texto);
for (var i = 1; i <= n1; i++) {
texto = texto + "*";
console.log(texto);
}
}
else {
  alert("no has introducido un número entre 2 y 6")
}
