// creo un Array de las palabras que quiero utilizar
var palabras=["coche","moto","camioneta","motocultor","carretilla"];
//creo una variable con la cantidad de palabras que hay en el array
var letras=palabras.length;
// creo un random con el numero de palabras del array
palabra_Adivinar=Math.floor(Math.random()*letras);
// creo una variable que contenga el numero de letras de la palabra elegida al azar
var letras_Palabra=(palabras[palabra_Adivinar]).length;
// variable con un valr cualquiera para utilizarla más tarde
var cadena_palabra="valor"
var rendirse="fin"
//variable de los intentos
var int=0;
var int = prompt("¿cuantos intentos quieres? 5 a 10");
while ((int<5)||(int>10)||isNaN(int)) {
  alert("No has introducuido un numero entre 5 y 10");
  var int = prompt("¿cuantos intentos quieres? 5 a 10");
}
var palabra_final=(palabras[palabra_Adivinar]);
console.log(letras+ " es el numero de palabras del array");
console.log(palabras[palabra_Adivinar]+ " es palabra elegida aleatoriamente");
console.log(letras_Palabra+ " es el numero de letras de la palabra");
console.log(palabra_Adivinar+ " es la posicion de la palabra en el array");

//subtitulle las letras de la palabra elegida por ceros
cadena_palabra = palabras[palabra_Adivinar].replace(/./g,"0");
//divide palabra en un array
//cadena_palabra = cadena_palabra.split("");
console.log(cadena_palabra);
//fiincion para reemplazar la letra
function replaceAt(pos,caracterIn,texto){
  let textTemp=texto.substr(0,pos);
  textTemp=textTemp+caracterIn;
  textTemp=textTemp+texto.substr(pos+1,(texto.length-1-pos));

  return textTemp;
}
//guardo cadena_palabra en la variable texto
var texto=cadena_palabra;

// hará el DO mientras texto sea diferenta a palabra aleatoria y además el numero de intentos sea mayor o igual a 0
do {

  var conta=0;
  var letra_introducida = prompt("Adivina la letra (si quieres rendirte introduce: fin)");
  console.log(letra_introducida);
  console.log(texto+ "  texto");

  for (var i = letras_Palabra; i >= 1; i--) {

//recorre cada letra de la palabra
  var str = palabras[palabra_Adivinar];
  var res = str.charAt(str.length-i);

  console.log(res);
  console.log(str);
  console.log(i);

// si la letra introducida es igual a la letra recorrida "res" la sustitulle
 if (letra_introducida==res){
   conta++;
   texto=replaceAt(letras_Palabra-(i),res,texto);
   console.log(conta+ "num letras inguales al final del do");
   console.log(texto);
}

//si el contador llega a 0 y a termina de recorrer la palabra muestra el alert y descuenta un intento
 if ((conta==0)&&(i==1)&&(letra_introducida!=rendirse)){
   alert("MAAALLLL, INTENTOS RESTANTES... "+ int);
   int--;
 }
}
console.log(texto);
alert(texto)

} while ((texto!=palabras[palabra_Adivinar])&&(int>=0)&&(letra_introducida!=rendirse));

if (letra_introducida==rendirse) {
  alert("SE TERMINÓ");}

else if (int<0) {
  alert("SER TERMINARON TUS INTENTOS");
}
else
 {
  alert("welll doooone");
}
