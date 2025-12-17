function par() {
    var soma = 0;
    let valores = [5, 6, 10, 1, 15];


    for (let i = 0; i < valores.length; i++) {
        var coletarNum = valores[i];


        if (coletarNum % 2 == 0) {
            console.log("Número é par: " + coletarNum);
            soma++;
        } else {
            console.log("Número é impar: " + coletarNum);

        }


    }
    console.log("quatidade de numeros total é: " + soma)

}

par();