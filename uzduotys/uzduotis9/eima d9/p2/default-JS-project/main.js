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
