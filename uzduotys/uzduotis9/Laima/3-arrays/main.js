// apsilimui
// 1 kursime 50 ilgio masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100
// 2 uzdavinys: pakeisti atsitiktinius skaicius, kurie yra lyginai i "lyginis"

/*
var masyvas = [];
var i = 0;
while (masyvas.length < 5 ) {
    //Math.floor(Math.random() * (max - min) ) + min;
    burtai = Math.floor(Math.random() * (101 - 10) )+ 10;
//2 uzduotis
    if (burtai % 2 == 0 ) {
        masyvas[i] = "lyginis";
}
    else {
        masyvas[i] = burtai;
        }
    i ++;
}
console.log("Masyvas: " + masyvas.join( " " ));
*/
// ==============================================
// rimta
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena)
// 1 burtu keliu 10 %  paversti minus reiksmemis ( padauginti is  -1)
// 1. uzdavinys: visus skaicius paversti teigiamas (is masyvo parts)
// 2. surasti geriausia darbuotoja
// 3. surasti blogiausia darbuotoja

var t = 0;
var gaminiuSk = [];

while ( t < 5 ) {
    //Math.floor(Math.random() * (max - min) ) + min;
    var burtuskaicius = Math.floor(Math.random() * (201 - 50) )+ 50;
if (Math.random() < 0.1) {
    gaminiuSk[t] = burtuskaicius * (-1);
} else {
    gaminiuSk[t] = burtuskaicius;
}
t ++;
}


console.log("Pagaminta detaliu: " + gaminiuSk.join(" "));
console.log("Pagaminta detaliu: " + gaminiuSk);

//atrintki 10% zmoniu atsitiktiniu budu


var t = 0;
var kiekAtrinkomZmoniu = 0;
var gaminiuSk = [];

while ( t < 5 ) {
    //Math.floor(Math.random() * (max - min) ) + min;
    var burtuskaicius = Math.floor(Math.random() * (201 - 50) )+ 50;
if (Math.random() < 0.1) {
    gaminiuSk[t] = burtuskaicius * (-1);
    kiekAtrinkomZmoniu++;
} else {
    gaminiuSk[t] = burtuskaicius;
}
if (kiekAtrinkomZmoniu == 5 ) {
    break;
}
t ++;
}


console.log("Pagaminta detaliu: " + gaminiuSk.join(" "));
console.log("Pagaminta detaliu: " + gaminiuSk);

var t = 0;

while ( t < 5 ) {
    //Math.floor(Math.random() * (max - min) ) + min;
if (gaminiuSk[t] < 0 ) {
    gaminiuSk[t] = Math.abs(gaminiuSk[t]);
} else {
    }
t ++;
}

console.log("teigiami sk: " + gaminiuSk);


// 2. surasti geriausia darbuotoja
// 3. surasti blogiausia darbuotoja

var min = 999;
var max =  0;
var indMin = 0;
var indMax = 0;

for (var t = 0; t < gaminiuSk.length; t++) {
    if (gaminiuSk[t] < min) {
        min =  gaminiuSk[t];
        indMin = t;
        console.log(gaminiuSk[t]);
    } else {
    if (gaminiuSk[t] > max) {
        max = gaminiuSk[t];
        indMax = t;
    }
}
}

console.log("Maziausias skaicius " + min);
console.log("Didziausias skaicius " + max);
