function verificar(){
var palavra = prompt("Digite uma palavra:").toLocaleLowerCase();

var palavraIvertida = "";

for (var i = palavra.length - 1; i >= 0; i--) {
    palavraIvertida += palavra[i];
}
if (palavra === palavraIvertida) {
    alert("A palavra é um palíndromo!");
} else {
    alert("A palavra não é um palíndromo!");
}
}

verificar();