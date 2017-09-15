console.log("Labas");

// apsilimas
// sukurti masyva su skaiciais random nuo 10 iki 100
// pakeisti atsitiktinius skaicius, kuriai lyginiai i zodi "lyginis"

// var masyvas = [];
// for (var i=0 ; i < 50 ; i++) {
//   var burtuSkaicius= Math.floor(Math.round(Math.random() *(101-10)))+10;
//
// if (burtuSkaicius % 2 == 0) {
//   masyvas[i]= "lyginis";
// } else {
//   masyvas[i]= burtuSkaicius;
// }
// }
// console.log(masyvas);

//end

// var t = 0;
// var gaminiuSk = [];
// while ( t < 50 ) {
//   var burtuSkaicius=Math.floor(Math.round(Math.random() *(201-50)))+50;
//   if ( Math.random() <= 0.1) {
//     gaminiuSk[t] = burtuSkaicius * (-1);
//   } else {
//   gaminiuSk[t] = burtuSkaicius;
//   }
//   t++;
// }
// console.log("pagaminta detaliu: " + gaminiuSk.join(" ")); //vienoje eiluteje
// console.log("pagaminta detaliu: " + gaminiuSk);
// // 10 proc. atranka atsitiktiniu budu
// var t = 0;
// var kiekAtrinkta = 0;
// var gaminiuSk = [];
// while ( t < 50 ) {
//   var burtuSkaicius=Math.floor(Math.round(Math.random() *(201-50)))+50;
//   if ( Math.random() <= 0.1) {
//     gaminiuSk[t] = burtuSkaicius * (-1);
//     kiekAtrinkta++;
//   } else {
//   gaminiuSk[t] = burtuSkaicius;
//   }
//   if (kiekAtrinkta == 5) {
//     break;
//   }
//   t++;
// }

// surasti geriausia
var didziausias = 0; //ieskant maziausio, reikia pakeisti i didele verte, nes nulis niekada nebus > uz gaminiuSk
var geriausioDarbuotojoNr = 0;
var maziausias = 0;
var t = 0;
var gaminiuSk = [];
for (t = 0; t < 50; t++ ) {
  var burtuSkaicius=Math.floor(Math.round(Math.random() *(201-50)))+50;
  gaminiuSk[t] = burtuSkaicius;
  if (didziausias<gaminiuSk[t]) {
    didziausias= gaminiuSk[t];
    geriausioDarbuotojoNr = t;
  }
}
console.log("geriausioDarbuotojoNr: " + geriausioDarbuotojoNr, gaminiuSk);
var galerija = document.getElementById('galerija');
var paveiksliukas = "<img src='#' width='50px', height='50px'>";
for (i = 0; i < 2; i++) {
  //document.write ('<br>');
  galerija.innerHTML += ('<br>'); // document.write consolej
  for (var t = 0; t < 4; t++) {
    // document.write(paveiksliukas);
    galerija.innerHTML += paveiksliukas; // document.write bus consolej
  }
}
