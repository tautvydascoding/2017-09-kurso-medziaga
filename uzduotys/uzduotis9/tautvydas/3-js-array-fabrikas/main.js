console.log("Labas");


// apsilimui
// 1 sukurtia masyva 50 ilgio, kuris uzpildytas  atsitiktiniais skaiciais nuo 10 - 100
// 2 uzdavinys: pakeisti atsitiktinius skaicius, kurie yra lyginai i "lyginis"
 // 5 % 3 == 2



 // 1 )
var masyvas = [];
for (var i = 0; i < 50; i++) {
    // Math.floor(Math.random() * (max - min) ) + min;
    var burtuSkaicius =  Math.floor(Math.random() * (101 - 10) ) + 10;

    // 2 uzduotis
    if ( burtuSkaicius % 2 == 0 ) { // 
         masyvas[i] = "lyginis";
    } else {
        masyvas[i] = burtuSkaicius;
    }

    // masyvas.push(1);
}
console.log(masyvas);






//








//
