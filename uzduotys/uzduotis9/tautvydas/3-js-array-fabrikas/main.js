console.log("Labas");


// apsilimui
// 1 sukurtia masyva 50 ilgio, kuris uzpildytas  atsitiktiniais skaiciais nuo 10 - 100
// 2 uzdavinys: pakeisti atsitiktinius skaicius, kurie yra lyginai i "lyginis"
 // 5 % 3 == 2



 // 1 )
var masyvas = [];
for (var i = 0; i < 50; i++) {
    // Math.floor(Math.random() * (max - min) ) + min;
    var burtuSkaicius =  Math.floor( Math.random() * (101 - 10) ) + 10;

    // 2 uzduotis
    if ( burtuSkaicius % 2 == 0 ) { // pvz.:  60 / 2 = 30 nera liekanos, 3 / 2 = 1.5 1 sveikas ir 1 liekana;    60 / 2 30 sveiku ir liekana  yra 0
         masyvas[i] = "lyginis";
    } else {
        masyvas[i] = burtuSkaicius;
    }

    // masyvas.push(1);
}
console.log(masyvas);


// rimta
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena)
// 2 burtu keliu su 10 % tikimybe paversti minus reikememis ( padauginti is  -1)
// 3. uzdavinys: visus skaicius paversti teigiamas (is masyvo )
// 4. surasti geriausia darbuotoja
// 5. surasti blogiausia darbuotoja


// 1)

var t = 0;
var gaminiuSk = [];
while ( t < 50) {
    // Math.floor(Math.random() * (max - min) ) + min;
    var burtuSkaicius =  Math.floor( Math.random() * (201 - 50) ) + 50;
    if (Math.random() <= 0.1) {
        gaminiuSk[t] = burtuSkaicius * (-1);
    } else {
        gaminiuSk[t] = burtuSkaicius;
    }
    t++;
}
console.log("Pagaminta detaliu: " + gaminiuSk.join(" ") );
console.log("Pagaminta detaliu: " + gaminiuSk );

// atrinkti 10% zmoniu atsitiktiniu budu
// var t = 0;
// var kiekAtrinkomeZmoniu =0;
// var gaminiuSk = [];
// while ( t < 50) {
//     // Math.floor(Math.random() * (max - min) ) + min;
//     var burtuSkaicius =  Math.floor( Math.random() * (201 - 50) ) + 50;
//     if (Math.random() <= 0.1) {
//         gaminiuSk[t] = burtuSkaicius * (-1);
//         kiekAtrinkomeZmoniu++;
//     } else {
//         gaminiuSk[t] = burtuSkaicius;
//     }
//
//     if (kiekAtrinkomeZmoniu == 5) {
//         break;
//     }
//     t++;
// }


console.log("5 laiminti - zmones " + gaminiuSk );

// 3 mokulis

// visas neigimas reiksmes pavers teigiamomis
for (var i = 0; i < gaminiuSk.length; i++) {
    if(gaminiuSk[i] < 0) {
        gaminiuSk[i] = Math.abs(gaminiuSk[i]);
    }
}
console.log("Teigiami detaliu kiekiai: ", gaminiuSk);
console.log("masyvo ilgis: ", gaminiuSk.length);


// 4,5 rasti geriausia ir prasciausia darbuotoja
var didziausias = 0;
var maziausias = 99999999;
var geriausiasDarbuotojoNR = 0;
var prasciausiasDarbuotojoNR = 0;
for (var i = 0; i < gaminiuSk.length; i++) {
    if (didziausias < gaminiuSk[i]) {
        didziausias = gaminiuSk[i];
        geriausiasDarbuotojoNR = i;
    }
    if (maziausias > gaminiuSk[i]) {
        maziausias = gaminiuSk[i];
        prasciausiasDarbuotojoNR = i;
    }
}
console.log("geriausiasDarbuotojoNR: " + geriausiasDarbuotojoNR);
console.log("blogiausias darbuotojas: " + prasciausiasDarbuotojoNR);









//








//
