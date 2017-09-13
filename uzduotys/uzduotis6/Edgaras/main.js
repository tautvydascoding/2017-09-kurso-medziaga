console.log("Labas");
// IDEA: --------------------- 1 uzduotis
// A      var - sukuria/deklaruoja kompiuteryje atmintyje kintamaji
var name;
var lastName;
var klase;
// B
name="Edgaras";
lastName="Ubavicius";
klase=12
// C
console.log("Vardas:", name, "Pavarde:", lastName, "klase:", klase);
console.log("Vardas: " + name + " Pavarde: " + lastName + " klase: " + klase);

console.log("Vardas:", name);
console.log("Pavarde:", lastName);
console.log("klase:", klase);

// IDEA: ------------------------- 2 uzduotis

// sukuriam funkcija
function spausdinti() {
    vardas = "Petras";
    pavarde = "Petraitis";
    amzius = 30;

    console.log(vardas, pavarde, amzius);
}
// funkcijos iskvietimas
spausdinti();

// IDEA: -------------------------- 4 uzduotis
// A

function pasisveikink() {
    hello = "Labas vakaras Kaune!";

    console.log(hello);
}
pasisveikink();

// B

function SpausdinuVarda(vardas) {
    console.log(vardas);
}
SpausdinuVarda("Edgaras");

// C
function kelimasKvadratu(skaicius) {
    atsakymas = skaicius * skaicius;
    console.log(atsakymas);
}
kelimasKvadratu(7);

// D

function skaiciavimai(x, y, z) {
    console.log(x+2, y+4, z*2);
}
skaiciavimai(5, 3, 2);
