function crescente() {
    var valor1 = Number(prompt("digite o Número: "));
    var valor2 = Number(prompt("digite o Número: "));
    var valor3 = Number(prompt("digite o Número: "));
    var valorMaior;
    var valorMedio;
    var valorMenor;

    // maior
    if (valor1 > valor2 && valor1 > valor3) {
        valorMaior = valor1;
    } else if (valor2 > valor1 && valor2 > valor3) {
        valorMaior = valor2;
    } else if (valor3 > valor1 && valor3 > valor2) {
        valorMaior = valor3;
    }

    // menor
     if (valor1 < valor2 && valor1 < valor3) {
        valorMenor = valor1;
    } else if (valor2 < valor1 && valor2 < valor3) {
        valorMenor = valor2;
    } else if (valor3 < valor1 && valor3 < valor2) {
        valorMenor = valor3;
    }

    //medio
    if (valor1 < valor2 && valor1 > valor3 || valor1 > valor2 && valor1 < valor3 ) {
        valorMedio = valor1;
    } else if (valor2 < valor1 && valor2 > valor3 || valor2 > valor1 && valor2 < valor3 ) {
        valorMedio = valor2;
    } else if (valor3 < valor1 && valor3 > valor2 || valor3 > valor1 && valor3 < valor2 ){
        valorMedio = valor3;
    }

    console.log(" primeiro valor : " + valorMaior);
    console.log(" segundo valor : " + valorMedio);
    console.log(" terceiro valor : " + valorMenor);

}
    crescente();