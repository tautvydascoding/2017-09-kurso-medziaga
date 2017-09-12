console.log("Labas");

// var sukuria / deklaruoja kompiuterio atmintyje kintamaji
var name;
var lastName;
var className;


//   B
name = "Tomas";
lastName = "Tomauskutis";
className = "7b";

// C
console.log("Vardas:", name, "Pavarde: ", lastName, "Klase: ", className );
console.log("Vardas: " + name + " Pavarde: " + lastName + " Klase: " + className );

console.log("Vardas: ", name);
console.log("Pavarde: ", lastName);
console.log("Klase: ", className);

// 2
function spausdinti() {
    vardas = "Jurgis";
    pavarde = "Jurgauskutis";
    amzius = 21;

    console.log(vardas, pavarde, amzius);
}
// spausdinti();
// spausdinti();
// spausdinti();

//  A
function pasveikinaKauna() {
    console.log("Labas vakaras Kaune!");
}
pasveikinaKauna();
// B
function SpausdinuVarda(vardas1) {
    console.log(vardas1);
}
SpausdinuVarda("Jokubelis");
// C
// error NaN  - Not a Number - padavete skaiciu kabutese
function kelimasKvadratu(skaicius) {
    // atsakymas = skaicius * skaicius;
    atsakymas = Math.pow(skaicius, 2);
    console.log(atsakymas);
}
kelimasKvadratu(14); // 196

// D
function skaiciavimai (x, y, z) {
    console.log(x + 2);
    console.log(y + 4);
    console.log(z  * 2);
}
skaiciavimai(1, 1, 1);



//
