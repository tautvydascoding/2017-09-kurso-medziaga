console.log("Labas");



//
manInfo = ["Jurgis", "Apolo", 21, "VGTU"];

console.log(" i gala ideti - butelis vandens ");
console.log( manInfo.join(" ") );
manInfo.push("butelis vandens");
manInfo.push("adata");

ilgis = manInfo.length; // masyvo ilgis
manInfo[ilgis] = "siulas" ;

console.log( manInfo.join(" ") );


// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
manInfo.unshift( "ziebtuvelis");
console.log( manInfo.join(" ") );

// 3. istrinti 3 elmenta
manInfo.splice(2, 1); // nuo 2 stalciaus istrinate 1 stalciu
console.log( manInfo.join(" ") );
// arba
delete manInfo[2];
console.log( manInfo.join(" ") );

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");


var masyvas = [];
// var masyvas = new Array(); // BAD

for (var i = 0; i < 50; i++) {
    masyvas[i] = 0;
}
console.log( masyvas.join(" "));


// WHILE
var t = 0;
while (t < 100) {
    masyvas[t] = 1;
    t++;
}
// console.log( masyvas.join(" "));
console.log( masyvas );
// console.log( masyvas.toString() );


// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
var g = 1;
while ( g < 100) {
    masyvas[g] = 3;
    g = g + 2; // kad nebutu begalinis ciklas
}
console.log( masyvas );

// uzduotis6 :
// sukurti funkcija, kuri grazina prekes PVM
function getPVM (x) {
    var ats = x * 0.21;
    return ats;
}

var prekesKaina = 100;
var prekesKainaSuPVM = prekesKaina + getPVM(prekesKaina);
console.log("kaina su PVM: " , prekesKainaSuPVM);


// uzduotis 7
// isvesti skirtingas reklamas pagal amziu:
// klientai < 8 metai  "Kinder kiausiniai -50%"
// klientai  8 iki 15    "MTV kanalas"
// klientai  16 iki 18  "Naujausi telefonai"
// klientai  >65       "Pensiju atsiemimas per 1 men"
// pensininkams ir vaikams <8    "Laimes rato laida"

// sendBlaster - siuncia emails
age = 111;
console.log("amzius: " + age);

if (age <= 8) {
    console.log("Kinder kiausiniai -50%");
} else if(age > 8 && age <= 15) {
        console.log("MTV kanalas");
    } else if (age <= 18) {
        console.log("Naujausi telefonai");
    } else if ( age >= 65) {
            console.log("Pensiju atsiemimas per 1 men");
    }




//
