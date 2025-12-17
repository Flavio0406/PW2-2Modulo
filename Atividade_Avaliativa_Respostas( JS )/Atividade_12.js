var frutas = ["banana", "uva", "pera", "maçã", "melancia"];
console.log("anterior", frutas);

frutas.push("Manga");
console.log("dps add", frutas);

frutas.shift("");
console.log("dps dell", frutas);

for (let i = 0; i < frutas.length; i++) {
    console.log(frutas[i]);

}