console.log("Labas");

var array = [];


var man = {

 };

 man.lname = "Timauskas";  //
 man.name = "Timy";
 man.age = 17;
 console.log(man.lname);
 console.log(man.age);



 // var obj = "Timis";   // string
 // var obj.lname = "Timauskas";  // error
 // console.log(obj.lname);       // error


 //  saugosime mokinio informacija:
 // mokinio vardo, pavardes, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
 // Uzdavinys:
 // 1) isvesti i console mokinio informacija.
 // 2) pasirasyti funkcija, kuris is duotu 5 pazymiu, grazintu ju vidurki

var name = "Petriukas";
var lname = "Petriukaiciukaitis";
var curentClass = 9;
var pazymiai = [6, 5, 9, 10, 8, 1, 1];

 // 2)  pasirasyti funkcija getAvarage (masyvas), kuri is duotu 5 pazymiu, grazintu ju vidurki

var suma = 0;
for (var i = 0; i < pazymiai.length; i++) {
    suma = suma + pazymiai[i];
}
var vidurkis = suma / pazymiai.length;

console.log("pazimiu vidurkis: " + vidurkis);



// funkcija
function getAvarage (paz) {
    var suma = 0;
    for (var i = 0; i < paz.length; i++) {
        suma = suma + paz[i];
    }
    var vidurkis = suma / paz.length;
    return vidurkis;
}

var pazymiai1 = [6, 5, 0, 0, 8, 1, 1];
var pazymiai2 = [6, 5, 10, 10, 10, 10, 9];
var pazymiai3 = [6, 5, 3, 3, 8, 1, 1];
console.log("pazimiu vidurkis: " + getAvarage(pazymiai1) );
console.log("pazimiu vidurkis: " + getAvarage(pazymiai2) );
console.log("pazimiu vidurkis: " + getAvarage(pazymiai3) );


// uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika



//
