// --------------------Array / Masyvai -----
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//
// console.log(names);
// console.log(names.join());
// console.log("masyvo ilgis " + names.length );
// //....

// uzduotis  Array

// 1. i masyvo gala ideti elementa “butelis vandens”
// 2. i masyvo pradzia ideti elementa “ziebtuvelis”
// 3. istrinti 3 elementa
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");
// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"


manInfo = ["Jurgis", "Apolo", 21, "VGTU"];

console.log(" i gala ideti - butelis vandens");
console.log( manInfo.join( " ") );
manInfo.push("butelis vandens ");
manInfo.push("katinas");
ilgis =  manInfo.length; // masyvo ilgis
manInfo[ilgis] = "siulas";
console.log( manInfo.join( " ") );

// 2. i masyvo pradzia ideti elementa “ziebtuvelis”
manInfo.unshift("ziebtuvelis");
console.log( manInfo.join( " ") );

// 3. istrinti 3 elementa
manInfo.splice (2,1);
console.log( manInfo.join( " ") );

// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");


var masyvas = [];
for ( i = 0; i < 50; i++) {
    masyvas[i]=0;
}
console.log( masyvas.join( " ") );

//5. sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;

var t = 0;
while ( t < 50 ) {
    masyvas[t] = 1;
    t++;
}
console.log( masyvas.join( " ") );

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"

var y = 0;
while ( y < 50 ) {
    masyvas[y] = 3;
    y = y + 2;
}
console.log( masyvas.join( " ") );
 // uzduotis 6
 // sukurti f-ja kuri grazina prekes kaina su PVM

function getPVM(x) {
    var ats = x * 0.21;
    return ats;
}

var prekesKaina = 100;
var prekesKainaSuPVM = prekesKaina + getPVM(prekesKaina);
console.log("kaina su PVM: ", prekesKainaSuPVM);

//
// Uzduotis 7
// isvesti skirtingas reklamas pagal amziu:
// klientai < 8 metai "Kinder kiausiniai - 50%"
// klientai 8 iki 15 "MTV kanalas"
// klientai 16 iki 18 "Naujausi telefonai"
// klientai  > 65 "Pensiju atsiemimas per 1 men"

// sendBlaster - siuncia emailus

age = 17;
console.log("Amzius: ", age);
if (age <= 8 ) {
    console.log("Kinder kiausiniai -50%");
} else if (age > 8 && age <= 15 ){
    console.log("MTV kanalas");
} else if (age <= 18 ) {
    console.log("Naujausi telefonai");
} else if (age >= 65) {
    console.log("Pensiju atsiemimas per 1 men ");
}

// Su papildoma salyga
// pensininkams > 65 ir vaikams < 8 "Laimes rato laida"

age = 17;
console.log("Amzius: ", age);

 // pensininkams >65 ir vaikams <8    "Laimes rato laida"
 
if (age <= 8 || age > 65 ) {
    if (age <= 8) {
        console.log("Kinder kiausiniai -50%");
    } else if (age > 65 ) {
         console.log("Pensiju atsiemimas per 1 men");
    }
    console.log("Laimes rato laida");
} else if(age > 8 && age <= 15) {
        console.log("MTV kanalas");
    } else if (age <= 18) {
        console.log("Naujausi telefonai");
    }

}
