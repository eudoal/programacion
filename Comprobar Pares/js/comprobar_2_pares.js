do {

var num1=prompt("Introduce el primer número");
var num2=prompt("Introduce el segundo número");

if ((num1%2!=0)&&(num2%2==0)) {
  alert(num1+ " NO es un número par");}

if ((num1%2==0)&&(num2%2!=0)) {
    alert(num2+ " NO es un número par");}

if ((num1%2!=0)&&(num2%2!=0)) {
   alert("El número "+ num1+ " y el número "+ num2+ " NO son pares");}

} while ((num1%2)||(num2%2));

  alert("Los numeros "+ num1+ " y "+ num2+ " SON pares");
