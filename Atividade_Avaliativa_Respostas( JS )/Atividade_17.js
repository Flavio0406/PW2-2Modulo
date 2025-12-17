function media() {
    var soma = 0;
    var notas = [5, 6, 10, 10];

    for (let i = 0; i < notas.length; i++) {
        console.log(notas[i]);
        soma = soma + notas[i];
    }

    var mediaFinal = soma / notas.length;

    mediaFinal = soma / 4;

    alert("A soma das notas é: " + mediaFinal);

}
media();
