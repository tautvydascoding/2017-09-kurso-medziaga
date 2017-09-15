console.log("Labas");

var masina = "Audi";
switch (masina) { // cia dedasi kintamasis kur itikrinsim
        case "BMW":
                // veiksmai
                console.log("Jusu masina: BMW");
        break;

        case "Audi":
                // veiksmai
                console.log("Jusu masina: Audi");
        break;

        case "Peugeot":
                // veiksmai
                console.log("Jusu masina: Peugeot");
        break;

        case "VW":
                // veiksmai
                console.log("Jusu masina: VW");
        break;

    default:

}

// beloginiai ciklai
var t = 0;
while (true) {
    console.log("ieskau");
    if ( t == 15) {
        break;
    }
    t++;
}

// apsilimui
// 1 kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100


var skaiciai = [i];
for (var i = 0; i < 50; i++) {
    var burtuSkaicius = Math.floor (Math.random() * (101 - 10)) + 10;
    skaiciai[i] = burtuSkaicius;
}
console.log(skaiciai);

// 2uzdavinys: pakeisti atsitiktinius skaicius, kurie yra lyginai i "lyginis"
