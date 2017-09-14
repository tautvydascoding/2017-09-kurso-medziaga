console.log("Labas");

// pasirasyti funkcija kuris is duotu 5 pazymiu grazintu ju vidurki
var name = "petriukas";
var lname = "petriukaitis";
var curentClass = 9;
var pazymiai = [6, 5, 9, 10, 8, 4];

// pasirasyti funkcija getAvarage (masyvas), kur is duotu 5 pazymiu, grazintu ju vidurki

for (var i = 0; i < pazymiai.length; i++) {

  pazymiai[i]
}
console.log(pazymiai);


var total = 0; // kad padarytu skaiciu
for(var i = 0; i < pazymiai.length; i++) {
    total += pazymiai[i]; // total = total + pazymiai
}
var avg = total / pazymiai.length;
console.log(avg);


////
// function avg(paz) {
//   var suma = 0;
//   for (var i = 0; i < paz.length; i++) {
//     suma = suma + paz[i];
//   }
//   var vidurkis = suma / paz.length;
//   return vidurkis;
// }
// var pazymiai1 = [6, 5, 4];
// var pazymiai2 = [8, 9, 8];
//
// console.log("pazymiu vidurkis: " + avg(pazymiai1));
// console.log("pazymiu vidurkis: " + avg(pazymiai2));



//////

/// sukurti 2 iobjektus:
// tevas: vardas,pavarde,vaikas
// vaikas: klase, vardas
// priskirti tevo objektui (kintamajam) vaika

var tevas = {
  vardas: "tim",
  pavarde: "timis",
  palikuonys: { }
};
var vaikas = {
  vardas : "paulius",
  klase : 7
};
tevas.vaikas = vaikas;


////////

var masina = "audi";
switch (masina) {
  case "bmw":
  // veiksmai
  console.log("jusumasina: bmw");
  break;
  case "audi":
  // veiksmai
  console.log("jusumasina: audi");
  break;
  case "vw":
  // veiksmai
  console.log("jusumasina: vw");
  break;
  default:
  console.log("jusumasina: nepasirinkta");
}


//// begaliniai ciklai
var t = 0;
while (true) {
  console.log("ieskau");
  if ( t==1500 ) {
    break;
  }
  t++;
}
