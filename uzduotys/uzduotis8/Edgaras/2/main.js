console.log("Labas");

//
names = ["Masina", "Dviratis", 24, "Lektuvas"];

// 1 masyvo gala ideti elmenta “butelis vandens”
// names.splice("butelis vandens");
names.push("butelis vandens");
console.log(names.join(" "));

// 2. i masyvo pradzia ideti elmenta “ziebtuvelis”
names.unshift("ziebtuvelis");
console.log(names.join(" "));

// 3 istrinti 3 elementa
names.splice(2,1);
console.log(names.join(" "));

// 4 sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti skaiciu 0 (kiekvienas stalcius turi but lygus "0");
var masyvas = []; // sukuriam tuscia masyva
for (var i = 0; i < 50; i++) {
    masyvas[i] = 0; // padarom kad masyva pildytu ciklas, kiekvieno elemento reiksme = 0.
}
console.log(masyvas.join(" ")); // spausdinam masyva

//  5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti skaiciu 1;
    var t = 0;
    while (t < 100) { //
        masyvas[t] = 1
        t++;
}
console.log(masyvas.join(" ")); // spausdinam masyva
console.log(masyvas); // spausdina su kableliais
console.log(masyvas.toString()); // spausdina su kableliais

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
var t = 0; // sukuriam kintamaji
while (t < 100) { // padarom kad kintamaji kartotu 100 kartu
    masyvas[t] = 3 // padarom, kad elementas butu 3
t = t + 1; // padarom, kad kas antra paraso 1
t++; // sita darom del to kad masyvas nebutu begalinis
}
console.log(masyvas.join(" ")); // spausdinam masyva


// 6 ieskom prekes PVM
function getPVM(x) {
    var ats = x * 0.21;
    return ats;
}
var prekesKaina = 50;
var prekesKainaSuPVM = prekesKaina + getPVM(prekesKaina);
console.log("Kaina su PVM:", prekesKainaSuPVM);


// 7 uzduotis. Isvesti skirtingas reklamas pagal amziu
// klientai < 8 metai "Kinder kiausiniai"
// klientai 8 iki 15 "MTV kanalas"
// klientai 16 iki 18 "Nujausi telefonai"
// kleintai >65 "Pensiju atsiemimas per 1 men"
// senBlaster - siuncia emailus
age = 5;
console.log("Amzius:" + age);


if( age <= 8) {
    console.log("Kinder kiausiniai -50%");
}
else if(age > 8 && age <= 15) {
    console.log("MTV kanalas");
    } else if (age <= 18) {
    console.log("Naujausi telefonai");
    } else if (age => 65) {
    console.log("Pensiju atsiemimas per 1 men");
    }


// pensininkams ir vaikams <8 matytu ta pacia reklama "Laimes rato reklama"
if (age <=8 || age > 65) {
    if (age <=8) {
        console.log("Kinder kiausiniai -50%");
    } else if (age > 65) {
        console.log("Pensiju atsiemimas per 1 men");
    }
    console.log("Laimes rato reklamas");

}else if(age > 8 && age <= 15) {
    console.log("MTV kanalas");
    } else if (age <= 18) {
    console.log("Naujausi telefonai");
    }
