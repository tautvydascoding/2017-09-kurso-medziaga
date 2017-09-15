console.log("labas");


// 1 kursime nauja masyva 50 ilgio uzpildyta atsitiktiniais skaiciauis nuio 10-100
// 2 uzdavinys: pakeisti atsitiktinius skaicius kurie yra lyginiai i "lyginis"


///1
var masyvas = [];
for (var i = 0; i < 50; i++ ) {
  //math.floor(math.random() * (max-min) ) + min;
  var burtuSkaicius = Math.floor(Math.random() * (101 - 10) ) + 10;
  // 2 uzduotis
  if (burtuSkaicius % 2 == 0 ) {
      masyvas[i] = "lyginis";
  } else {
    masyvas[i] = burtuSkaicius;

  }
}
console.log(masyvas);


// rimta
// 1 kursime nauja masyva uzpildyta atsitiktiniais skaiciais nuo 50-100 pagamtimos detalems per menesi
// 2 burtu keliu su 10% tikimybe paversti minus reiksmemis ( padaiginti is -1)
var kiekAtrinkomeZmoniu = 0;
var t= 0;
var gaminiuSk = [];
while ( t < 50 ) {

//math.floor(math.random() * (max-min) ) + min;
  var burtuSkaicius = Math.floor(Math.random() * (201 - 50) ) + 50;
  if ( Math.random () <= 0.1 ) {
    gaminiuSk[t] = burtuSkaicius * (-1);
    kiekAtrinkomeZmoniu++
  } else {
    gaminiuSk[t] = burtuSkaicius;
    }
    if (kiekAtrinkomeZmoniu == 5 ) {
      break;
    }
    t++;
}
console.log("5 laiminga - zmones " + gaminiuSk.join(" ") );

// uzdavinys: visus skaicius paversti teigiamas (is masyvo parts)



for (var i = 0; i < gaminiuSk.length; i++) {
  if (gaminiuSk[i] < 0) {
    gaminiuSk[i] = Math.abs(gaminiuSk[i])
  }
}

console.log("Paverciam skaicius teigiamais: ", gaminiuSk);



// 2. surasti geriausia darbuotoja
// 3. surasti blogiausia darbuotoja



var geriausiasSk = Math.max(...gaminiuSk);
console.log(geriausiasSk);
var maziausiasSk = Math.min(...gaminiuSk);
console.log(maziausiasSk);


var didziausias = 0;
var maziausias = 99999;
var geriausasD = 0;
var blogiausiasD = 0;
for (var i = 0; i < gaminiuSk.length; i++) {
  if (didziausias < gaminiuSk[i]) {
      didziausias = gaminiuSk[i];
      geriausasD = i;
  }
  if (maziausias > gaminiuSk[i]) {
      maziausias = gaminiuSk[i];
      blogiausiasD = i;
  }
}
var galerija = document.getElementById('gallery');
var text = "<img src'' width='150px' height='100px' />"
for (var g = 0; g < 2; g++) {
  for (var k = 0; k < 4; k++){
    galerija.innerHTML += text;
  }
  galerija.innerHTML += "<br>";
}
