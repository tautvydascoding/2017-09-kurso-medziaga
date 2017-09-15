console.log("Labas");

var galerija = document.getElementById('galerija1');
var text = "<img src='' width='200px' height='150px'/>"
for (var i = 0; i < 2; i++) {
    for (var k = 0; k < 4; k++) {

        // document.write(text);
        galerija1.innerHTML = galerija1.innerHTML + text;
    }
    document.write("<br>");
    galerija1.innerHTML + ="<br>";
}
<<<<<<< HEAD
=======
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
>>>>>>> 092965b3f4fbc4ebfb00f48fa74f0014bdce57d4








//
