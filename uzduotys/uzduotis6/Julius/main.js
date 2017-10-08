console.log("labas");
// var sukuria kintamaji kompiuteryje
var name;
var LastName;
var Class;

//--B
name = "Julius";
LastName = "Programuotojas";
Class = 1;
//--C
console.log("Vardas: ", name, " Pavarde: ", LastName, "Klase: " , Class );
console.log(" Vardas: " + name + " Pavarde: " + LastName + " Klase: " + Class );

//-- UZDUOTIS 2

function spausdinti () {
    vardas = "Jurgis";
    pavarde = "Jurgauskutis";
    amzius = "21";
    
    console.log( vardas, pavarde, amzius );
}

//spausdinti (); //
//----- UZDUOTIS 4//

//B
function spausdinuVarda (vardas) {
   
    console.log (vardas);
}
spausdinuVarda("petras");

//C--
function kelimasKvadratu (x) {
    console.log (x*x);
}
kelimasKvadratu(5);
kelimasKvadratu(10);

//D--

function skaiciavimai (x,y,z) {
    console.log ("x+2=", x+2,"y+4=", y+4,"z*2=", z*2);
}
skaiciavimai(5, 5, 5);

//arba//
function skaiciavimai (x,y,z) {
console.log ("x+2=", x+2);
console.log ("y+4=", y+4);
console.log ("z*2=", z*2);
}
skaiciavimai(5, 5,5);

function paveikslas () {
    
    console.log ()
}