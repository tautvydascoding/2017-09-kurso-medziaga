console.log("Labas");

//var sukuria/deklaruoja kompiuterio atmintyje kintamaji
var name;
var lastName;
var className;

// B uzduotis
name = "Tomas"
lastName = "Pavardauskas"
className = "7b"

// console

console.log("Vardas:", name, "Pavarde:", lastName, "Klase:", className);
console.log("Vardas: " + name + " Pavarde: " + lastName + " Klase: ", className);

console.log("Vardas: ", name);
console.log("Pavarde: ", lastName);
console.log("Klase: ", className);

// function spausdinti() {
//     vardas = "Jurgis";
//     pavarde = "Jurgauskis";
//     amzius = 21;
//
//     console.log("Vardas: ", vardas);
//     console.log("Pavarde: ", pavarde);
//     console.log("Amzius: ", amzius);
// }
// spausdinti();

function SpausdinuVarda() {
    vardas = "paduota kintamaji";
    console.log("Vardas: ", vardas);
}
SpausdinuVarda();

function kelimasKvadratu(x) {
    Rezultatas = x * x;
    console.log(Rezultatas);
}
kelimasKvadratu(9);

function skaiciavimai(x, y, z) {
    console.log("Rezultatas1: ", x + 2);
    console.log("Rezultatas2: ", y + 4);
    console.log("Rezultatas3: ", z * 2);
}
skaiciavimai(1, 1, 1);

function isvedimas() {

}
isvedimas();
