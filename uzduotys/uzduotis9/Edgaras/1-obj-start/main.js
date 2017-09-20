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


 // mokinio vardo, pavardes, kelintokas. mokinio matematikos pazymiai (6, 5, 9 , 10, 8)

var name = "Petriukas";
var lname = "Petrauskas";
var curentClass = 9;
var pazymiai = [6, 5, 9 , 10, 8, 4, 7, 5];
// 1)
// console.log(name, lname, curentClass, pazymiai, avg);
// 2) pasirasyti funkcija, kuris is duotu 5 pazymiu, grazintu ju vidurki

// var avg = (pazymiai / pazymiai.length) * pazymiai.length
// console.log(avg)

// mano variantas
for ( var i = 0; i < pazymiai.length; i ++){
    var avg = (pazymiai[i] / pazymiai.length) * pazymiai.length
}
console.log("Pazymiu vidurkis:" + avg);
// destytojo variantas
function getAvarage(avg) {
var avg = 0
for (var i = 0; i < pazymiai.length; i++) {
    avg = avg + pazymiai[i];
}
var vidurkis = avg / pazymiai.length;
return vidurkis;
}
console.log("Pazymiu vidurkis: " + getAvarage(avg));

// uzduotis: sukurti 2 objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

var tevas = { // 1) tevas : vardas, pavarde, vaikas
    vardas:"Tim",
    pavarde: "Timukas",
    vaikas:{}
};
var vaikas = { // 2) vaikas: klase, vardas
    vardas: "Jonas",
    klase: 7
};
tevas.vaikas = vaikas; // 3) priskirti tevo objekui (kintamajam) vaika
