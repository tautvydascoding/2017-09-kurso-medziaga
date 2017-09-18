// js saugosime mokinio informacija:
// mokinio vardo, pavardes, kelintokas. mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

// Uzdavinys:
// 1) isvesti i console mokinio informacija.



 var name = "Petriukas";
 var lName = "Kodelciukas";
 var curClass = 9;
 var pazymiai = [6, 5, 9 , 10, 8];
 var sum = 0;
 var avg = 0;

for (var i = 0; i < pazymiai.length; i++) {
     sum = sum + pazymiai[i];
 }

avg = sum / pazymiai.length;
console.log(avg);

// 2) pasirasyti funkcija, kuris is duotu 5 pazymiu, grazintu ju vidurki

//funkcija

function getAvarage(paz) {
    var sum = 0;
    for (var i = 0; i < paz.length; i++) {
        sum = sum + paz[i];
    }
   var vidurkis = sum / paz.length;
   return vidurkis;
}

var pazymiai1 = [6, 5, 9 , 10, 8, 10];
var pazymiai2 = [6, 5, 9 , 10, 8, 5];
console.log("Pazymiu vidurkis: " + Math.round(getAvarage(pazymiai1)));
console.log("Pazymiu vidurkis: " +Math.round(getAvarage(pazymiai2)));

//

// uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objektui (kintamajam) vaika

var tevas = {
    vardas : "Kipras",
    pavarde : "Stiklis",
    palikuonys : []
};

var vaikas = {
    vardas : "Gerdutis",
    klase : "7"
};

tevas.palikuonys[0] = vaikas;
tevas.palikuonys[1] = vaikas;
