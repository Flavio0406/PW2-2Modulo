function colet(){

    let numeros = [];

    for ( let contador = 1; contador <= 10; contador++) {
    
        let numerosAleato = Math.floor(Math.random() * 100) + 1;

        numeros.push(numerosAleato);


    }
    console.log(numeros);
}

colet();