console.log("labas");
// var sukuria/deklaruoja kintamaji

var name;
var lastName;
var className;

// B uzduotis

name = "Kazys";
lastName = "Stokna";
className = "10a";

// C
console.log("Vardas: ", name, "Pavarde: ", lastName, "Klase: ", className );
console.log("Vardas: " + name, "Pavarde: " + lastName, "Klase: " + className );

// 2 uzduotis

function spausdintiTeksta () {
  vardas = "jurgis";
  pavarde = "valius";
  amzius = "23";

console.log("vardas: ", vardas, "pavarde: ", pavarde, "amzius", amzius);
}

spausdintiTeksta ();

// uzduotis 4
// A
function pasveikinkKauna () {
pasveikinimas = "Labas vakaras Kaune!";

console.log("", pasveikinimas);
}
pasveikinkKauna ();
// C
function kelimasKvadratu (skaicius) {
  atsakymas = skaicius * skaicius;
  console.log(atsakymas);
}
kelimasKvadratu (9);
//  D
function skaiciavimai (x, y, z) {
console.log(x + 2, y + 4, z * 2);
}
skaiciavimai (5, 6, 7);

// uzduotis 4

function spausdinti (number, boolean, string) {
  console.log("", number, "", boolean, "", string);
}
spausdinti (4.5, 0, "geras lankomumas");
